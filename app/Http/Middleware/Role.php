<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, String $role)
    {   
        if (!Auth::check()){
            return redirect('/login');
        }
        

        $user = Auth::user();
        if($user->roles()->first()->role == $role){
            return $next($request);
        }else{
            return redirect('/login');
        }
        
    }
}
