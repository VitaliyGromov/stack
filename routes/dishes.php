<?php

use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('dishes', [DishController::class, 'index'])->name('dishes');
    Route::get('dishes/{dish}', [DishController::class, 'show'])->name('dishes.show');
    Route::post('dishes', [DishController::class, 'store'])->name('dish.store');
    Route::put('dishes/{dish}', [DishController::class, 'update'])->name('dish.update');
    Route::delete('dishes/{dish}', [DishController::class, 'destroy'])->name('dish.destroy');
});


?>