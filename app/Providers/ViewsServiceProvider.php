<?php

namespace App\Providers;

use App\Composers\CartComposer\CartComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewsServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('*', CartComposer::class);
    }
}
