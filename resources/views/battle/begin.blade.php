@extends('layout.master')

@section('content')
    <div class="content">


        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>Kies een spel</h1>
                    <form method="POST" action="games">
                        @csrf
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action active">
                                Select a game!
                            </a>

                            @foreach($battles as $battle)
                                <a href="/~s1136509/P2_Laravel_Opdracht/battle/battle" class="list-group-item list-group-item-action">{{$battle->name}}</a>
                            @endforeach
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