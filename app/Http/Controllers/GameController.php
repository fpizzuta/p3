<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //

    public function index()
    {
        return view('games.showAll');
    }

    public function show($title = null)
    {
        //dump($title);
        return view('games.show')->with(['title' => $title]);
    }
}
