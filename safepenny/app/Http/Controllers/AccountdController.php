<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    //
    public function main () {
        return view('account')->with(['page'=>'account']);
    }
}
