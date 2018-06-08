<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function login() {
        return view('frontend.auth.index');
    }

    public function authenticate(Request $request)   {
        $errors = new MessageBag();
        $email = $request->email;
        $password =  $request->password;
        $remember = $request->remember;
        if(Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
                return redirect()->intended("/admin");
            } else {
            $errors->add('password', 'Onbekende combinatie van gebruikersnaam/wachtwoord');
            return redirect()->back()->withErrors($errors)->withInput($request->except('password'));
            }

    }

    public function logout() {
            Auth::logout();
            $msg = new MessageBag(['logged-out' =>"U bent uitgelogd"]);
            return redirect()->route('public.auth.login')->withErrors($msg);
    }

}
