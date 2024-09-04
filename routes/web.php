<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Antony Santos',
        'email' => 'elgasing@gmail.com'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);