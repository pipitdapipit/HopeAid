<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginAndRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginAndRegisterController::class, 'registerPage']);
Route::post('/', [LoginAndRegisterController::class, 'registerInsert']);
Route::get('/login', [LoginAndRegisterController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginAndRegisterController::class, 'loginInsert']);

Route::post('/logout', [LoginAndRegisterController::class, 'logout']);

Route::get('/form', [FormController::class, 'formPage'])->name('form');
Route::post('/form', [FormController::class, 'formInsert']);
