<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $json = file_get_contents(database_path('/games.json'));
        $data = (json_decode($json,true) == null) ? array() : json_decode($json,true);
        $match = array();
        foreach ($data as $game)
        {
            if (array_key_exists("p1_Name",$game)) {
                array_push($match, $game['p1_Name']);
            }
            if (array_key_exists("p2_Name",$game)) {
                array_push($match, $game['p2_Name']);
            }
            if (array_key_exists("p3_Name",$game)) {
                array_push($match, $game['p3_Name']);
            }
            if (array_key_exists("p4_Name",$game)) {
                array_push($match, $game['p4_Name']);
            }
        }
        $data = array_unique($match);
        return view('users.showAll')->with('data',$data);
    }

    public function show()
    {
        return view('users.showAll');
    }
}
