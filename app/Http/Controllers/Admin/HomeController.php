<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    public function __construct()
//    {
//       $this->middleware('admin');
//    }
    public function home()
    {
        return view('admin.home', [
            'no_of_categories'=>count(Category::get()),
            'no_of_products'=>count(Product::get())
        ]);
    }
}
