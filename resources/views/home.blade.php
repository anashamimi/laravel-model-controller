@extends('layouts.app')

@section('content')
    <h1>MOVIES</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <p>{{$movie->title}}</p>
        @endforeach
    </div>
@endsection
