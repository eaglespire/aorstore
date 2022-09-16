<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [ PageController::class,'welcome' ]);
Route::post('/add-to-cart', [ CartController::class,'addToCart' ])->name('addToCart');
Route::get('test', function (Request $request){
    dd($request->session()->get('cart'));
});
