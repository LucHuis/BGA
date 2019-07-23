@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>Edit game</h1>
                    <form method="POST" action="/games/{{ $game->id }}">
                     @csrf
                        @method('PATCH')
                        <div>
                            <label for="name">Game name</label>
                            <input type="text" name="name" placeholder="Enter game name">
                        </div>
                        <div>
                            <label for="name">Game description</label>
                            <input type="text"  name="description" placeholder="Enter Description">
                        </div>
                        <div>
                        <button type="submit">Create Game</button>
                        </div>
                    </form>
            </div>
        </div>
        </div>
    </div>
    @endsection