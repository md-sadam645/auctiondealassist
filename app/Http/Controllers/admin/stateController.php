<?php

namespace App\Http\Controllers\admin;
use App\Models\State;
use App\Models\Bank;
use App\Models\PropertyList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class stateController extends Controller
{
    //create state
    public function index(Request $request)
    {
        $response = State::create($request->all());
        if($response)
        {
            return redirect("/location/index");
        }

    }


    //view state for location page
    public function view(Request $request)
    {
        $data['list'] = State::get();
        return view("backend.location.index", $data);
    }


    
}
