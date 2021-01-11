<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Lab
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
        $role = $request->user()->roles()->first()->role;
            if ( $role != 'Lab') {

                // Session::flash('error', 'Not Authorized with this User Role !!');
                return redirect('/');
        }
        return $next($request);
    }
}
