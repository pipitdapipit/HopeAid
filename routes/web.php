<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'dashboard']);

Route::get('/register', [LoginAndRegisterController::class, 'registerPage']);
Route::post('/register', [LoginAndRegisterController::class, 'registerInsert']);
Route::get('/login', [LoginAndRegisterController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginAndRegisterController::class, 'loginInsert']);

Route::post('/logout', [LoginAndRegisterController::class, 'logout']);

Route::get('/form', [FormController::class, 'formPage'])->name('form');
Route::post('/form', [FormController::class, 'formInsert']);
<<<<<<< HEAD

Route::get('/documentation', [MainController::class, 'documentation'])->name('page.documentation');
=======
>>>>>>> fc66ec259a50d2cca9c70b0f2ce1d4fe794266e3
