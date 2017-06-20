<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup')->with(['page', 'signup']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            $username => 'required|min:6|unique:users',
            $email => 'required|email|unique:users',
            $password =>  'required|confirmed|min:6'

        ];

        $input = Input::only(
            'name',
            'email',
            'password',
            'retype_password'
        );

        $validator = validator::make($input, $rules);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $confirmation_code = str_random(30);

        User::create([
            'username'=> Input::get('usermame'),
            'email'=>Input::get('email'),
            'password'=>hash()::make(Input::get('password')),
            'confirmation_code'=>$confirmation_code
        ]);


        Mail::send('email.verify',$confirmation_code,function ($message){
        $message->(Input::get('email'), Input::get('username'))->subject('verify email');

    });

        Flash::message('welcome  to safepenny');
        return Redirect::login();


        }
    };


    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Flash::message('You have successfully verified your account.');

        return Redirect::route('login');
    }
}

    public function rigcontrollerConfirm (){

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
