<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacyController extends Controller
{
    //
    public function main () {
        return view('privacy')->with(['page'=>'privacy']);
    }
}
