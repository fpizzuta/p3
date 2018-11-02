<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class GameController extends Controller
{
    //

    public function index()
    {
        $json = file_get_contents(database_path('/games.json'));
        $data = (json_decode($json,true) == null) ? array() : json_decode($json,true);
//        dump($data);
        return view('games.showAll')->with('data',$data);
    }

    public function show($title = null)
    {
        dump($title);
        $json = file_get_contents(database_path('/games.json'));
        $data = (json_decode($json,true) == null) ? array() : json_decode($json,true);
        foreach ($data as $game)
        {
            if ($game['id']==$title) {
                return view('games.show')->with(['match' => $game]);
            }
        }
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'gameName' => 'required',
            'date' => 'required|date',
            'p1_Name' => 'required|alpha_num',
            'p1_score' => 'nullable|digits',
            'p2_Name' => 'nullable|alpha_num',
            'p2_score' => 'nullable|digits',
            'p3_Name' => 'nullable|alpha_num',
            'p3_score' => 'nullable|digits',
            'p4_Name' => 'nullable|alpha_num',
            'p4_score' => 'nullable|digits'
        ]);
        $json = file_get_contents(database_path('/games.json'));
        $data = (json_decode($json,true) == null) ? array() : json_decode($json,true);
        //$data += [$request->all()];
        $request['id'] = random_int(1,1000000);
        array_push($data, $request->all());
//        dump($request->all());
//        dump($data);
        file_put_contents( database_path('/games.json'), json_encode($data));
//        return redirect('games');
        return view('games.show')->with(['match' => $request]);
    }
}
