<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::redirect('home', '/');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('course/')->name('course.')->group(function (): void{

    Route::get('index', [CourseController::class, 'index'])
        ->name('index');

    Route::middleware('auth')->get('create', [CourseController::class, 'create'])
        ->name('create');

    Route::patch('/publish', [CourseController::class, 'publish'])
        ->name('publish');

    Route::post('store', [CourseController::class, 'store'])
        ->name('store');

    Route::post('storeItem', [CourseController::class, 'storeItem'])
        ->name('storeItem');

    Route::get('show/{id}', [CourseController::class, 'show'])
        ->name('show');

});

require __DIR__ . '/auth.php';
