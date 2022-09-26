<?php

namespace App\Composers\CartComposer;
use Illuminate\View\View;

class CartComposer{
    public function compose(View $view)
    {
        $items = request()->session()->has('cart') ? count(request()->session()->get('cart')->items ): 0;
        $view->with('cartCount', $items);
    }
}
