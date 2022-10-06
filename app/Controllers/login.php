<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function signin()
    {
        return view('login/signin');
    }

    public function signup()
    {
        return view('login/signup');
    }
}
