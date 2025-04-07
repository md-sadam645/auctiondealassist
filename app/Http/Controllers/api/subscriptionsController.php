<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\PurchasedSubscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class subscriptionsController extends Controller
{
    //Start - Subscription
    public function subscriptions()
    {
        $data = Subscription::all();
        return response(['status'=>1,'data' => $data], 200);
    }
    //End - Subscription

    //start - view Purchased Subscription
    public function mySubscription(Request $request)
    {
        $userDetail= $request->user()->token();
        $uid = $userDetail->user_id;
        
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
        $fetchLatestData = PurchasedSubscription::where("payment_status", "Credit")->where("status", 1)->where("user_id", $uid)->first();
        if(empty($fetchLatestData))
        {
            $fetchLatestData = PurchasedSubscription::where("payment_status", "Credit")->where("status", 3)->where("user_id", $uid)->first();
            if(!empty($fetchLatestData))
            {
                PurchasedSubscription::where("id",$fetchLatestData->id)->update(array('status' => '1'));
            }
        }
        //end - expired subscription
        

        //start subtracted plan duration from current date
        $allData = PurchasedSubscription::where("payment_status","Credit")->where("user_id", $uid)->get();
        if($allData != '[]')
        {
            $active_sub = PurchasedSubscription::where("payment_status","Credit")->where("status",1)->where("user_id", $uid)->first(); 
            
           
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
                    $updatedAllData = PurchasedSubscription::where("payment_status","Credit")->where("user_id", $uid)->get();
                    // $data['list'] = $updatedAllData;
                    return response(['status'=>1,'data' => $updatedAllData], 200);
                } 
            }
            else
            {
                //if it has been only expired property than show 0 purchased subscription
                // $data['list'] = $allData;
                return response(['status'=>1,'data' => $allData], 200);  
            }
            
        }
        else
        {
            //if it has not Purchased any subscription than show 0 purchased subscription
            return response(['status'=>1,'data' => "Doesn't purchased any subscription!"], 200);
        }
        //end subtracted plan duration from current date 
    }
    //End - view Purchased Subscription
}
