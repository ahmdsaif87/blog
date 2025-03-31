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

Route::get('/debug-manifest', function () {
    $manifestPath = public_path('build/.vite/manifest.json');

    if (!file_exists($manifestPath)) {
        return response()->json(['error' => 'manifest.json TIDAK ditemukan di Railway!'], 404);
    }

    return response()->json(json_decode(file_get_contents($manifestPath), true));
});

