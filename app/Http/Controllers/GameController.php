<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

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

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {

        $json = file_get_contents(database_path('/games.json'));

        $data = (json_decode($json,true) == null) ? [] : json_decode($json,true);
        //$data += [$request->all()];
        array_push($data, $request->all());
        dump($request->all());
        dump($data);
        file_put_contents( database_path('/games.json'), json_encode($data), FILE_APPEND);
    }

}
