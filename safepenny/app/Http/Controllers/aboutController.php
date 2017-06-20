<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //
    public function main () {
        return view('about')->with(['page'=>'about']);
    }
}
