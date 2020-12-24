<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // return redirect('/home');
            $role = Auth::user()->roles()->first()->role; 
            
            switch ($role) {
            case 'Admin':
                return redirect('/admin');
                break;
            case 'User':
                return redirect('/admin');
                break;
            case 'Lab':
                return redirect('/lab');
                break; 

            default:
                return redirect('/login'); 
                break;
            }
        }

        return $next($request);
    }
}
