<?php

use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Frontend\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\HorreurController;
use App\Http\Controllers\Frontend\PaymentController;
use illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('account/register', [AccountController::class, 'register'])->name('account.register');
Route::post('account/register', [AccountController::class, 'processRegister'])->name('account.processRegister');
Route::get('account/sucess', [AccountController::class, 'processSucess'])->name('account.processSucess');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/horreur', [HorreurController::class, 'horreur'])->name('horreur.index');
Route::get('/panier', [CartController::class, 'show'])->name('cart.show');
Route::get('/checkout/{bookId}', [CheckoutController::class, 'showCheckout'])->name('checkout.show');
Route::post('/panier/ajouter', [CartController::class, 'add'])->name('cart.add');


Route::get('/payment/{order}', [PaymentController::class, 'show'])->name('payment');
Route::post('/payment/{order}', [PaymentController::class, 'process'])->name('payment.process');


