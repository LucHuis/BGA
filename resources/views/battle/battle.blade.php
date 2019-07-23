@extends('layout.master')

@section('content')
    <div class="container">
        <br>
        <form action="/battle" method="POST">
            @csrf

            <div class="form-group">
                <label>Wanneer begint het?</label>
                <input class="form-control" type="time" value="{{date("h:i:s")}}" id="tijd" name="tijd">
            </div>
            <br>
            <div class="input">
                <div class="form-group">
                    <div class="input-group">
                        <label class="col-md-2">Battle naam</label>
                        <label class="col-md-2">Hoelang?</label>
                        <label class="col-md-2">Begin tijd</label>

                        <label class="col-md-2">Player #</label>
                    </div>
                    <div class="input-group">
                        <input class="form-control col-md-2" type="text" name="ronde1" value="Ronde 1">
                        <input class="form-control col-md-2 tijdinput" type="time" name="rondetijd_1">
                        <input class="form-control col-md-2" type="time" value="{{date("h:i:s")}}" name="starttijd_1">
                        <input class="form-control col-md-2 tijdinput" type="number" name="rondetijd_1">
                    </div>

                </div>
                <br>
            </div>
            <input type="text" id="battles" name="battles" value="" hidden>
            <a class="btn btn-primary" href="/~s1136509/P2_Laravel_Opdracht/loginIndex" role="button">Link</a>





        </form>
    </div>




@endsection