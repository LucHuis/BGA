<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class playerscontroller extends Controller
{
    public function showPlayers()
    {

        $players = Player::all();

        return view('players', [
            'players' => $players
        ]);
    }
}
