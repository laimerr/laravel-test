<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [\App\Http\Controllers\AuthController::class, 'default'])->name(name:'login');
Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name(name:'login_process');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name(name:'logout');

Route::middleware(middleware: "auth.admin")->group(function() {
    Route::resource(name: 'posts', controller: App\Http\Controllers\Admin\PostController::class);
});
