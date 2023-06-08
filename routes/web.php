<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function(){
    Route::redirect('/', 'home');
    Route::get('home', [HomeController::class, 'index'])->name('home');
});

Auth::routes();
