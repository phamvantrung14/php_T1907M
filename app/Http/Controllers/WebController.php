<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function getLogin(){
        return view('user.login');
    }
    public function getRegister()
    {
        return view('user.register');
    }
}
