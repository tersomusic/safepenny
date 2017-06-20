<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class   ReceivepayController extends Controller
{
    //
    public function main () {
        return view('Receivepay')->with(['page'=>'Receivepay']);
    }
}
