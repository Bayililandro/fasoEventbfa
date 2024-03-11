<?php

namespace App\Http\Controllers\private\abonne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbonneTableaudebordController extends Controller
{
    public function abonnetableaudebord(){
        return view('private.abonne.abonnetableaudebord');
    }
}
