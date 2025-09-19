<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\UserController;
use App\Http\Controllers\login;
use App\Models\Course;



Route::get('/',[homeController::class,'index'])->name('home');

Route::post('addcourse',[homeController::class,'store'])->name('addcourse');

Route::get('/in', function () {
    return view('dashboard-instructor');
})->name('in');

Route::get('courses',[CoursesController::class,'index'])->name('cousres');


Route::resource('register',register::class);

Route::resource('users',UserController::class);

Route::get('login', [login::class, 'showLoginForm'])->name('login');
Route::post('login', [login::class, 'login']);