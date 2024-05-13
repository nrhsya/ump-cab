<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DriverOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $email)
    {
        if($request->user()->email == $email){
            return $next($request);
        }

        return redirect('/DriverDashboard')->with('failed', 'You must have a registered car to access this section');
        // return $next($request);
    }
}
