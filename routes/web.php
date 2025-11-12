<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/prihlasenie', fn() => view('login'))->name('login');
Route::post('/prihlasenie', [LoginController::class, 'authenticate'])->name('login.auth');

Route::get('/registracia', fn() => view('register'))->name('register');
Route::post('/registracia', [RegisterController::class, 'store'])->name('register.store');

Route::get('/kosik', fn() => view('cart'))->name('cart');

Route::get('/produkty/pridat', [ProductController::class, 'create'])->name('products.create');
Route::post('/produkty', [ProductController::class, 'store'])->name('products.store');
Route::get('/produkty/{id}', [ProductController::class, 'show'])->name('products.show');
