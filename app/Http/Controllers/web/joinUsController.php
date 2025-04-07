<?php

namespace App\Http\Controllers\web;
use App\Models\JoinUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class joinUsController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'contact' => 'required|string|min:10|max:10',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        $create = JoinUs::create($request->all());
        if($create)
        {
            return redirect("/join-us/index")->with("success","Thanks for Join us! We will be in touch with you shortly!");
        }
        else
        {
            return redirect("/join-us/index")->with("error","Something Wrong !");
        }
    }


    //view contact list on admin dashboard
    public function view()
    {
        $data['list'] = JoinUs::paginate(10);
        return view('backend.joinUs.view',$data);
    }



    //viewInDetails contact list on admin dashboard
    public function viewInDetails($id)
    {
        $data['list'] = JoinUs::where('id',$id)->first();
        return view('backend.joinUs.viewInDetails',$data);
    }
    

    //delete contact list
    public function delete($id)
    {
        $deleteContact = JoinUs::where('id',$id)->delete();
        if($deleteContact)
        {
            return redirect('/join-us/view')->with("success","Successfully Deleted !");
        }
        
    }
}
