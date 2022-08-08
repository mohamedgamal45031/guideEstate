<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'index']);
Route::resource('main', MainController::class);
Route::resource('client', ClientController::class);
