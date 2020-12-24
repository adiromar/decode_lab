<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/admin';

    public function redirectTo() {
        $role = Auth::user()->roles()->first()->role; 
        switch ($role) {
          case 'Admin':
            return '/admin';
            break;
          case 'User':
            return '/normal';
            break; 
          case 'Lab':
            return '/lab';
            break; 
          default:
            return '/login'; 
          break;
        }
      }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function custom_login(Request $request){
      $this->validateWith([
        'email' => 'required',
        'password' => 'required'
      ]); 
      // $user = User::where('email', $request->email)->first();

      if ( Auth::attempt(['email' => $request->email, 'password' => $request->password, 'suspend' => 0]) ){
              // Authentication passed...
              $role = Auth::user()->roles()->first()->role; 
              switch ($role) {
                case 'Admin':
                  return redirect()->url('/admin');
                  break;
                case 'User':
                  return redirect()->url('/normal');
                  break; 
                case 'Lab':
                  return redirect()->url('/lab');
                  break; 
                default:
                  return '/'; 
                break;
              }
      }else{
        return redirect()->back()->withInput()->withErrors(['Wrong credentials or User Suspended. ']);
      } 

    }
}
