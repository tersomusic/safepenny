<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verifyemailController extends Controller
{
    //
    public function main () {
        return view('verifyemail')->with(['page'=>'verifyemail']);
    }
}
