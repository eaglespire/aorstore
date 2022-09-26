<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Models\User;


require __DIR__ .'/admin.php';
require __DIR__ .'/vendor.php';
require __DIR__ .'/auth.php';
require __DIR__ .'/frontend.php';

//$items = array(
//    1 =>['id'=>1,'price'=>234],
//    2 =>['id'=>2,'price'=>500]
//);
////$items[2]; //this returns the array with the key of 2
////adding a new item to an array
//$newItem = ['id'=>4,'price'=>1000];
//$items[4] =$newItem;

//$items[4]; //

//$students = ['student 1','student 2'];
//$students[1];

//Route::get('sessions', function (Request $request){
//    /*
//     * Two major ways to create session data
//     * 1. By using the session method of the request object
//     * 2. By using the session global helper
//     */
//    /*
//     * First method
//     * The session() method has several child methods
//     * The put() method
//     */
//    $request->session()->put('username001','John Anderson');
//    //session()->put();
//
//    return 'I am working';
//});
//
//Route::get('get-data', function (Request $request){
//    $username = 'Christabel001';
////    if ($request->session()->has('username001')){
////        $username = $request->session()->get('username001');
////      $username =  session('username001');
////    }
//    if ($request->session()->has('data.msg')){
//        $username = $request->session()->get('data.msg');
//       // $username = $data['message'];
//    }
//    return $username;
//});
//
//Route::get('remove-data', function (Request $request){
//   if ($request->session()->has('username001')){
//       $request->session()->forget('username001');
//   }
//   return 'Session data removed';
//});
////
//Route::get('contact', function (){
//    $username = null;
//    if (session()->has('user_message_1')){
//        $data = session('user_message_1');
//        $username = $data['message'];
//    }
//    return view('form', compact('username'));
//});
//Route::post('contact', function (){
////    $data = [
////        'msg'=>[]
////    ];
//   // dd(request('email'));
//    session()->put('data.msg',request('message'));
//    session()->flash('success','Data received successfully');
//    return back();
//});

Route::get('/card', function(Request $request){
//    $user = User::find(2);
//    dd($user);
    $user = User::find(2);
   // dd(count($user->unreadNotifications));
   // dd($user->unreadNotifications[0]['data']);
    return view('card');
});
Route::post('/card', function (Request $request){
    //dd('Endpoint arrived');
    $request->validate([
        'title'=>'required',
        'description'=>'required'
    ]);
    $task = new Task;
    $task->title = $request['title'];
    $task->description = $request['description'];
    $task->save();
    //The notify method needs a user instance
    //find the user who is to receive the notification
   // $user = User::find(2);
   // $user->notify(new \App\Notifications\NewTask($task->title));
    //dd($user);
    //()->user()->notify();
    //using the notification facade
    $users = User::get();
    \Illuminate\Support\Facades\Notification::send($users, new \App\Notifications\NewTask($task->title));
    return back()->with('success','New Task Added');
});
