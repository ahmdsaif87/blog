<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

Route::get('/', [BlogController::class, 'home']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);
Route::get('/projects', [PageController::class, 'projects']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/env', function () {
    return env('APP_ENV');
});
