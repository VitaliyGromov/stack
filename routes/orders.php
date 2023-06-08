<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('orders', [OrderController::class, 'index'])->name('orders');
    Route::post('orders', [OrderController::class, 'store'])->name('orders.store');
});



?>