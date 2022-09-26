<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
//        return view('welcome', [
//            'products'=>Product::get()
//        ]);
        $products = Product::get();
        return view('welcome', compact('products'));
    }
    public function products(Request $request)
    {
        //dd($request->session()->get('cart')->items);
        $items = $request->session()->get('cart')->items;
       // dd(count($items));
        $latest = Product::latest()->limit(6)->get();
        return view('products.index', compact('latest'));
    }
}
