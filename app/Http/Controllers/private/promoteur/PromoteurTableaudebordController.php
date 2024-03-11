<?php

namespace App\Http\Controllers\private\promoteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoteurTableaudebordController extends Controller
{
    public function promoteurtableaudebord(){
        return view('private.promoteur.promoteurtableaudebord');
    }
}
