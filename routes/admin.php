<?php

use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function (){
    Route::get('home', [ HomeController::class,'home' ])->name('home');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class) ;
});
