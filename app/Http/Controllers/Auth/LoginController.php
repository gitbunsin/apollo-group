<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function doLogin(Request $request){
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput($request->except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email'     => $request->email,
                'password'  => $request->password
            );
            // attempt to do the login
            if (Auth::attempt($userdata)) {
                return Redirect::to('/admin/dashboard');
            } else {        
                // validation not successful, send back to form 
                return Redirect::to('login');
            }
        }
    }
    public function doLogout(Request $request){
        dd('x');
        Auth::logout();
        Session::flush();
    return redirect('/');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
}
