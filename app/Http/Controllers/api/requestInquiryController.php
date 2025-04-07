<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestInquiry;
use Illuminate\Support\Facades\Validator;
class requestInquiryController extends Controller
{
     //Start - Request Inquiry
     public function requestInquiry(Request $request)
     {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|min:10|max:10',
            'email' => 'required|string|email|max:255|unique:',
            'message' => 'required|string',
            'add_by_id' => 'required|string',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }

        $create = RequestInquiry::create($request->all());
        if($create)
        {
            return response(['status'=>1,'msg'=> "Thanks for contacting us! We will be in touch with you shortly!"],200);   
        }
        else
        {
            return response(['status'=>0,'msg'=>'Failed to update profile'],200);
        }
         
     }
     //End - Request Inquiry
}
