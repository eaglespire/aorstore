<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', [ PageController::class,'welcome' ]);
Route::resource('products', ProductController::class);
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
//$students[1];

Route::get('sessions', function (Request $request){
    /*
     * Two major ways to create session data
     * 1. By using the session method of the request object
     * 2. By using the session global helper
     */
    /*
     * First method
     * The session() method has several child methods
     * The put() method
     */
    $request->session()->put('username001','John Anderson');
    //session()->put();

    return 'I am working';
});

Route::get('get-data', function (Request $request){
    $username = 'Christabel001';
//    if ($request->session()->has('username001')){
//        $username = $request->session()->get('username001');
//      $username =  session('username001');
//    }
    if ($request->session()->has('data.msg')){
        $username = $request->session()->get('data.msg');
       // $username = $data['message'];
    }
    return $username;
});

Route::get('remove-data', function (Request $request){
   if ($request->session()->has('username001')){
       $request->session()->forget('username001');
   }
   return 'Session data removed';
});

Route::get('contact', function (){
    $username = null;
    if (session()->has('user_message_1')){
        $data = session('user_message_1');
        $username = $data['message'];
    }
    return view('form', compact('username'));
});
Route::post('contact', function (){
//    $data = [
//        'msg'=>[]
//    ];
   // dd(request('email'));
    session()->put('data.msg',request('message'));
    session()->flash('success','Data received successfully');
    return back();
});
