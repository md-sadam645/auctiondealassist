<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank;

class bankController extends Controller
{
    //Start - top banks
    public function topBanks()
    {
        $data = Bank::all();
        return response(['status'=>1,'data' => $data], 200);
    }
    //End - top banks
}
