<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ( $request->session()->has('status')) {
            $status=$request->session()->get('status');
            if($status==0){
                return redirect()->route('student-index');
            }
            else if($status==1){
                return redirect()->route('university-index');
            }
            else if($status==99 || $status ==98){
                return redirect('/admin');
            }
            else
            {
                return redirect('/logout');
            }
            
            // return $request->session()->get('status');
            // return "Got";
        }
        else
        {
            return $next($request);
        }
    }
}
