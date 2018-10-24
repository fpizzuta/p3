<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    //
    public function login()
    {
        //return App::environment();
        return view('login');
    }
}
