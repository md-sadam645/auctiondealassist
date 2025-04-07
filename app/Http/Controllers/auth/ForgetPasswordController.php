<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\auth\user as AuthUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Hash;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
     /**
       * Write code on Method
       *
       * @return response()
       */
      public function showForgetPasswordForm()
      {
         return view('backend.auth.forget_password');
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
          ]);
  
          $token = Str::random(64);
  
          DB::table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
  
          Mail::send('backend.auth.forgetPasswordSend', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });
          
          $data['list'] = 'We have e-mailed your password reset link!';
          return view('backend.auth.forget_password', $data);
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPasswordForm($token) { 
         return view('backend.auth.forgetPasswordLink', ['token' => $token]);
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request)
      {
        $userRole = User::where('email', $request->email)->get();
        if($userRole[0]['role'] == 1 || $userRole[0]['role'] == 2)
        {
            $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required'
            ]);
    
            $updatePassword = DB::table('password_resets')
                                ->where([
                                  'email' => $request->email, 
                                  'token' => $request->token
                                ])
                                ->first();
    
            if(!$updatePassword){
                return back()->withInput()->with('error', 'Invalid token!');
            }
    
            $user = User::where('email', $request->email)
                        ->update(['password' => Hash::make($request->password)]);
   
            DB::table('password_resets')->where(['email'=> $request->email])->delete();
            
        
            return redirect('/admin')->with('success', 'Your password has been changed!');
        }
        else
        {
            $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required'
            ]);
    
            $updatePassword = DB::table('password_resets')
                                ->where([
                                  'email' => $request->email, 
                                  'token' => $request->token
                                ])
                                ->first();
    
            if(!$updatePassword){
                return back()->withInput()->with('error', 'Invalid token!');
            }
    
            $user = User::where('email', $request->email)
                        ->update(['password' => Hash::make($request->password)]);
   
            DB::table('password_resets')->where(['email'=> $request->email])->delete();
            
        
            return redirect('/')->with('success', 'Your password has been changed!');
        }
    
          
      }
}
