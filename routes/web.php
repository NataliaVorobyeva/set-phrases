<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','landing')->name('inspirate');

Route::view('/user','dashboarduser')->name('dashuser');

Route::view('/admin','dashboardadmin')->name('dashadmin');

Route::view('/login','user-login')->name('loginuser');

Route::view('/signin','user-signin')->name('signinuser');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
