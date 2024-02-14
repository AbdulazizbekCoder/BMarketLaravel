<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('guest')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/products', [PageController::class, 'products'])->name('products');
    Route::get('/card', [PageController::class, 'card'])->name('card');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginStore', [AuthController::class, 'loginStore'])->name('loginStore');
});
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin/dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});
