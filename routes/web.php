<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group (function () {
    Route::get('/', [AuthController::class, 'index']) ->name('login');
    Route::get('/register', [AuthController::class, 'register']) ->name('register');
    Route::post('/registrar', [AuthController::class,'registrar'])->name('registrar');
    Route::post('/loguear', [AuthController::class, 'loguear'])->name('loguear'); 
});

Route::middleware("auth")->group (function () {
    Route::get('/home', [AuthController::class,'home'])->name('home');
    Route::get('/usuario', [AuthController::class,'usuario'])->name('usuario');
    Route::get('/create', [AuthController::class,'create'])->name('create');
    Route::post('/store', [AuthController::class,'store'])->name('store');
    Route::get('/show/{id}', [AuthController::class,'show'])->name('show');
    Route::get('/edit/{id}', [AuthController::class,'edit'])->name('edit');
    Route::put('/update/{id}', [AuthController::class,'update'])->name('update');
    Route::delete('/destroy/{id}', [AuthController::class,'destroy'])->name('destroy');
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');

});
