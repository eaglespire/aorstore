<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('vendor.logged-in')->except('logout');
    }
    public function showLoginForm()
    {
        return view('vendor.auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if (Auth::guard('vendor')->attempt($credentials)){
            $request->session()->regenerate(); // this invalidates the guest user's current  session
            return redirect()->intended(RouteServiceProvider::VENDOR)->with('status',' Success!');
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
