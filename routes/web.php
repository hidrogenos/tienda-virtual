<?php

use Illuminate\Support\Facades\Auth;
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
    return view('dashboard2');
});

Route::get('/dashboard', function () {
    return view('dashboard2');
})->name('dashboard');

Route::get('/cerrar-sesion', function () {
    Auth::logout();
    return view('dashboard2');
})->name('cerrar-sesion');
