<?php

use App\Http\Controllers\Admin\AuthentificationSessionController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthentificationSessionController::class, 'create'])->name('admin.login');

/** Dashboard route */
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware(['auth:admin']);
