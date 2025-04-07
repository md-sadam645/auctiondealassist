<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyList;
use App\Models\Bank;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Imports\ImportProperty;
use Illuminate\Support\Str;
use App\Models\Subscription;
use App\Models\ViewedProperty;
use App\Models\PurchasedSubscription;
use Carbon\Carbon;
use Excel;
class propertyController extends Controller
{
    //start upload new property 
    public function index(Request $request)
    {
        //sale notice file not empty
        if(!empty($request->file("sale_notice")))
        {
            $sale_notice = pathinfo($request->file("sale_notice")->getClientOriginalName(), PATHINFO_FILENAME);
            $sale_notice = $sale_notice.time().".".pathinfo($request->file("sale_notice")->getClientOriginalName())['extension'];
            $sale_notice = strtolower($sale_notice);
            $sale_notice_url = $request->file("sale_notice")->storeAs(env('AddProperty_saleNoticeField')."/",$sale_notice);

            $formData = $request->all();
            $formData["sale_notice"] = $sale_notice_url;

            if(PropertyList::create($formData))
            {
                return redirect("/property/view")->with("success","Property Added Successfully!");
            }
        }
        else
        {
            if(PropertyList::create($request->all()))
            {
                return redirect("/property/view")->with("success","Property Added Successfully!");
            }
        }
        
    }
    // end upload new property

    //Start - view all property
   public function view()
   {
       session()->forget('total-property');
       
       if(Auth::user()->role == 1)
       {
           $data['list'] = PropertyList::paginate(10); 
           $totalProperty = count(PropertyList::all());
           session()->put('total-property',$totalProperty);
       }
       else
       {
           $data['list'] = PropertyList::where("add_by", Auth::user()->id)->paginate(10);
           $totalProperty = count(PropertyList::where("add_by", Auth::user()->id)->get()); 
           session()->put('total-property',$totalProperty);
       }

       $data['user'] = User::get();
       return view("backend.property.view", $data);  
   }
    //End - view all property


    //Start - edit property
    public function edit(Request $request, $id)
    {
        $data['list'] =  PropertyList::where("id",$request["id"])->get();
        $data['bankName'] = Bank::get();
        return view("backend.property.index", $data);
    }
    //End - edit property

    //Start - update property
    function update(Request $request, $id)
    {
    
       //property updated without all images
        if(empty($request->file("sale_notice")))
        {
            $update = PropertyList::where('id', $request["id"])->update(array(
                'bank_name' => $request['bank_name'],
                'branch_name_and_address' => $request['branch_name_and_address'],
                'borrower_name' => $request['borrower_name'],
                'property_type' => $request['property_type'],
                'property_details' => $request['property_details'],
                'area' => $request['area'],
                'possession' => $request['possession'],
                'locality' => $request['locality'],
                'city' => $request['city'],
                'state' => $request['state'],
                'reserve_price' => $request['reserve_price'],
                'emd_amount' => $request['emd_amount'],
                'bid_increment' => $request['bid_increment'],
                'inspection_date' => $request['inspection_date'],
                'emd_submission' => $request['emd_submission'],
                'auction_start' => $request['auction_start'],
                'auction_end' => $request['auction_end'],
                'authorized_officer' => $request['authorized_officer'],
                'auction_portal' => $request['auction_portal']
            ));
            if($update)
            {
                return redirect("/property/view")->With("success","Property update successfully!");
                
            }
        }

        // property updated with sale notice
        if(!empty($request->file("sale_notice")))
        {
            //sale notice file
            $sale_notice = pathinfo($request->file("sale_notice")->getClientOriginalName(), PATHINFO_FILENAME);
            $sale_notice = $sale_notice.time().".".pathinfo($request->file("sale_notice")->getClientOriginalName())['extension'];
            $sale_notice = strtolower($sale_notice);
            
            //delete exists profile image
            $property_list = PropertyList::where('id', $request["id"])->first();
            $sale_notice_path = public_path()."/".$property_list['sale_notice'];
          
            if(file_exists($sale_notice_path))
            {
                $sale_notice_url = $request->file("sale_notice")->storeAs(env('AddProperty_saleNoticeField')."/",$sale_notice);
                @unlink($sale_notice_path);
                
            }

            $update = PropertyList::where('id', $request["id"])->update(array(
                'bank_name' => $request['bank_name'],
                'branch_name_and_address' => $request['branch_name_and_address'],
                'borrower_name' => $request['borrower_name'],
                'property_type' => $request['property_type'],
                'property_details' => $request['property_details'],
                'area' => $request['area'],
                'possession' => $request['possession'],
                'locality' => $request['locality'],
                'city' => $request['city'],
                'state' => $request['state'],
                'reserve_price' => $request['reserve_price'],
                'emd_amount' => $request['emd_amount'],
                'bid_increment' => $request['bid_increment'],
                'inspection_date' => $request['inspection_date'],
                'emd_submission' => $request['emd_submission'],
                'auction_start' => $request['auction_start'],
                'auction_end' => $request['auction_end'],
                'authorized_officer' => $request['authorized_officer'],
                'auction_portal' => $request['auction_portal'],
                'sale_notice' => $sale_notice_url
            ));
            if($update)
            {
                return redirect("/property/view")->with("success","Property update Successfully !");
            }
        }
    }
    //End - edit property

    //Start - delete property
    function delete(Request $request, $id)
    {
        $property_list =  PropertyList::where("id",$request["id"])->first();

        $propertyDelete = PropertyList::where("id",$request["id"])->delete();
        if($propertyDelete)
        {
            return back()->with("success","Property Deleted Successfully!");
        }
        
    }
    //End - delete property

    //Start - view property on homepage
    public function viewProperty()
    {
        //start expired subscription
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
        //end expired subscription
        

        //start subtracted plan duration from current date
        $active_sub = PurchasedSubscription::where("status",1)->where("payment_status","Credit")->first();
        if(!empty($active_sub))
        {
         
            //subtracted plan duration from current date
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
            PurchasedSubscription::where("id",$active_sub['id'])->update(array(
                "remaining_days" => $remaining_days
            ));     
            
        }
        //end subtracted plan duration from current date


        $data['list'] = PropertyList::inRandomOrder()->where("status", "1")->paginate(6);

        //retrieve all state property on homepage 
        $data['andhraPradesh'] = PropertyList::where("state","andhra pradesh")->where("status", "1")->get();
        $data['chhattisgarh'] = PropertyList::where("state","chhattisgarh")->where("status", "1")->get();
        $data['gujarat'] = PropertyList::where("state","gujarat")->where("status", "1")->get();
        $data['karnataka'] = PropertyList::where("state","karnataka")->where("status", "1")->get();
        $data['madhyaPradesh'] = PropertyList::where("state","madhya pradesh")->where("status", "1")->get();
        $data['maharashtra'] = PropertyList::where("state","maharashtra")->where("status", "1")->get();
        $data['punjab'] = PropertyList::where("state","punjab")->where("status", "1")->get();
        $data['rajasthan'] = PropertyList::where("state","rajasthan")->where("status", "1")->get();
        $data['tamilNadu'] = PropertyList::where("state","tamil nadu")->where("status", "1")->get();
        $data['uttarPradesh'] = PropertyList::where("state","uttar pradesh")->where("status", "1")->get();
        $data['telangana'] = PropertyList::where("state","telangana")->where("status", "1")->get();
        $data['newDelhi'] = PropertyList::where("state","new delhi")->where("status", "1")->get();
        $data['chandigarh'] = PropertyList::where("state","chandigarh")->where("status", "1")->get();
        $data['haryana'] = PropertyList::where("state","haryana")->where("status", "1")->get();
        $data['bihar'] = PropertyList::where("state","bihar")->where("status", "1")->get();
        $data['goa'] = PropertyList::where("state","goa")->where("status", "1")->get();
        $data['jharkhand'] = PropertyList::where("state","jharkhand")->where("status", "1")->get();
        $data['westBengal'] = PropertyList::where("state","west bengal")->where("status", "1")->get();
        
        return view("web.home.index", $data);
    
    }
    //End - view property on homepage


    //Start - view for Listing page
    public function viewForListing(Request $request)
    {
        $data['property'] = PropertyList::inRandomOrder()->where("status", "1")->paginate(12);
        $data['recent'] = PropertyList::orderBy('id', 'DESC')->where("status", "1")->paginate(3);

        return view("web.listing.index", $data);
    }
    //End - view for Listing page

    //Start - view for state wise property
    public function stateWiseProperty($state)
    {
       
        $data['property'] = PropertyList::where("status",1)->where("state", $state)->paginate(12);
        $data['recent'] = PropertyList::where("status",1)->where("state", $state)->orderBy('id', 'DESC')->paginate(3);
        return view("web.listing.index", $data);
    }
    //End - view for state wise property


    //Start - view property in details on listing details pages
    public function listingDetails($id)
    {

        if(Auth::user())
        {
            //if active subscription expired and it has pending subscription than activated - pending sub
            $fetchLatestData = PurchasedSubscription::where("payment_status", "Credit")->where("status", 1)->where("user_id", Auth::user()->id)->first();
            if(empty($fetchLatestData))
            {
                $fetchLatestData = PurchasedSubscription::where("payment_status", "Credit")->where("status", 3)->where("user_id", Auth::user()->id)->first();
                PurchasedSubscription::where("id",$fetchLatestData->id)->update(array('status' => '1'));
            }

            //fetching viewed data
            $viewedProperty = ViewedProperty::where("user_id", Auth::user()->id)->where("property_id",$id)->first();
            //fetching property by id
            $property_details = PropertyList::where("status", "1")->where("id",$id)->get();
            //current date time
            $currentTime = Carbon::now('Asia/Kolkata');


            if(empty($viewedProperty))
            {
                //finding all purchased Subscription id
                $fetchLatestData = PurchasedSubscription::where("payment_status", "Credit")->where("status", 1)->where("user_id", Auth::user()->id)->first();
                if(empty($fetchLatestData))
                {
                    //if not having any subscription than redirect subscription page
                    return redirect('/subscriptions/index')->with("error","You haven't Any Active Subscription !");
                }
                else
                {
                    
                    //insert viewed property details 
                    $allData = new ViewedProperty;
                    $allData->property_id =  $property_details[0]->id;
                    $allData->bank_name = $property_details[0]->bank_name;
                    $allData->property_type =  $property_details[0]->property_type;
                    $allData->viewed_date = $currentTime->toDateTimeString();
                    $allData->user_id = Auth::user()->id;
                    $allData->save();

                    if($allData)
                    {
                        foreach($property_details as $data)
                        {
                            //finding add_by id
                            $user_id = $data->add_by;
                            $city = $data->city;
                            
                        }
                        //property details
                        $data['list'] = $property_details;
                        
                        //finding add_by details
                        $data["add_by"] = User::where("id", $user_id)->get();

                        //retrieve recent uploaded property
                        $data['recent'] = PropertyList::orderBy('id', 'DESC')->where("status", "1")->paginate(3);

                        //retrieve similar uploaded property
                        $data['similar'] = PropertyList::where("status", "1")->where('city', $city)->paginate(3);

                        return view("web.listing.listing_details", $data);
                    }
                          
                }
            }
            else
            {
                //if already property viewed than access any time
                $update = ViewedProperty::where('id', $viewedProperty->id)->update(array(
                    'viewed_date' => $currentTime->toDateTimeString()
                ));
                if($update)
                {
                    foreach($property_details as $data)
                    {
                        //finding add_by id
                        $user_id = $data->add_by;
                        $city = $data->city;
                        
                    }

                    //property details
                    $data['list'] = $property_details;

                    //finding add_by details
                    $data["add_by"] = User::where("id", $user_id)->get();

                    //retrieve recent uploaded property
                    $data['recent'] = PropertyList::orderBy('id', 'DESC')->where("status", "1")->paginate(3);

                    //retrieve similar uploaded property
                    $data['similar'] = PropertyList::where("status", "1")->where('city', $city)->paginate(3);

                    return view("web.listing.listing_details", $data);
                }
            }
        }
        else
        {
            return redirect("/")->with('error','Need to Login');
        }
    }
    //End - view property in details on listing details pages


    //Start - viewed Property shown on user profile
    public function viewedProperty()
    {
        $data['total'] = ViewedProperty::where("user_id",Auth::user()->id)->get();
        $data['list'] = ViewedProperty::where("user_id",Auth::user()->id)->paginate(10);
        return view("web/account/viewedProperty",$data);
    }
    //End - viewed Property shown on user profile
    


    //Start - property approve
    public function approve($id)
    {
        $update = PropertyList::where('id', $id)->update(array(
            'status' => '1'
        ));
        if($update)
        {
            return redirect("/property/view")->with("success","Property Approved Successfully !");
        }
    }
    //End - property approve

    //Start - property reject   
    public function reject($id)
    {
        $update = PropertyList::where('id', $id)->update(array(
            'status' => '2'
        ));
        if($update)
        {
            return redirect("/property/view")->with("success","Property Rejected Successfully !");
        }

    }
    //End - property reject 

    //Start - search property on homepage
    public function searchProperty(Request $request)
    { 
        $searchedLocation = explode(",",$request['location'])[0];

        //searching property
        if($request['property_type'] && $searchedLocation)
        {
            //if session has exists than forgetting old session
            session()->forget('property-type');
            session()->forget('location');

            //putting new session
            session()->put('property-type',$request->property_type);
            session()->put('location',$searchedLocation);

            $data['search'] = PropertyList::where("status", "1")->where('property_type','LIKE','%'.$request->property_type.'%')->where('branch_name_and_address','LIKE','%'.$searchedLocation.'%')->orWhere('locality','LIKE','%'.$searchedLocation.'%')->orWhere('city','LIKE','%'.$searchedLocation.'%')->orWhere('state','LIKE','%'.$searchedLocation.'%')->orWhere('property_details','LIKE','%'.$searchedLocation.'%')->paginate(12);
            return view("web.propertySearch.index",$data);
        }
        else
        {  
            $property_type = session()->get('property-type');
            $address = session()->get('location');
        
            $data['search'] = PropertyList::where("status", "1")->where('property_type','LIKE','%'.$property_type.'%')->where('branch_name_and_address','LIKE','%'.$address.'%')->orWhere('locality','LIKE','%'.$address.'%')->orWhere('city','LIKE','%'.$address.'%')->orWhere('state','LIKE','%'.$address.'%')->orWhere('property_details','LIKE','%'.$address.'%')->paginate(12);
            return view("web.propertySearch.index",$data);  
        }
        
    }
    //End - search property on homepage

    //Start - view total property, bank, subscription, consultant on dashboard
    public function viewOnDashboard()
    {
        $consultantProperty = PropertyList::where('add_by',Auth::user()->id)->where("status", "1")->get();
        $data['consultantProperty'] = count($consultantProperty);

        $all_Property = PropertyList::where("status", "1")->get();
        $data['property'] = count($all_Property);

        $subscription_all_data = Subscription::get();
        $data['subscription'] = count($subscription_all_data);

        $consultant_all_data = User::where('role', 2)->get();
        $data['consultant'] = count($consultant_all_data);

        $bank_all_data = Bank::get();
        $data['bank'] = count($bank_all_data);

        return view("backend.dashboard.index",$data);
    }
    //End - view total property, bank, subscription, consultant on dashboard

    //search Property list By State on admin panel
    public function searchPropertyByState(Request $request)
    {   
        $data['user'] = User::get();
        
        //new search
        if($request['search-property'])
        {
            //if session has exists than forgetting old session
            session()->forget('property-list');
            session()->forget('total-property');

            if(Auth::user()->role == 1)
            {
                session()->put('property-list',$request['search-property']);
                $total_property = count(PropertyList::where('state',$request['search-property'])->get());

                session()->put('total-property',$total_property);
                $data['list'] = PropertyList::where('state',$request['search-property'])->paginate(12);
                return view("backend.property.view",$data);
            }
            else
            {
                session()->put('property-list',$request['search-property']);
                return $total_property = count(PropertyList::where("add_by", Auth::user()->id)->where('state',$request['search-property'])->get());
                session()->put('total-property',$total_property); 
                $data['list'] = PropertyList::where("add_by", Auth::user()->id)->where('state',$request['search-property'])->paginate(12);
                return view("backend.property.view",$data);
            }
        }
        else
        {
            if(Auth::user()->role == 1)
            {   
                $property_state = session()->get('property-list');
                $data['list'] = PropertyList::where('state',$property_state)->paginate(12);
                // return count(PropertyList::where('state',$request['search-property'])->get());
                return view("backend.property.view",$data); 
            }
            else
            {
                $property_state = session()->get('property-list');
                $data['list'] = PropertyList::where("add_by", Auth::user()->id)->where('state',$property_state)->paginate(12);
                // return count(PropertyList::where("add_by", Auth::user()->id)->where('state',$request['search-property'])->get()); 
                return view("backend.property.view",$data); 
            }
        }
        
    }

    
    //import company list
    public function propertyImport(Request $request)
     {
        Excel::import(new ImportProperty, request()->file('file'));
        return redirect("/property/index")->with('success','Property Excel Uploaded Successfully');
     }

}

