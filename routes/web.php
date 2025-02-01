<?php

use App\Http\Controllers\DatasetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DatasetController::class)
    ->prefix('datasets')
    ->group(function () {
        Route::get('', 'index');
        Route::get('create', 'create');
    });

require __DIR__ . '/auth.php';
