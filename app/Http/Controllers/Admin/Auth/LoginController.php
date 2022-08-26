<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.logged-in')->except('logout');
    }
    public function showLoginForm()
    {
       return view('admin.auth.login');
    }
    public function login(Request $request)
    {
      $credentials = $request->validate([
           'email'=>['required','email'],
          'password'=>['required']
        ]);

      if (Auth::guard('admin')->attempt($credentials)){
         $request->session()->regenerate(); // this invalidates the guest user's current  session
          return redirect()->intended(RouteServiceProvider::ADMIN)->with('status','Admin log in success!');
      }
      return back()->withErrors([
          'email'=>'The provided data does not match any of our records'
      ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();  // this invalidates the user's session
        $request->session()->regenerateToken();//this regenerates the csrf token
        return redirect()->to(RouteServiceProvider::WELCOME);
    }
}
