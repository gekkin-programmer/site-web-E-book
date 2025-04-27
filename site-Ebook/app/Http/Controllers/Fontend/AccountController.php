<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //cette methode permettra au user de s'enregistrer
    public function register() {
        return view('frontend.register');
    }
}
