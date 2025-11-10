<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/prihlasenie', function () {
    return view('login');
})->name('login');

Route::post('/prihlasenie', [LoginController::class, 'authenticate'])->name('login.auth');


Route::get('/registracia', function () {
    return view('register');
})->name('register');

Route::get('/kosik', function () {
    return view('cart');
})->name('cart');
