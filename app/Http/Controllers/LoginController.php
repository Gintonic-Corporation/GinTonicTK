<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/welcome');
        } else {
            // Authentication failed
            return back()->withErrors(['username' => 'Invalid username or password.']);
        }
    }
}*/



class LoginController extends Controller
{

    use AuthenticatesUsers;
    /**
    * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {    
        $loginValue = request('username');     
        $this->username = filter_var($loginValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$this->username => $loginValue]);
        return property_exists($this, 'username') ? $this->username: 'email';
    }
}