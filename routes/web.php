<?php

use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\UserController;
use App\Models\Course;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/in', function () {
    return view('dashboard-instructor');
})->name('in');

Route::get('courses',[CoursesController::class,'index'])->name('cousres');


Route::resource('register',register::class);

Route::resource('users',UserController::class);