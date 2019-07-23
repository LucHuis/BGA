<?php

namespace App\Http\Controllers;


use App\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
            return view('games.index', compact('games'));
    }

    public function index2()
    {
        $games = Game::all();
        return view('welcome', compact('games'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
            'maxPlayers' => ['required', 'min:1']
        ]);
        //
        $game = new Game();
        $game->name = $request->name;
        $game->description = $request->description;
        $game->maxPlayers = $request->maxPlayers;
        $game->save();
        return redirect('games');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //game met nummer x
      //  $game = Game::findOrFail($id);
        return view('games.edit', compact('game'));
    }

    /**     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
       // $game = Game::findOrFail($id);
        $game->name = $request->name;
       // $game->description = $request->description;
        $game->save();
        return redirect('/games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
