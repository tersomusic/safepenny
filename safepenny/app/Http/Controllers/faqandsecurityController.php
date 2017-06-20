<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqandsecurityController extends Controller
{
    //
    public function main () {
        return view('faqandsecurity')->with(['page'=>'faqandsecurity']);
    }
}
