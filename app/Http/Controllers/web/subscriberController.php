<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;

class subscriberController extends Controller
{
    //create new
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:subscribers',
        ]);
        if($validator->fails())
        {
            return redirect("/")->with('error',$validator->errors()->all());
        }

        if(Subscriber::create($request->all()))
        {
            return redirect('/')->with("success","Thank You for Subscribing !");
        }
    }


    //view on admin panel
    public function view()
    {
        $fetchAllData = Subscriber::paginate(12);
        if($fetchAllData != "[]")
        {
            $data['list'] = $fetchAllData;
            return view('backend.subscriber.view',$data);
        }
        else
        {
            $data['list'] = [];
            return view('backend.subscriber.view',$data);
        }
        
    }


    //delete subscriber
    public function delete($id)
    {
        $deleteSubscriber = Subscriber::where('id',$id)->delete();
        if($deleteSubscriber)
        {
            return redirect('/subscriber/view')->with("success","Successfully Deleted !");
        }
    }
}
