<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('register',register::class);

Route::resource('users',UserController::class);