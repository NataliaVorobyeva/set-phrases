<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inspirate', function () {
    return view('landing');
});

Route::get('/user', function () {
    return view('dashboarduser');
});

<<<<<<< HEAD

=======
Route::get('/userlogin', function () {
    return view('user-login');
});

Route::get('/signin', function () {
    return view('user-signin');
});
>>>>>>> e0ea117e9bf5fcb2ca2d78ecafb4b78a2a2786be

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
