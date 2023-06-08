<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Dish;
use App\Models\Product;
use App\Models\User;
use Spatie\Permission\Models\Role;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer(['components.dish-select'], function($view){
            $view->with('dishes', Dish::all());
        });

        View::composer(['components.product-select'], function($view){
            $view->with('products', Product::all());
        });

        View::composer('components.role-select', function($view){
            $view->with('roles', Role::all());
        });
    }
}
