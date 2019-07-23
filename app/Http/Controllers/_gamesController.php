<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Game;

class gamesController extends Controller
{
public function showGames()
{

    $games = Game::all();

    return view('welcome', [
        'games' => $games
    ]);
}

}
