@extends('layout.master')

@section('content')

    <div class="container" style="margin-top: 5vh">

        @foreach($errors->all() as $error)

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endforeach

        <form action="../{{$user->id}}" method="post">
            @csrf
            @method('PATCH')


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name: </span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default" name="name" value="{{$user->name}}">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email: </span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default" name="email" value="{{$user->email}}">
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
        </form>

            <br><br>


            <div class="accordion" id="accordionExample">
                <div class="">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                Danger!
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="/users/{{$user->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
