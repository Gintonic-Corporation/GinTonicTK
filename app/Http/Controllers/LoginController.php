<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use App\Models\User;

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

    /*use AuthenticatesUsers;
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
    }*/
    function login()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);
        $data=$request->all();
        User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);

        return redirect('/');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'password'=>'required'
        ]);
        $credentials=$request->only('name','password');
        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }
        return redirect('login')->with('success','Hibás felhasználónév, vagy jelszó!');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('welcome');
        }
        return redirect('login')->with('success','Hozzáférés megtagadva');
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

}
