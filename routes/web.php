<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','landing')->name('inspirate');

Route::view('/user','dashboarduser')->name('dashuser');

Route::view('/login','user-login')->name('loginuser');

Route::view('/signin','user-signin')->name('signinuser');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware('auth')->group(function(){
    //Rutas del DELETE UPDATE//
Route::view('/','dashboardadmin')->name('dashadmin');
});
