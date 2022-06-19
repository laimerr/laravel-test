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
    return view('index');
})->name('home');

Route::get('views', function () {
    return view('about');
})->name('about');

Route::get('login', function () {
    return view('login');
})->name('login');

    //Вход
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginFrom'])->name(name:'login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name(name:'login_process');
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name(name:'logout');
    //Регистрация

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterFrom'])->name(name:'register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name(name:'register_process');
