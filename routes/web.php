<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('post', PostController::class);
// Route::resource('category', CategoryController::class);

// Agrupar Rutas
Route::group(['prefix' => 'dashboard'], function (){
    // Route::resource('post', PostController::class);
    // Route::resource('category', CategoryController::class);

    // Agruoar Controladores
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class
    ]);
});









