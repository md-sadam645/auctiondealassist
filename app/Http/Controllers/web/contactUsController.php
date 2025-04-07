<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;


class contactUsController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        $uploadData = ContactUs::create($request->all());
        if($uploadData)
        {
            return redirect("contact-us/index")->with("success","Thanks for contacting us! We will be in touch with you shortly.");
        }
        else
        {
            return redirect("contact-us/index")->with("error","Something error, please try again later."); 
        }
    }


    //view contact list on admin dashboard
    public function view()
    {
        $data['list'] = ContactUs::paginate(10);
        return view('backend.contactUs.view',$data);
    }



    //viewInDetails contact list on admin dashboard
    public function viewInDetails($id)
    {
        $data['list'] = ContactUs::where('id',$id)->first();
        return view('backend.contactUs.viewInDetails',$data);
    }
    

    //delete contact list
    public function delete($id)
    {
        $deleteContact = ContactUs::where('id',$id)->delete();
        if($deleteContact)
        {
            return redirect('/contact-list/view')->with("success","Successfully Deleted !");
        }
        
    }

    
}
