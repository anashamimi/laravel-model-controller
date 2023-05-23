@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$movies->title}}</h1>
        <p>{{$movies->plot}}</p>
        <img src="{{$movies->image}}" alt="{{$movies->title}}">
        <a href="{{route('movies.index')}}">torna alla lista di libri</a>
    </div>
@endsection
