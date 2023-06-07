<?php

use App\Http\Controllers\CookedDishesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('cooked_dishes', [CookedDishesController::class, 'index'])->name('cooked_dishes');
    Route::post('cooked_dishes', [CookedDishesController::class, 'store'])->name('cooked_dishes.store');
    Route::put('cooked_dishe', [CookedDishesController::class, 'update'])->name('cooked_dishes.update');
    Route::delete('cooked_dishes', [CookedDishesController::class, 'destroy'])->name('cooked_dishes.destroy');
});

?>