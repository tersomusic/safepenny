<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ForgetController extends Controller
{
    //
    public function main () {
        return view('forget')->with('page', 'forget');
    }

    public function access (Request $requests) {

        /*$this->validate($requests, [
            'email' => 'unique:email'
        ]);*/

//         dd($requests->all());
        $user = User::where('email', $requests->input('email'));

        if($user->exists()){
            dd($requests->input('email').' is a member of Safepenny');
        } else {
            dd('This user does not exist');
        }

    }

}



