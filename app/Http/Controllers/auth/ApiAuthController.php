<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApiAuthController extends Controller
{
    //Start - register user
    public function register (Request $request)
    {
        $user_data = User::where('email', $request['email'])->where('role', '3')->first();
        
        if(!empty($user_data))
        {
            if($user_data->status == 0)
            {
                $otp = mt_rand(1111,9999);
                $token = $user_data->createToken('Laravel Password Grant Client')->accessToken;
                User::where('email', $request['email'])->update(array('otp'  => $otp));
                // $data = ['token' => $token];
                return response(['status'=>1,'msg'=>'Sent OTP','token' => $token],200);
            }
            else
            {
                return response(['status'=>1,'msg'=>'User Exists'],200);
            }
            
        }
        else
        {
            //new register
            $validator = Validator::make($request->all(), [
                'full_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);
            if ($validator->fails())
            {
                return response(['status'=>0,'errors'=>$validator->errors()->all()],200);
            }

            $otp = mt_rand(1111,9999);
            $request['otp'] = $otp;
            $request['role'] = '3';
            $request['password']= Hash::make($request['password']);
            $user = User::create($request->toArray());
            if($user)
            {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                // $data = ['token' => $token];
                return response(['status'=>1,'msg'=>'Sent OTP','token'=>$token],200);
            }
            else
            {
                return response(['status'=>0,'msg'=>'Invalid Register!'],200);
            }
          
        }
    }
    //End - register user

    //Start - verify otp
    public function verifyOtp (Request $request)
    {
        $userDetail= $request->user()->token();
        $uid = $userDetail->user_id;
        
        $data = User::where('id', $uid)->get();
        
        if($data[0]->otp == $request['otp'])
        {
            $userData = User::where('id', $uid)->update(array('status' => "1"));
            if($userData)
            {
                return response(['status'=>1,'msg'=> "You have been successfully Registered!"],200);
            }
           
        }
        else
        {
            return response(['status'=>0,'msg'=>'Wrong OTP'],200);
        }
        
    }
    //End - verify otp
    
    //Start - login
    public function login (Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }

        $user = User::where('email', $request->email)->first();
        if(!empty($user))
        {
            if(Hash::check($request->password, $user->password))
            {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                // $response = ['token' => $token];
                return response(['status'=>1,'msg'=>'Login Success','token' => $token], 200);
            }
            else
            {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        }
        else
        {
            $response = ["message" => "User doesn't exist"];
            return response($response, 422);
        }
    }
    //End - login


    //Start - profile update
    public function profileUpdate (Request $request)
    {
        $userDetail= $request->user()->token();
        $uid = $userDetail->user_id;
        
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|min:10|max:10',
            'address' => 'required|string|max:255',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }

        $update = User::where('id', $uid)->update(array(
            'full_name' => $request->full_name,
            'mobile' => $request->mobile,
            'address' => $request->address,
        ));
        if($update)
        {
            return response(['status'=>1,'msg'=> "You have been successfully update profile!"],200);   
        }
        else
        {
            return response(['status'=>0,'msg'=>'Failed to update profile'],200);
        }
        
    }
    //End - profile update


    //Start - password Change
    public function passwordChange (Request $request)
    {
        $userDetail= $request->user()->token();
        $uid = $userDetail->user_id;
        
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:8',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }

        $user =  User::where("id", $uid)->first();
        if($user && password_verify($request->old_password, $user->password))
        {
            $update = $user->update(array(
                'password' =>  Hash::make($request['password']),
            ));
            if($update)
            {
                return response(['status'=>1,'msg'=> "Password Changed Successfully!"],200);
            }
        }
        else
        {
            return response(['status'=>1,'msg'=> "Old Password Doesn't Matched!"],200);
            
        }
    }
    //End - password Change

    //logout
    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
