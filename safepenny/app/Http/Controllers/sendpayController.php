<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendpayController extends Controller
{
    //
    public function main () {
        return view('sendpay')->with(['page'=>'sendpay']);
    }
}
