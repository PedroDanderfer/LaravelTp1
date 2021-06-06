<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DisplayController;

use App\Http\Middleware\checkNotLogged;

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

Route::prefix('/login')->name('login.')->group(function(){
    Route::get('/', [DisplayController::class, 'login'])
        ->name('view')
        ->middleware(CheckNotLogged::class);
});


Route::prefix('/register')->name('register.')->group(function(){
    Route::get('/', [Displaycontroller::class, 'register'])
        ->name('view')
        ->middleware(CheckNotLogged::class);
});

Route::prefix('/auth')->name('auth.')->group(function(){
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login');
        Route::post('/register', [AuthController::class, 'register'])
        ->name('register');
        Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout'); 
});

Route::get('/', [DisplayController::class, 'home'])
    ->name('home');