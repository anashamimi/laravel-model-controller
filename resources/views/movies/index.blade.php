@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <ul class="row">
                @foreach ($movies as $movie)
                    <li class=" col-4">
                        <img src="{{$movie->image}}" alt="{{$movie->title}}">
                       <a href="{{route('movies.show', ['id' => $movie->id])}}">{{$movie->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
