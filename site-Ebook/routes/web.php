<?php

use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Frontend\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\HorreurController;
use App\Http\Controllers\Frontend\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('account/register', [AccountController::class, 'register'])->name('account.register');
Route::post('account/register', [AccountController::class, 'processRegister'])->name('account.processRegister');
Route::get('account/sucess', [AccountController::class, 'processSucess'])->name('account.processSucess');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/horreur', [HorreurController::class, 'horreur'])->name('horreur');
Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

