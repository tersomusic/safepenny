<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function main () {
        return view('index')->with(['page'=>'index']);
    }
}
