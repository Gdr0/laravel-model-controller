@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Movies</h1>
    <ul style="list-style: none;">
        @foreach($movies as $movie)
        
        <li> Titolo: {{$movie -> title}}</li>
        <li>Titolo Originale: {{$movie -> original_title}}</li>
        <li>Nazionalità: {{$movie -> nationality}}</li>
        <li>Voto:{{$movie -> vote}}</li>
        <br>
        @endforeach
    </ul>
@endsection
