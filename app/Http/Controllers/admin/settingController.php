<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class settingController extends Controller
{
    public function index(Request $request)
    {
        $response = Setting::where("option_name", $request->option_name)->get();
        if($response == "[]")
        {
            //create privacy policy
            if($request->option_name == "privacy policy")
            {
                $response = Setting::create($request->all());
                if($response)
                {
                    return redirect('/setting/privacy-policy')->with('success', 'Privacy Policy Updated Successfully!');
                }
            }

            //create terms & conditions
            if($request->option_name == "terms & conditions")
            {
                $response = Setting::create($request->all());
                if($response)
                {
                    return redirect('/setting/terms-conditions')->with('success', 'Terms & Conditions Updated Successfully!');
                }
            }

            //create terms of use
            // if($request->option_name == "terms of use")
            // {
            //     $response = Setting::create($request->all());
            //     if($response)
            //     {
            //         return redirect('/setting/terms-of-use')->with('success', 'Terms Of Use Updated Successfully!');
            //     }
            // }
        }
        else
        {
            //update  privacy policy
            if($request->option_name == "privacy policy")
            {
                $update = Setting::where('option_name', $request->option_name)->update(array('option_value' => $request['option_value']));
                if($update)
                {
                    return redirect('/setting/privacy-policy')->with('success', 'Privacy Policy Updated Successfully!');
                }
                else
                {
                    return "not updated";
                }
            }

            //update terms & conditions
            if($request->option_name == "terms & conditions")
            {
                $update = Setting::where('option_name', $request->option_name)->update(array('option_value' => $request['option_value']));
                if($update)
                {
                    return redirect('/setting/terms-conditions')->with('success', 'Terms & Conditions Updated Successfully!');
                }
                else
                {
                    return "not updated";
                }
            }
            
        }

        //update terms of use
        // if($request->option_name == "terms of use")
        // {
        //     $update = Setting::where('option_name', $request->option_name)->update(array('option_value' => $request['option_value']));
        //     if($update)
        //     {
        //         return redirect('/setting/terms-of-use')->with('success', 'Terms Of Use Updated Successfully!');
        //     }
        //     else
        //     {
        //         return "not updated";
        //     }
        // }
        
    }

    
    //view term_conditions
    public function termsConditionsView()
    {
        $term_conditions = Setting::where("option_name","terms & conditions")->first();
        if($term_conditions != "")
        {
            $data['list'] = $term_conditions; 
            return view('backend/setting/terms_conditions',$data);
        }
        else
        {
            return view('backend/setting/terms_conditions');
        }
    }

    
    //view privacy_policy
    public function privacyPolicyView()
    {
        $privacy_policy = Setting::where("option_name","privacy policy")->first();
        if($privacy_policy != "")
        {
            $data['list'] = $privacy_policy; 
            return view('backend/setting/privacy_policy',$data);
        }
        else
        {
            return view('backend/setting/privacy_policy');
        }
    }

    //view terms of use
    // public function termsUseView()
    // {
    //     $terms_use = Setting::where("option_name","terms of use")->first();
    //     if($terms_use != "")
    //     {
    //         $data['list'] = $terms_use; 
    //         return view('backend/setting/terms_of_use',$data);
    //     }
    //     else
    //     {
    //         return view('backend/setting/terms_of_use');
    //     }
    // }


    //view privacy policy on privacy policy page
    public function viewPrivacyPolicy()
    {
        $privacy_policy = Setting::where("option_name","privacy policy")->first();
        if($privacy_policy != "")
        {
            $data['list'] = "$privacy_policy->option_value"; 
            return view('web.setting.privacy_policy',$data);
        }
        else
        {
            $data['list'] = ""; 
            return view('web.setting.privacy_policy',$data);
        }
        
    }

    //view Terms Conditions on Terms Conditions page
    public function viewTermsConditions()
    {
        $terms_conditions = Setting::where("option_name","terms & conditions")->first();
        if($terms_conditions != "")
        {
            $data['list'] = "$terms_conditions->option_value"; 
            return view('web.setting.term_and_conditions',$data);
        }
        else
        {
            $data['list'] = ""; 
            return view('web.setting.term_and_conditions',$data);
        }
  
    }
    
}
