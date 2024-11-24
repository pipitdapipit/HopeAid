<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'dashboard'])->name('dashboardPage');

Route::get('/register', [LoginAndRegisterController::class, 'registerPage']);
Route::post('/register', [LoginAndRegisterController::class, 'registerInsert']);
Route::get('/login', [LoginAndRegisterController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginAndRegisterController::class, 'loginInsert']);
Route::get('/logout', [MainController::class, 'logout']);

//Kalo belom login, ga bisa akses route dibawah
Route::middleware(['auth'])->group(function () {
    Route::get('/form', [FormController::class, 'formPage'])->name('form');
    Route::post('/form', [FormController::class, 'formInsert']);

    Route::get('/documentation', [MainController::class, 'documentationPage'])->name('page.documentation');
    Route::get('/article', [MainController::class, 'articlePage']);

    //Route dibawah hanya bisa diakses oleh akun yang punya role admin
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin_dashboard');
});
