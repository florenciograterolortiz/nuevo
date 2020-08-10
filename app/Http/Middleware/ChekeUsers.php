<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ChekeUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   

public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->roles == 'admin') {
            return $next($request);
        }else{
           return back()->with('info', 'No eres adsministrador');
        }
    }
}
