@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Game list</div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Game name</th>
                            <th scope="col">Description</th>
                            <th scope="col"># of players</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($battles as $battle)
                            <tr>
                                <th scope="row">{{$battle->name}}</th>
                                <td>{{$battle->description}}</td>
                                <td>{{$battle->maxPlayers}}</td>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="battle/create" class="btn btn-primary">Maak een ronde!</a>

                </div>
            </div>
        </div>
    </div>

@endsection


