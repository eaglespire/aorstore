<?php

use App\Http\Controllers\Vendor\Auth\VendorLoginController;
use App\Http\Controllers\Vendor\Auth\VendorRegistrationController;
use App\Http\Controllers\Vendor\HomeController;
use App\Http\Controllers\Vendor\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::prefix('vendor')->name('vendor.')->group(function (){
    Route::controller(VendorLoginController::class)->group(function (){
        Route::get('login','showLoginForm')->name('loginForm');
        Route::post('login','login')->name('login');
        Route::post('logout','logout')->name('logout');
    });
    Route::get('home', [ HomeController::class,'home' ])->name('home');
    Route::controller(VendorRegistrationController::class)->group(function (){
        Route::get('register','showRegistrationForm')->name('registrationForm');
        Route::post('register','register')->name('register');
    });
    Route::get('/', LandingPageController::class)->name('landing');



});

