<?php

use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function (): void{

    Route::get('register', [RegisterController::class, 'register'])
        ->name('register');

    Route::post('store', [RegisterController::class, 'store'])
        ->name('register.store');

    Route::get('login', [AuthenticateController::class, 'login'])
        ->name('login');

    Route::post('authenticate', [AuthenticateController::class, 'authenticate'])
        ->name('login.store');

});

Route::delete('logout', [AuthenticateController::class, 'logout'])
    ->name('logout');
