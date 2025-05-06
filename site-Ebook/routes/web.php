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
Route::get('/horreur', [HorreurController::class, 'horreur'])->name('horreur');
Route::prefix('checkout')->name('frontend.')->group(function() {
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
});
Route::get('/payment/{order}', [PaymentController::class, 'show'])->name('payment');
Route::post('/payment/{order}', [PaymentController::class, 'process'])->name('payment.process');


