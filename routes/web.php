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

});

//Route dibawah hanya bisa diakses oleh akun yang punya role admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin_dashboard');
    Route::get('/donasi', 'App\Http\Controllers\DonasiController@index')->name('index.index');
    route::get('/donasi/create', 'App\Http\Controllers\DonasiController@create')->name('index.create');
    route::post('/donasi/store', action: 'App\Http\Controllers\DonasiController@store')->name('index.store');
    route::get('/donasi/edit{id}', 'App\Http\Controllers\DonasiController@edit')->name('index.edit');
    route::put('/donasi/update{id}', 'App\Http\Controllers\DonasiController@update')->name('index.update');
    route::delete('/donasi/delete{id}', 'App\Http\Controllers\DonasiController@destroy')->name('index.destroy');

});
