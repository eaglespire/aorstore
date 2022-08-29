<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRegisterRequest;
use App\Models\Vendor;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class VendorRegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('vendor.logged-in');
    }
    public function showRegistrationForm()
    {
        return view('vendor.auth.register');
    }
    public function register(VendorRegisterRequest $request)
    {
        try {
           $vendor = Vendor::create([
                'name'=>$request->validated()['name'],
                'email'=>$request->validated()['email'],
                'password'=>Hash::make($request->validated()['password'])
            ]);
           //log in the user
            Auth::guard('vendor')->login($vendor);
            //regenerate the session
            $request->session()->regenerate();
            return redirect()->to(RouteServiceProvider::VENDOR);
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return back();
        }
    }

}
