<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('dishes.index', function($view){
            $view->with('dishes', Dish::all());
        });

        View::composer(['products.index', 'components.product-select'], function($view){
            $view->with('products', Product::all());
        });

        View::composer('users.index', function($view){
            $view->with('users', User::all());
        });

        View::composer('orders.index', function($view){
            $view->with('orders', Order::all());
        });
    }
}
