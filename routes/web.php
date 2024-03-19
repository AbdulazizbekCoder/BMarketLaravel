<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\ProductController;

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
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/card', [PageController::class, 'card'])->name('card');
Route::post('/loginStore', [AuthController::class, 'loginStore'])->name('loginStore');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('add-product/{product}' , [CartController::class, 'addProduct'])->name('addProduct');

Route::middleware('auth')->group(function () {

    Route::resource('admin/products', ProductController::class);

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/orders', [AdminController::class, 'order'])->name('admin.order');

    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');
});
