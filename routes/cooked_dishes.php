<?php

use App\Http\Controllers\CookedDishesController;
use Illuminate\Support\Facades\Route;

Route::get('cooked_dishes', [CookedDishesController::class, 'index'])->name('cooked_dishes');
Route::post('cooked_dishes', [CookedDishesController::class, 'store'])->name('cooked_dishes.store');

?>