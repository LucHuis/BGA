@extends('layout.master')
@section('content')
<div class="title m-b-md">
    Welkom to the Gamer Center
</div>
<ul>
    @foreach($users as $user)
        <li>
            {{$user->id}}
            {{$user->name}}
            {{$user->email}}

        </li>
    @endforeach

</ul>

    @endsection

@section('footer')
    <div class="fixed-bottom bg-light">
        <p >Keep the change</p>
    </div>
    @endsection
