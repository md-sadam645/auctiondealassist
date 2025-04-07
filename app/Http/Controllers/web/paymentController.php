<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentDetail;
use App\Models\PurchasedSubscription;
use App\Models\User;

use Carbon\Carbon;

class paymentController extends Controller
{

    public function payment(Request $request)
    {

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

        
        $buyer_name = Auth::user()->full_name;
        $buyer_email = Auth::user()->email;
        $buyer_mobile = Auth::user()->mobile;

        $duration = ($request->duration*30);

        //current date time
        $var  = Carbon::now('Asia/Kolkata');
        $currentTime = $var->toDateTimeString();

        $purchasedPlan = PurchasedSubscription::where("status",1)->where("user_id",Auth::user()->id)->first();
        if(empty($purchasedPlan))
        {
    
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER,
                        array("X-Api-Key:test_3feabd2ce2082896d68ffde6cab",
                            "X-Auth-Token:test_7e78a7c4db4fba1754dcaf6b9b7"));
            $payload = Array(
                'purpose' => $request->plan_name,
                'amount' => $request->price,
                'phone' => $buyer_mobile,
                'buyer_name' => $buyer_name,
                'redirect_url' => 'http://127.0.0.1:8000/payment_response/',
                'send_email' => true,
                // 'webhook' => 'https://www.google.com/',
                'send_sms' => true,
                'email' => $buyer_email,
                'allow_repeated_payments' => true
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch); 

            $paymentData = json_decode($response);

            //inserting data in PurchasedSubscription
            if($paymentData->success == 1)
            {
                $allData = new PurchasedSubscription;
                $allData->current_plan = $request->plan_name;
                $allData->plan_price = $request->price;
                $allData->duration = $request->duration." Months";
                $allData->purchased_date = $currentTime;
                $allData->expiry_date = Carbon::now()->addDay($duration);
                $allData->buyer_name = $buyer_name;
                $allData->buyer_email = $buyer_email;
                $allData->buyer_mobile = $buyer_mobile;
                $allData->status = '0';
                $allData->user_id = Auth::user()->id;
                $allData->save();
                if($allData)
                {       
                    // return $response->payment_request->longurl;     
                    return redirect($paymentData->payment_request->longurl);
                }
            }
        }
        else
        {
            $pendingPurchasedPlan = PurchasedSubscription::where("status",3)->where("user_id",Auth::user()->id)->first();
            //if user have already subscription but remaining day less than 7, they can purchased new subscription
            if(empty($pendingPurchasedPlan))
            {

            
                if($purchasedPlan->remaining_days <= 7)
                {
                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
                    curl_setopt($ch, CURLOPT_HEADER, FALSE);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
                    curl_setopt($ch, CURLOPT_HTTPHEADER,
                                array("X-Api-Key:test_3feabd2ce2082896d68ffde6cab",
                                    "X-Auth-Token:test_7e78a7c4db4fba1754dcaf6b9b7"));
                    $payload = Array(
                        'purpose' => $request->plan_name,
                        'amount' => $request->price,
                        'phone' => $buyer_mobile,
                        'buyer_name' => $buyer_name,
                        'redirect_url' => 'http://127.0.0.1:8000/payment_response/',
                        'send_email' => true,
                        // 'webhook' => 'https://www.google.com/',
                        'send_sms' => true,
                        'email' => $buyer_email,
                        'allow_repeated_payments' => true
                    );
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
                    $response = curl_exec($ch);
                    curl_close($ch); 

                    $paymentData = json_decode($response);

                    //inserting data in PurchasedSubscription
                    if($paymentData->success == 1)
                    {
                        $allData = new PurchasedSubscription;
                        $allData->current_plan = $request->plan_name;
                        $allData->plan_price = $request->price;
                        $allData->duration = $request->duration." Months";
                        $allData->purchased_date = $currentTime;
                        $allData->expiry_date = Carbon::now()->addDay($duration);
                        $allData->buyer_name = $buyer_name;
                        $allData->buyer_email = $buyer_email;
                        $allData->buyer_mobile = $buyer_mobile;
                        $allData->status = '3';
                        $allData->user_id = Auth::user()->id;
                        $allData->save();
                        if($allData)
                        {       
                            // return $response->payment_request->longurl;     
                            return redirect($paymentData->payment_request->longurl);
                        }
                    }
                }
                else
                {
                    return back()->with("error","You've already active subscription!");
                }
            }
            else
            {
                return back()->with("error","You've already active subscription!");
            }
        }
       
    }  



    public function paymentResponse(Request $request)
    {
       
       $payment_info = $request->all();
       //finding latest purchased Subscription id
       $latestData = PurchasedSubscription::orderBy("id", 'DESC')->where('user_id',Auth::user()->id)->get();
    
       if($payment_info['payment_status'] == "Credit")
       {
            if($latestData[0]->status == '0')
            {
                $update = PurchasedSubscription::where('id',$latestData[0]->id)->update(array(
                    'payment_id' => $payment_info['payment_id'],
                    'payment_status' => $payment_info['payment_status'],
                    'payment_request_id' => $payment_info['payment_request_id'],
                    'status' => '1'
                ));
                if($update)
                {
                    return redirect("/account/my-subscriptions")->with('success','Payment Success'); 
                }
            }

            if($latestData[0]->status == '3')
            {
                $update = PurchasedSubscription::where('id',$latestData[0]->id)->update(array(
                    'payment_id' => $payment_info['payment_id'],
                    'payment_status' => $payment_info['payment_status'],
                    'payment_request_id' => $payment_info['payment_request_id'],
                    'status' => '3'
                ));
                if($update)
                {
                    return redirect("/account/my-subscriptions")->with('success','Payment Success'); 
                }
            }  
       }
       else
       {
            $update = PurchasedSubscription::where('id',$latestData[0]->id)->update(array(
                'payment_id' => $payment_info['payment_id'],
                'payment_status' => $payment_info['payment_status'],
                'payment_request_id' => $payment_info['payment_request_id'],
                'status' => '0'
            ));
            if($update)
            {
                return redirect("/account/my-subscriptions")->with('error','Payment '.$payment_info['payment_status']); 
            }
           
       }
        
    }
}
