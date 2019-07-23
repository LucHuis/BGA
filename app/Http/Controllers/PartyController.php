<?php

namespace App\Http\Controllers;

use App\Battle;
use App\User;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $battles = Battle::all();

        return view('battles', compact('battles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('battles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Battle  $battle
     * @return \Illuminate\Http\Response
     */
    public function show(Battle $battle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Battle  $battle
     * @return \Illuminate\Http\Response
     */
    public function edit(Battle $battle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Battle  $battle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Battle $battle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Battle  $battle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Battle $battle)
    {
        //
    }
}
