<?php

use Illuminate\Support\Facades\Route;


Route::redirect('home', '/');

Route::get('/', function () {
    return view('home');
})->name('home');

require __DIR__ . '/auth.php';
