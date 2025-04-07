<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class userAuthentication extends Controller
{
    //start consultant coding
    //add consultant
    public function index(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        if($validator->fails())
        {
            return redirect("/consultant/index")->with('error',$validator->errors()->all());
        }

        $filename = pathinfo($request->file("profile_img")->getClientOriginalName(), PATHINFO_FILENAME);
        $filename = $filename.time().".".pathinfo($request->file("profile_img")->getClientOriginalName())['extension'];
        $filename = strtolower($filename);
        $url = $request->file("profile_img")->storeAs(env('AddProperty_List')."/",$filename);
            
            
        $password =  Hash::make($request->password);
        $form_Data = $request->all();
        $form_Data["profile_img"] = $url;
        
        $form_Data['password'] = $password;    

        if(User::create($form_Data))
        {
            return back()->with("success","Consultant Added Successfully!");
            
        }
    }


    //consultant view 
    public function consultantView()
    {
        $data['list'] = User::where("role", '2')->get();
        return view('backend.consultant.view',$data);
    }

    //consultant edit 
    public function consultantEdit($id)
    {
        $data['list'] = User::where("id", $id)->get();
        return view('backend.consultant.index',$data);
    }

    //consultant update 
    public function consultantUpdate(Request $request ,$id)
    {
        
        $update = User::where('id', $id)->update(array(
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            // 'password' => Hash::make($request->password),
            'mobile' => $request['mobile'],
            'address' => $request['address']
        ));
        if($update)
        {
            // $data['list'] = User::where("role", '2')->get();
            return redirect('/consultant/view')->with("success","Consultant update Successfully!");
        }
        
    }


    //delete consultant
    function consultantDelete(Request $request, $id)
    {
        $response =  User::where("id",$id)->delete();
        if($response)
        {   
            return back()->with("success","Consultant Deleted Successfully!");
        }
    }

     //active consultant 
     public function activeConsultant($id)
     {
         $update = User::where('id', $id)->update(array(
             'status' => '1'
         ));
         if($update)
         {
            return redirect("/consultant/view");
         }
     }


     //inactive consultant 
     public function inactiveAgent($id)
     {
         $update = User::where('id', $id)->update(array(
             'status' => '0'
         ));
         if($update)
         {
            return redirect("/consultant/view");
         }
     }
    //end consultant coding


    //start admin and consultant login, logout, profile view,change password & account Update
    //login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        if($validator->fails())
        {
            return redirect("/admin")->with('error',$validator->errors()->all());
        }

        $username = $request->email;
        $password = $request->password;

        $checkUser = User::where("email",$username)->first();
        if($checkUser->role == 1 || $checkUser->role == 2)
        {
            //admin login
            if(Auth::attempt(['email' => $username, 'password' => $password, 'role' => 1]))
            {
                $request->session()->put('adminAuthentication', 'admin');
                $request->session()->put('role', Auth::user()->role);
                $request->session()->put('id', Auth::id());
                return redirect('/dashboard')->with('success', 'Login Success');    
            }

            //consultant login
            if(Auth::attempt(['email' => $username, 'password' => $password, 'role' => 2]))
            {
                if(Auth::user()->status == 1)
                {
                    $request->session()->put('adminAuthentication', 'employee');
                    $request->session()->put('role', Auth::user()->role);
                    $request->session()->put('id', Auth::id());
                    return redirect('/dashboard')->with('success', 'Login Success');
                }
                else
                {
                    return back()->with("error","Account Inactive, Please Contact Your Admin!");
                }
            }
            else
            {
                return back()->with("error","Wrong password !");
            }
        }
        else
        {
            return back()->with("error","User not registered!");
        }
    }


    //logout
    public function logout(Request $request)
    {
        // $request->session()->forget('adminAuthentication');
        // $request->session()->forget('role');
        // $request->session()->forget('id');
        
        Auth::logout();
        
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect("/admin");
        
    }

    //profile view 
    public function AccountView()
    {   
        $id = Auth::user()->id;
        $data['list'] = User::where("id", $id)->get();
        return view("backend.account.index",$data);
    }

    //account Update
    public function accountUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|min:10|max:10',
            'address' => 'required|string',
        ]);
        if($validator->fails())
        {
            return redirect("/account-setting")->with('error',$validator->errors()->all());
        }

        if(!empty($request->file('profile_img')))
        {
            $filename = pathinfo($request->file("profile_img")->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename.time().".".pathinfo($request->file("profile_img")->getClientOriginalName())['extension'];
            $filename = strtolower($filename);

            //delete exists image
            $property_list = User::where('id', $request["id"])->first();
            $img_path = public_path()."/".$property_list['profile_img'];
            if(file_exists($img_path))
            {
                @unlink($img_path);
                $url = $request->file("profile_img")->storeAs(env('AddProperty_List')."/",$filename);
            }
            else
            {
                return "not delete profile img";
            }
            

            $update = User::where("id", $id)->update(array(
                'full_name' => $request['full_name'],
                // 'email' => $request['email'],
                'mobile' => $request['mobile'],
                'address' => $request['address'],
                'profile_img' => $url
            ));
            if($update)
            {
                return redirect('/account-setting')->with("success",'Profile update successfully !');
            }
        }
        else
        {
            $update = User::where("id", $id)->update(array(
                'full_name' => $request['full_name'],
                // 'email' => $request['email'],
                'mobile' => $request['mobile'],
                'address' => $request['address']
            ));
            if($update)
            {
                return redirect('/account-setting')->with("success",'Profile update successfully !');
            }
        }
    }

    //change password
    public function changePassword(Request $request, $id)
    {
       
        $user =  User::where("id", $id)->first();
        if($user && password_verify($request->currentPassword, $user->password))
        {
            $update = $user->update(array(
                'password' =>  Hash::make($request['confirmPassword']),
            ));
            if($update)
            {
                //logout user
                // $request->session()->forget('adminAuthentication');
                // $request->session()->forget('role');
                // $request->session()->forget('id');
                
                Auth::logout();
                
                $request->session()->invalidate();
            
                $request->session()->regenerateToken();
            
                return redirect("/admin")->with('success', 'Password Changed Successfully');
            }
        }
        else
        {
            return back()->with("error","Current Password Doesn't Matched !");
            
        }
         
    }
    //end admin and consultant login, logout, profile view, change password & account Update
    

    //start user coding
    // user register
    public function customerRegister(Request $request)
    {
        // $filename = pathinfo($request->file("profile_img")->getClientOriginalName(), PATHINFO_FILENAME);
        // $filename = $filename.time().".".pathinfo($request->file("profile_img")->getClientOriginalName())['extension'];
        // $filename = strtolower($filename);
        // $url = $request->file("profile_img")->storeAs(env('AddProperty_List')."/",$filename);
        
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|string|min:10|max:10',
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'address' => 'required|string'
        ]);
        if($validator->fails())
        {
            return redirect("/")->with('error',$validator->errors()->all());
        }
    
        $password =  Hash::make($request->password);
        $all_data = $request->all();
        $all_data['status'] = "1";
        $all_data['password'] = $password;

        if(User::create($all_data))
        {
            return redirect("/")->with('success',"Your'e Registered Successfully");
        }
    }


    //user login
    public function customerLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        if($validator->fails())
        {
            return redirect("/")->with('error',$validator->errors()->all());
        }

        $username = $request->email;
        $password = $request->password;

        //checking user registered or not
        $checkUser = User::where("email",$username)->where("role", 3)->first();
        if(!empty($checkUser))
        {
            if(Auth::attempt(['email' => $username, 'password' => $password, 'role' => 3]))
            {
                return redirect("/")->with('success','Login Success');
            }
            else
            {
                return back()->with("error","Wrong password!");
            }
        }
        else
        {
            return back()->with("error","User not registered!");
        }
    }

    //user Logout
    public function userLogout(Request $request)
    {   
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect("/");
    }

    //profile view 
    public function userProfile()
    {   
        $id = Auth::user()->id;
        $data['list'] = User::where("id", $id)->get();
        return view("web.account.profile",$data);
    }

    //user Profile Update 
    public function userProfileUpdate(Request $request, $id)
    {   
        // if(!empty($request->file('profile_img')))
        // {
        //     $filename = pathinfo($request->file("profile_img")->getClientOriginalName(), PATHINFO_FILENAME);
        //     $filename = $filename.time().".".pathinfo($request->file("profile_img")->getClientOriginalName())['extension'];
        //     $filename = strtolower($filename);

        //     //delete exists image
        //     $property_list = User::where('id', $request["id"])->first();
        //     $img_path = public_path()."/".$property_list['profile_img'];
        //     if(file_exists($img_path))
        //     {
        //         @unlink($img_path);
        //         $url = $request->file("profile_img")->storeAs(env('AddProperty_List')."/",$filename);
        //     }
        //     else
        //     {
        //         return "not delete profile img";
        //     }
            

        //     $update = User::where("id", $id)->update(array(
        //         'full_name' => $request['full_name'],
        //         // 'email' => $request['email'],
        //         'mobile' => $request['mobile'],
        //         'address' => $request['address'],
        //         'profile_img' => $url
        //     ));
        //     if($update)
        //     {
        //         // $data['list'] = User::where("id", $id)->get();
        //         // return view('web.account.profile',$data);
        //         return redirect("/account/profile")->with("success","Profile Update Successfully!");
        //     }
        // }
       
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|min:10|max:10',
            'address' => 'required|string',
        ]);
        if($validator->fails())
        {
            return redirect("/account/profile")->with('error',$validator->errors()->all());
        }

        $update = User::where("id", $id)->update(array(
            'full_name' => $request['full_name'],
            'mobile' => $request['mobile'],
            'address' => $request['address']
        ));
        if($update)
        {
            return redirect("/account/profile")->with("success","Profile Update Successfully!");
        }
       
    }

    //user Change Password
    public function userChangePassword(Request $request, $id)
    {
        $user =  User::where("id", $id)->first();
        if($user && password_verify($request->currentPassword, $user->password))
        {
            $update = $user->update(array(
                'password' =>  Hash::make($request['confirmPassword']),
            ));
            if($update)
            {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect("/");
            }
        }
        else
        {
            return back()->with("error","Current Password Doesn't Matched !");
            
        }
         
    }
    //end user coding



}






