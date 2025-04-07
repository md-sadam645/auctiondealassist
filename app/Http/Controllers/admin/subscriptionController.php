<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\PaymentDetail;
use App\Models\User;
use App\Models\PurchasedSubscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class subscriptionController extends Controller
{
    //Start - create new subscription
    public function index(Request $request)
    {
        if(Subscription::create($request->all()))
        {
            return back()->with("success","Subscription Added  Successfully!");
        }
    }
    //End - create new subscription

    //Start - view all subscription
    public function view()
    {
        $data['list'] = Subscription::paginate(10);
        return view("backend.subscription.view", $data);
    }
    //End - view all subscription

    //Start - Edit subscription
    public function edit(Request $request, $id)
    {
        $data['list'] =  Subscription::where("id",$request["id"])->get();
        return view("backend.subscription.index", $data);
    }
    //End - Edit subscription

    //Start - update subscription
    function update(Request $request, $id)
    {
        $update = Subscription::where('id', $request["id"])->update(array(
            'plan_name' => $request['plan_name'],
            'price' => $request['price'],
            'duration' => $request['duration'],
            'archives' => $request['archives']
        ));
        if($update)
        {
            return redirect("/subscription/view")->with("success","Subscription update Successfully!");
        }
        
    }
    //End - update property


    //Start - delete subscription
    function delete(Request $request, $id)
    {
        $response =  Subscription::where("id",$request["id"])->delete();
        if($response)
        {
            return back()->with("success","Subscription Deleted  Successfully!");
        }
    }
    //End - delete subscription


    //Start - retrieve Subscription on Subscription Page
    public function viewOnSubscriptionPage()
    {
        $allData = Subscription::all();
        if($allData != "[]")
        {
            $data['list'] = $allData;
            return view("web/subscription/index",$data);
        }
        else
        {
            $data['list'] = $allData;
            return view("web/subscription/index",$data);
        }
        
    }
    //End - retrieve Subscription On Subscription Page


    //start - view Purchased Subscription
    public function viewPurchasedSubscription()
    {
        //start - expired subscription
        //current date time
        $var  = Carbon::now('Asia/Kolkata');
        $currentTime = $var->toDateTimeString();

        //getting purchased plan info
        $purchasedData = PurchasedSubscription::get();
        foreach($purchasedData as $key => $value)
        {
            $purchasedDate = $purchasedData[$key];
            if($currentTime >= $purchasedDate->expiry_date)
            {
                //making status 2 of expired plan
                PurchasedSubscription::where('id', $purchasedDate->id)->update(array('status' => 2));
            }
        }

        //if active subscription expired and it has pending subscription than activated - pending sub
        $fetchLatestData = PurchasedSubscription::where("payment_status", "Credit")->where("status", 1)->where("user_id", Auth::user()->id)->first();
        if(empty($fetchLatestData))
        {
            $fetchLatestData = PurchasedSubscription::where("payment_status", "Credit")->where("status", 3)->where("user_id", Auth::user()->id)->first();
            if(!empty($fetchLatestData))
            {
                PurchasedSubscription::where("id",$fetchLatestData->id)->update(array('status' => '1'));
            }
        }
        //end - expired subscription
        

        //start subtracted plan duration from current date
        $allData = PurchasedSubscription::where("payment_status","Credit")->where("user_id", Auth::user()->id)->get();
        if($allData != '[]')
        {
            $active_sub = PurchasedSubscription::where("payment_status","Credit")->where("status",1)->where("user_id", Auth::user()->id)->first(); 
            
           
            //if it has been active purchased_subscription than subtracted plan duration from current date
            if(!empty($active_sub))
            {
                  
                $plan_duration = $active_sub['expiry_date'];
                $split_duration = explode(" ",$plan_duration);

                //getting diff purchased date from current date
                if(!empty($split_duration[0]))
                {
                    $remaining_days = Carbon::now()->diffInDays(Carbon::parse($split_duration[0]));
                }
                else
                {
                    $remaining_days = 0;
                }

                
                //updating remaining days of subscription plan
                $update = PurchasedSubscription::where("id",$active_sub['id'])->update(array(
                    "remaining_days" => $remaining_days
                ));
                if($update)
                {
                    $updatedAllData = PurchasedSubscription::where("payment_status","Credit")->where("user_id", Auth::user()->id)->get();
                    $data['list'] = $updatedAllData;
                    return view('web/account/mySubscriptions',$data);
                } 
            }
            else
            {
                //if it has been only expired property than show 0 purchased subscription
                $data['list'] = $allData;
                return view('web/account/mySubscriptions',$data);  
            }
            
        }
        else
        {
            //if it has not Purchased any subscription than show 0 purchased subscription
            $data['list'] = [];
            return view('web/account/mySubscriptions');
        }
        //end subtracted plan duration from current date 
    }
    //End - view Purchased Subscription


    //start - Delete Purchased Subscription
    public function deletePurchasedSubscription($id)
    {
       
        $response =  PurchasedSubscription::where("id", $id)->delete();
        if($response)
        { 
            return redirect("/account/my-subscriptions")->with("Success","Expired Subscription Deleted  Successfully!");
        }
    }
    //End - Delete Purchased Subscription

}
