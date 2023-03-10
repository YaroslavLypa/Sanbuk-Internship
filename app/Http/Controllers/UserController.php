<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function signUp()
    {
        return view('users.sign-up');
    }
}
