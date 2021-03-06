<?php

namespace App\Http\Middleware;

use Auth;
use App\User;
use Closure;

class CheckStatus
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
        // return $next($request);
        $response = $next($request);

        //If the status is not approved redirect to login 

        if(Auth::check() && Auth::user()->varified == 0){

            Auth::logout();

            $request->session()->flash('alert-danger', 'Your Account is not activated yet.');

            return redirect('/login')->with('erro_login', 'Your error text');
    }
    return $response;
   }
}

