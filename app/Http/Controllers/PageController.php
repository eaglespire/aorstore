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
}
