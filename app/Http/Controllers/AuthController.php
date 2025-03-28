<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        User::create($request->only(['username', 'email', 'password', 'firstname','lastname', 'telephone']));
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



//    $validator = Validator::make($request->all(), [
//        'user' => ['required', 'max:45'],
//        'password' => ['required', 'confirmed'],
//    ]);
//    if ($validator->fails()) {
//        return redirect('/login')->withErrors($validator)->withInput();
//    }

    $login = $request->input('user');
    $user = User::where('email', $login)->orWhere('username', $login)->first();
    if (!$user) {
        return redirect()->back()->withErrors(['email' => 'Invalid login credentials']);
    }

    $request->validate([
        'password' => 'required|min:8',
    ]);

    if (Auth::attempt(['email' => $user->email, 'password' => $request->password]) ||
        Auth::attempt(['username' => $user->username, 'password' => $request->password])) {
        Auth::loginUsingId($user->id);
        return redirect('/dashboard');
    } else {
        return redirect()->back()->withErrors(['password' => 'Invalid login credentials']);
    }

    // $password = $request->input('password');
}



}

