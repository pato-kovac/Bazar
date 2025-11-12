<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/prihlasenie', fn() => view('login'))->name('login');
Route::post('/prihlasenie', [LoginController::class, 'authenticate'])->name('login.auth');

Route::get('/registracia', fn() => view('register'))->name('register');
Route::post('/registracia', [RegisterController::class, 'store'])->name('register.store');


Route::get('/produkty/pridat', [ProductController::class, 'create'])->name('products.create');
Route::post('/produkty', [ProductController::class, 'store'])->name('products.store');
Route::get('/produkty/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/kosik', [CartController::class, 'index'])->name('cart');
Route::patch('/kosik/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/kosik/pridat', [CartController::class, 'add'])->name('cart.add');
Route::delete('/kosik/odstranit/{id}', [CartController::class, 'remove'])->name('cart.remove');
