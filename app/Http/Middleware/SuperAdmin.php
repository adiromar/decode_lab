<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class SuperAdmin
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
        // if ($request->user() && $request->user()->type != 'Admin')
        if ( $request->user()->roles()->first()->role != 'Admin')
        {
            Session::flash('error', 'Not Authorized with this User Role !!');
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}
