<?php

namespace App\Http\Controllers\admin;
use App\Models\Bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class bankController extends Controller
{
    //create new bank
    public function index(Request $request)
    {
        //converting capitalize bank name
        $bank_name = $request['bank_name'];
        $lowercase_bank_name = Str::lower($bank_name);
        $capitalize_bank_name = ucwords($lowercase_bank_name);

        $formData = $request->all();
        $formData['bank_name'] = $capitalize_bank_name;

        if(Bank::create($formData))
        {
             return back()->with("success","Bank Added Successfully!");
            
        }
        else
        {
            return back()->with("error","Something Wrong!");
            
        }
    }


    //view bank
    public function view(Request $request)
    {
        $data['list'] = Bank::paginate(10);
        return view("backend.bank.view", $data);
    }

    //edit bank
    public function edit(Request $request, $id)
    {
        $data['list'] =  Bank::where("id",$id)->get();
        return view("backend.bank.index", $data);
    }


    // update bank
    function update(Request $request, $id)
    {
        //converting capitalize bank name
        $bank_name = $request['bank_name'];
        $lowercase_bank_name = Str::lower($bank_name);
        $capitalize_bank_name = ucwords($lowercase_bank_name);

        $update = Bank::where('id', $id)->update(array(
            'bank_type' => $request['bank_type'],
            'bank_name' => $capitalize_bank_name,
        ));
        if($update)
        {
            return redirect("/bank/view")->with("success","Bank updated Successfully !");
        }
        
    }


    // delete bank
    function delete(Request $request, $id)
    {
        $response =  Bank::where("id",$request["id"])->delete();
        if($response)
        {   
            return back()->with("success","Bank deleted Successfully !");
            
        }
        else
        {
            return back()->with("error","Something Wrong!");
        }
    }


    //Show Bank Name on add property
    public function showBankName()
    {
        $data['bankName'] = Bank::get();
        return view("backend.property.index", $data);
    }
}
