<?php

use App\Http\Controllers\Frontend\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('account/register', [AccountController::class, 'register'])->name('account.register');
Route::post('account/register', [AccountController::class, 'processRegister'])->name('account.processRegister');
Route::get('account/sucess', [AccountController::class, 'processSucess'])->name('account.processSucess');


