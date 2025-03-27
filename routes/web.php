<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/supplier', SupplierController::class);
Route::resource('/subject', SubjectController::class);
