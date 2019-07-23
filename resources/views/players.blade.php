@extends('layout.master')

@section('content')
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">
                <h1>Welcome</h1>
            </div>
            <div class="col-10 offset-1">
                <ul>
                    @foreach($players as $player)
                        <li>
                            {{$player->id}}
                            {{$player->name}}


                        </li>
                    @endforeach

                </ul>
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