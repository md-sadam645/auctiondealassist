<?php

namespace App\Http\Controllers\admin;
use App\Models\city;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cityController extends Controller
{
    //create city
    public function index(Request $request)
    {
        $response = city::create($request->all());
        if($response)
        {
            return redirect("/location/index");
        }
    }


    //view city
    public function view(Request $request, $state_id)
    {
        $data = city::where("state_id",$state_id)->get();
        if($data)
        {
                return response(array("data"=> $data),200)->header("Content-Type","application/json");
        }
        else
        {
                return response(array("notice"=> "data not found"),404)->header("Content-Type","application/json");
        }
    }
}
