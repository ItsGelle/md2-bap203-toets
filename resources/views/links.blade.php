@extends('layouts.master')

@section('content')

    @foreach($links as $link)
        <h2>{{$link->title}}</h2>
        <h2>{{$link->url}}</h2>
        <p>{{$link->description}}</p>
    @endforeach

    <a href="/link-toevoegen">Voeg zelf een linkje toe!</a> <br> <br>
    <a href="/">Terug naar home</a>
@endsection()