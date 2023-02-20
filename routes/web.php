<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FraseController;
use App\Http\Controllers\HomeController;

// Version get del home

// Route::get('/', function () {
//     return view('landing');
// });


Route::get('/', [FraseController::class, 'index'])->name('welcome');


Route::get('/dashboard',[HomeController::class, 'index'])->name('home')->middleware('auth');

// Con esto funciona el login y el register
Auth::routes();

// Route::view('/admin','dashboardadmin')->name('dashadmin');





