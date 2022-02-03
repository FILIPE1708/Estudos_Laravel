<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form()
    {
        return view('form_login');
    }

    public function login()
    {
       $credenciais = Request::only('email', 'password');

       if (Auth::attempt($credenciais))
       {
           return redirect('/produtos');
       }

       return redirect()->back();
    }
}
