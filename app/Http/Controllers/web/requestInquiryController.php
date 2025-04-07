<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestInquiry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class requestInquiryController extends Controller
{
    
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|min:10|max:10',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);
        if($validator->fails())
        {
            return back()->with('error',$validator->errors()->all());
        }

        $uploadData = RequestInquiry::create($request->all());
        if($uploadData)
        {
            toastr()->success('Thanks for contacting us! We will be in touch with you shortly.');
        }
        else
        {
            toastr()->error("Oops! Something error, please try again later."); 
        }
        return back();
    }

    //view request inquiry
    public function view()
    {
        $data['list'] = RequestInquiry::where('add_by_id', Auth::user()->id)->paginate(10);
        return view('backend.requestInquiry.view',$data);
    }


    //request inquiry view In Details
    public function viewInDetails($id)
    {
        $data['list'] = RequestInquiry::where('id',$id)->first();
        return view('backend.requestInquiry.viewInDetails',$data);
    }

    //delete request inquiry
    public function delete($id)
    {
        $deleteContact = RequestInquiry::where('id',$id)->delete();
        if($deleteContact)
        {
            return redirect('/request-inquiry/view')->with("success","Successfully Deleted !");
        }
        
    }
}
