<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/prihlasenie', function () {
    return view('login');
})->name('login');

Route::get('/registracia', function () {
    return view('register');
})->name('register');

Route::get('/kosik', function () {
    return view('cart');
})->name('cart');
