<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)
    ->group(function () {
        Route::get('/login', 'showLoginForm');
        Route::post('/login', 'login');
        Route::get('/register', 'showRegistrationForm');
        Route::post('/register', 'register');
        Route::post('/logout', 'logout');
    });
