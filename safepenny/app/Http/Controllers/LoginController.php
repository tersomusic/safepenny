<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function main () {
        return view('login')->with(['page'=>'login']);

 
    }
}
