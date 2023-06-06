<?php

use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

Route::get('dishes', [DishController::class, 'index'])->name('dishes');
Route::post('dishes', [DishController::class, 'store'])->name('dish.store');

?>