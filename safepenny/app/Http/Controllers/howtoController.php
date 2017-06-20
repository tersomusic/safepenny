<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class howtoController extends Controller
{
    //
    public function main () {
        return view('how')->with(['page'=>'how']);
    }
}
