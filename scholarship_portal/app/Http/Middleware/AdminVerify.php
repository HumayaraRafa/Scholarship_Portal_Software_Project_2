<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminVerify
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
            if($status==99||$status==98||$status==5){
                return $next($request);
            }
            else
            {
                return redirect('/');
            }
            
            // return $request->session()->get('status');
            // return "Got";
        }
        else
        {
            return redirect('/');
        }
    }
}
