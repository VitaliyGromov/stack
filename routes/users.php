<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('users', [UserController::class, 'index'])->name('users');
Route::post('users', [UserController::class, 'store'])->name('users.store');

?>