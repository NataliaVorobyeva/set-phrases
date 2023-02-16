<?php

use Illuminate\Support\Facades\Route;


Route::view('/','landing')->name('inspirate');

Route::view('/user','dashboarduser')->name('dashuser');

Route::view('/userlogin','user-login')->name('loginuser');

Route::view('/signin','user-signin')->name('signinuser');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
