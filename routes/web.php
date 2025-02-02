<?php

use App\Http\Controllers\DatasetController;
use App\Http\Controllers\KMeansController;
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

Route::controller(KMeansController::class)
    ->prefix('kmeans')
    ->group(function () {
        Route::get('result', 'index');
    });

require __DIR__ . '/auth.php';
