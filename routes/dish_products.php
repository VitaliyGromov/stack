<?php

use App\Http\Controllers\DishProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::post('dish_products/{dish}', [DishProductController::class, 'store'])->name('dish_products.store');
    Route::put('dish_products/{dish}', [DishProductController::class, 'update'])->name('dish_products.update');
    Route::delete('dish_products/{dish}', [DishProductController::class, 'destroy'])->name('dish_products.destroy');
});

?>