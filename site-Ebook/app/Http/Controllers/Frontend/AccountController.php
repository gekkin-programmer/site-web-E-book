<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontend\userregisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //cette methode permet de voir la page d'enregistrement
    public function register() {
        return view('frontend.register');
    }

    public function processSucess() {
        return view('frontend.pages.register-sucess');
    }

    //cette methode permet de traiter le formulaire d'enregistrement
    public function processRegister(userregisterRequest $request) {
        $user = new User();
        $user->nom = $request->first_name;
        $user->prenom = $request->last_name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->profession = $request->profession;
        $user->numero = $request->number;
        $user->pays = $request->country;
        $user->state = $request->state;
        $user->ville = $request->city;
        $user->address1 = $request->adresse_1;
        $user->address2 = $request->adresse_2;
        $user->type_de_transaction = $request->money;
        $user->moyen_denvoi = $request->book;
        $user->validation = $request->validate;
        $user->save();

        return redirect()->route('account.processSucess');
    }

}
