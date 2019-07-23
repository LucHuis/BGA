@extends('layout.master')

@section('content')
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Game List</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Game</th>
                            <th scope="col">Description</th>
                            <th scope="col">Max # of players</th>

                        </tr>
                        </thead>
                        <tbody>

                            @foreach($games as $game)
                            <tr>
                                <th scope="row">{{$game->name}}</th>
                                <td>{{$game->description}}</td>
                                <td>{{$game->maxPlayers}}</td>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    </body>
    @endsection

@section('footer')
    <div class="fixed-bottom bg-light">
        <p >Keep the change</p>
    </div>
    @endsection
