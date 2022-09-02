<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        //dd($request->id);
        try {
            //find the product from the db
            $product = Product::findOrFail($request->id);
            //dd($product);
          $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
          $newCart = new Cart($oldCart);
          $newCart->add($product,$product->id);
          $request->session()->put('cart',$newCart);
          return back()->with('success','Cart updated');
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('status','This product is not available');
        }
    }
}
