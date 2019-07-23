@extends('layout.master')

@section('content')


    <body>
    <div class="container">
        <div class="row col-12">
            {{--carousel voor fotos van de 999games spellen--}}
            <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner w-100">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="#" alt="First slide">
                    </div>
                    <div class="carousel-item w-100">
                        <img class="d-block w-100 mh-75" src="#" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
            <br>
            {{--jumbotron dat de gebruiker verwelkomt door de naam uit de database te halen--}}
            <div class="jumbotron w-100">

                {{--hier wordt de naam van de gebruiker in de jumbotron gezet nadat de user is ingelogt--}}
                <h1 class="display-4 ">Welkom {{Auth::user()->name}}</h1>
                <p class="lead">Je bent nu ingelogt.</p>
                <a type="button" class="btn btn-primary" href="/~s1136509/P2_Laravel_Opdracht/games">
                    Spellen lijst <span class="badge badge-light">New!</span>
                </a>
            </div>
    {{--<img class="rounded" src="assets/download.jpg" alt="Responsive image" >--}}



            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">Bekijk de lijst van bordspellen</h5>
                    {{--<img class="card-img-top" src="assets/download.PNG" alt="Card image cap">--}}
                    <p class="card-text">Neem deel aan een bordspel wedstrijd met vrienden</p>
                    <a href="/~s1136509/P2_Laravel_Opdracht/games" class="btn btn-primary">Game list</a>
                </div>
            </div>




        </div>
    </div>
    </body>

@endsection