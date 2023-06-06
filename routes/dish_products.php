<?php

use App\Http\Controllers\DishProductController;
use Illuminate\Support\Facades\Route;

Route::post('dish_products/{dish}', [DishProductController::class, 'store'])->name('dish_products.store');

?>