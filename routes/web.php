<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/user', [UserController::class, 'store']);
Route::get('/user', [UserController::class, 'create']);
