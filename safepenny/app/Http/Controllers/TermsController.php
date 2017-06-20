<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    //
    public function main () {
        return view('Terms')->with(['page'=>'Terms']);
    }
}
