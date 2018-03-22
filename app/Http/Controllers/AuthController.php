<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
    ActivityLog::all();
    }

    public function authenticate(Request $request) {

    }

    public function logout() {

    }

}
