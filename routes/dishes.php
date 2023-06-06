<?php

use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

Route::get('dishes', [DishController::class, 'index'])->name('dishes');
Route::get('dishes/{dish}', [DishController::class, 'show'])->name('dishes.show');
Route::post('dishes', [DishController::class, 'store'])->name('dish.store');

?>