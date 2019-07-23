@extends('layout.master')

@section('content')
    <div class="content">


        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>Kies een spel</h1>
                    <form method="POST" action="/~s1136509/P2_Laravel_Opdracht/games/store">
                        @csrf

                    <div>
                        <label for="name">Game name</label>
                        <input type="text" required name="name" placeholder="Enter gamename">
                    </div>
                    <div>
                        <label for="description">Game description</label>
                        <input type="text"  name="description" placeholder="Enter Description">
                    </div>
                        <div>
                            <label for="maxPlayers">number of players</label>
                            <input type="text"  name="maxPlayers" placeholder="Enter maxPlayers">
                        </div>
                    <div>
                        <button type="submit">Create Game</button>
                    </div>


                        <div class="alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $errors)
                                    <li class="list-group-item-danger">{{ $errors }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection