<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function InscriptionOption(){
        return view('public.auth.inscription-option');
    }
}
