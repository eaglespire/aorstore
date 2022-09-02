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

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__ .'/admin.php';
require __DIR__ .'/vendor.php';

$items = array(
    1 =>['id'=>1,'price'=>234],
    2 =>['id'=>2,'price'=>500]
);
$items[2]; //this returns the array with the key of 2
//adding a new item to an array
$newItem = ['id'=>4,'price'=>1000];
$items[4] =$newItem;

$items[4]; //

$students = ['student 1','student 2'];
$students[1];
