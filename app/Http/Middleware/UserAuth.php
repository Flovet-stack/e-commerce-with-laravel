<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session; 

class UserAuth
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
        if($request->path()=='login' && $request->session()->has('user')) {
            return redirect('/');
        } else if ($request->path()=='logout' && $request->session()->has('user')) {
            Session::forget('user');
            return redirect('/login');
        }
        return $next($request);
    }
}
