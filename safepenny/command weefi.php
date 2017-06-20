 $rules = [
            'name' => 'required|name|min:30|max:50|alpha'
            'email' => 'required|email|min:30|max:50|unique|members'
            'password' => 'required|password|min:10|max:15'
            'repass' => 'required|repass|min:10|max:15|same:password'
            'phone' => 'required|phone|min:11|max:15|is_numeric|unique'
        ];

        $credidencial = [
            'name' = $request->input::get('name');
            'email' = $request->input::get('email');
            'password' = $request->input::get('password');
            'phone' = $request->input::get('phone');
        ];

        $validator = validator::make($rules, $credidencial);

        if($validator){
            echo 'registraion is successful';
        }
        else {
            echo 'invalid registraion';
        }
    }



        return view('signup');