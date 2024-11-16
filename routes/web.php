<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginAndRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [LoginAndRegisterController::class, 'registerPage']);
Route::post('/register', [LoginAndRegisterController::class, 'registerInsert']);
Route::get('/login', [LoginAndRegisterController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginAndRegisterController::class, 'loginInsert']);

Route::get('/form', [FormController::class, 'formPage'])->name('form');
