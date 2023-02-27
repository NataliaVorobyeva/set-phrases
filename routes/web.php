<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FraseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Version get del home

// Route::get('/', function () {
//     return view('landing');
// });


Route::get('/', [FraseController::class, 'index'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home-user')->middleware('auth');
<<<<<<< HEAD
=======
//Route::get('/home', [HomeController::class, 'index'])->name('home-admin')->middleware('isAdmin');
>>>>>>> 6deb90409881d28becd2671586a10ae36e27be29

Route::get('/user/like', [LikeController::class, 'create'])->name('like');


// Para generar rutas automáticas, después en terminar hacer php artisan route:list para ver las que se generaron
Route::resource('frase',FraseController::class);

// Con esto funciona el login y el register
Auth::routes();

// Route::view('/admin','dashboardadmin')->name('dashadmin');

Route::prefix('frase')->middleware('auth', 'isAdmin')->group(function(){

    Route::get('/', [FraseController::class,'show'])->name('dashAdmin');
    Route::get('/create', [FraseController::class,'create'])->name('phrCreate');
    Route::get('/update', [FraseController::class,'edit'])->name('phrEdit');

});



