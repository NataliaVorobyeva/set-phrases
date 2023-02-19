<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FraseController;

// Version get del home

// Route::get('/', function () {
//     return view('landing');
// });


Route::get('/', [FraseController::class, 'index'])->name('home');


Route::view('/user','dashboard')->name('dashboard');

// Con esto funciona el login y el register
Auth::routes();

// Route::view('/admin','dashboardadmin')->name('dashadmin');





