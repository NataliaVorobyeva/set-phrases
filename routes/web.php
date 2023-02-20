<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FraseController;

// Version get del home

// Route::get('/', function () {
//     return view('landing');
// });


Route::get('/', [FraseController::class,'index'])->name('home');

Route::get('/frase/show', [FraseController::class,'show'])->name('dashAdmin');
Route::get('/frase/create', [FraseController::class,'create'])->name('phrCreate');
Route::get('/frase/update', [FraseController::class,'edit'])->name('phrEdit');

Route::view('/user','dashboard')->name('dashboard');

// Para generar rutas automáticas, después en terminar hacer php artisan route:list para ver las que se generaron
Route::resource('frase',FraseController::class);

// Con esto funciona el login y el register
Auth::routes();

// Route::view('/admin','dashboardadmin')->name('dashadmin');





