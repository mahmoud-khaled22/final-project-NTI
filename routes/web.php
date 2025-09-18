<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\UserController;
use App\Http\Controllers\login;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('register',register::class);

Route::resource('users',UserController::class);

Route::get('login', [login::class, 'showLoginForm'])->name('login');
Route::post('login', [login::class, 'login']);