<?php

use App\Http\Controllers\Fontend\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('account/register', [AccountController::class, 'register'])->name('account.register');
