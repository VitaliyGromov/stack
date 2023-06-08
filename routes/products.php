<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::post('products', [ProductController::class, 'store'])->name('products.store');
});

?>