<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user())
        {
            return $next($request);
        }
        else
        {
            if(Auth::user()->role == 2 || Auth::user()->role == 1)
            {
                return redirect('/dashboard')->with("error","You haven't logout !");
            }

            if(Auth::user()->role == 3)
            {
                return redirect('/')->with("error","Access Denied !");
            }
        }  
      
            
    }
}
