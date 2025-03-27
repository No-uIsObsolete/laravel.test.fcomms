<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    function register()
    {
        return view('register');
    }
    function login()
    {
        return view('login');
    }
    function logout() {

    }

    function registerUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => ['required', 'unique:users', 'max:45'],
            'email' => ['required', 'unique:users', 'max:255', 'email'],
            'firstname' => ['required', 'max:40'],
            'lastname' => ['required', 'max:40'],
            'telephone' => ['max:15'],
            'password' => ['required', 'max:100', Password::min(8)->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised()],
            'password_repeat' => ['required', 'max:100', 'confirmed:password'],
            'terms' => ['required'],
        ]);
        if ($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        }
        //dd($validator->errors());
        \App\Models\User::create($request->only(['username', 'email', 'password', 'firstname','lastname', 'telephone']));
         return redirect('/login');
dd(1);

        $username = $request->input('username');
        $email = $request->input('email');

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $telephone = $request->input('telephone');

        $password = $request->input('password');
        $password_repeat = $request->input('password_repeat');

        dd(request($request->all()));
    }
function loginUser(Request $request) {

    $validator = Validator::make($request->all(), [
        'user' => ['required', 'max:45', 'email'],
        'password' => ['required', 'confirmed'],
    ]);

}



}

