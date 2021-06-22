<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\PurchasesController;

use App\Http\Middleware\isAuth;
use App\Http\Middleware\isNotAuth;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isSeller;

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
    Route::get('/', [AuthController::class, 'loginView'])
        ->name('view')
        ->middleware(isAuth::class);
});


Route::prefix('/register')->name('register.')->group(function(){
    Route::get('/', [AuthController::class, 'registerView'])
        ->name('view')
        ->middleware(isAuth::class);
});

Route::prefix('/auth')->name('auth.')->group(function(){
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login')
        ->middleware(isAuth::class);;
    Route::post('/register', [AuthController::class, 'register'])
        ->name('register')
        ->middleware(isAuth::class);;
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout')
        ->middleware(isNotAuth::class);;
    Route::delete('/delete/{id}',[AuthController::class, 'delete'])
        ->name('delete')
        ->middleware(isAdmin::class);
    Route::put('/changeAdmin', [AuthController::class, 'changeAdmin'])
        ->name('changeAdmin')
        ->middleware(isAdmin::class);
    Route::put('/changeSeller', [AuthController::class, 'changeSeller'])
        ->name('changeSeller')
        ->middleware(isAdmin::class);
});

Route::prefix('/product')->name('product.')->group(function(){
    Route::get('/create', [ProductController::class, 'createView'])
        ->name('createView')
        ->middleware(isSeller::class);
    Route::post('/create', [ProductController::class, 'create'])
        ->name('create')
        ->middleware(isSeller::class);
    Route::get('/get', [ProductController::class, 'getAll'])
        ->name('getAll');
    Route::get('/get/{id}', [ProductController::class, 'getId'])
        ->name('getId');
    Route::get('/ofertas', [ProductController::class, 'getOffers'])
        ->name('getOffers');
    Route::delete('/delete/{id}', [ProductController::class, 'delete'])
        ->name('delete')
        ->middleware(isSeller::class);
});

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::redirect('/', '/admin/users')->name('panel');
    Route::get('/users', [AdminController::class, 'usersView'])
        ->name('users')
        ->middleware(isAdmin::class);
    Route::get('/comingsoon', [AdminController::class, 'comingSoon'])
        ->name('comingSoon')
        ->middleware(isAdmin::class);
});

Route::prefix('/purchases')->name('purchases.')->group(function(){
    Route::post('/create', [PurchasesController::class, 'create'])
        ->name('create')
        ->middleware(isNotAuth::class);
});

Route::get('/comingsoon', [DisplayController::class, 'comingSoon'])->name('comingSoon');

Route::redirect('/','/product/get')->name('home');