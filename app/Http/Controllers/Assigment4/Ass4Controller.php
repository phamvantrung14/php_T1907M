<?php


namespace App\Http\Controllers\Assigment4;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ass4Controller extends Controller
{
    public function login()
    {
        return view('assigment4.logins4');
    }
    public function Register()
    {
        return view('assigment4.registers4');
    }
    public function Forgot()
    {
        return view('assigment4.forgotpas');
    }

}
