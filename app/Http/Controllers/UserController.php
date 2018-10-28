<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name = null)
    {
        //dump($name);
        return view('users.user')->with(['name' => $name]);
    }

    public function showAll()
    {
        return view('users.showAll');
    }
}
