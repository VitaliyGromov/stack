<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('users/save/json', [UserController::class, 'saveToJson'])->name('users.save.json');
    Route::get('users/save/xml', [UserController::class, 'saveToXml'])->name('users.save.xml');
});

?>