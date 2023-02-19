<?php

use Illuminate\Support\Facades\Route;

// Version get del home

// Route::get('/', function () {
//     return view('landing');
// });


Route::view('/','landing')->name('home');

Route::view('/user','dashboard')->name('dashboard');

// Con esto funciona el login y el register
Auth::routes();

// Route::view('/admin','dashboardadmin')->name('dashadmin');

// Route::view('/login','user-login')->name('loginuser');

// Route::view('/signin','user-signin')->name('signinuser');




