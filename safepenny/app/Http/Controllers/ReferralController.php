<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ReferralController extends Controller
{
    //
    public function main () {
        return view('Referral')->with(['page'=>'Referral']);
    }


}



