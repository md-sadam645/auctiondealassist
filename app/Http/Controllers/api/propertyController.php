<?php

namespace App\Http\Controllers\api;
use App\Models\PropertyList;
use App\Models\Bank;
use App\Models\User;
use App\Models\ViewedProperty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class propertyController extends Controller
{
    //Start - search property
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

            $data = PropertyList::where("status", "1")->where('property_type','LIKE','%'.$request->property_type.'%')->where('branch_name_and_address','LIKE','%'.$searchedLocation.'%')->orWhere('locality','LIKE','%'.$searchedLocation.'%')->orWhere('city','LIKE','%'.$searchedLocation.'%')->orWhere('state','LIKE','%'.$searchedLocation.'%')->orWhere('property_details','LIKE','%'.$searchedLocation.'%')->paginate(12);
            return response(['status'=>1,'data' => $data], 200);
        }
        else
        {  
            $property_type = session()->get('property-type');
            $address = session()->get('location');
            
            $data = PropertyList::where("status", "1")->where('property_type','LIKE','%'.$property_type.'%')->where('branch_name_and_address','LIKE','%'.$address.'%')->orWhere('locality','LIKE','%'.$address.'%')->orWhere('city','LIKE','%'.$address.'%')->orWhere('state','LIKE','%'.$address.'%')->orWhere('property_details','LIKE','%'.$address.'%')->paginate(12);
            return response(['status'=>1,'data' => $data], 200); 
        }
        
    }
    //End - search property

    //Start - homepage
    public function home()
    {
        $data['featured_property'] = PropertyList::inRandomOrder()->where("status", "1")->paginate(10);
        $data['popular_place'] = PropertyList::all();
        $data['top_banks'] = Bank::all();
        return response(['status'=>1,'data' => $data], 200);
    }
    //End - homepage

    
    //Start - state Wise Property
    public function stateWiseProperty($state)
    {
        $data = PropertyList::where("state",$state)->paginate(12);
        return response(['status'=>1,'data' => $data], 200);
    }
    //End - state Wise Property


    //Start - property Details
    public function propertyDetails($id)
    {
        $allData = PropertyList::where("id",$id)->first();
        $data["property_details"] = $allData;
        $data["consultant_details"] = User::where("id",$allData->add_by)->first();
        $data["similar_property"] = PropertyList::where("state",$allData->state)->paginate(4);
        if(!empty($allData))
        {
            return response(['status'=>1,'data' => $data], 200);
        }
        else
        {
            return response(['status'=>1,'msg' => 'property not found!'], 200);
        }
        
    }
    //End - property Details

    //Start - Viewed Property
    public function viewedProperty(Request $request)
    {
        $userDetail= $request->user()->token();
        $uid = $userDetail->user_id;

        $data['total'] = count(ViewedProperty::where("user_id",$uid)->get());
        $data['viewed_property'] = ViewedProperty::where("user_id",$uid)->paginate(10);
        return response(['status'=>1,'data' => $data], 200);
    }
    //End - Viewed Property
    
}
