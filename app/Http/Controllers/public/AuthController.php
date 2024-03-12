<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function InscriptionOption(){
        return view('public.auth.inscription-option');
    }

    public function InscriptionPromoteur(){
        return view('public.auth.inscription-promoteur');
    }

    public function InscriptionAbonne(){
        return view('public.auth.inscription-abonne');
    }

    public function connexion(){
        return view('public.auth.connexion');
    }
}
