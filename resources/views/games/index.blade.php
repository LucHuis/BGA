@extends ('layout.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Game list</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Game name</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($games as $game)
                            <tr>
                                <th scope="row">{{$game->id}}</th>
                                <td>{{$game->name}}</td>
                                <td>{{$game->description}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection