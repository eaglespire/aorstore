<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::controller(LoginController::class)->group(function (){
        Route::get('login', 'showLoginForm')->name('loginForm');
        Route::post('login', 'login')->name('login');
        Route::post('logout','logout')->name('logout');
    });
    Route::get('home', [ HomeController::class,'home' ])->name('home');
});


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
