@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5 text-center">{{$movies->title}}</h1>
        <div class="d-flex justify-content-around">
            <div class="text-white">
                <p class="fs-4">Anno: {{$movies->date}}</p>
                <p class="fs-4">Nationality: {{$movies->nationality}}</p>
                <p class="fs-4">Original Title: {{$movies->original_title}}</p>
                <p class="fs-4">Valutazione:
                    <?php
                    $maxStars = 5;
                    $rating = $movies->vote;
                    $filledStars = round($rating / 2);

                    $stars = '';
                    for ($i = 1; $i <= $maxStars; $i++) {
                        if ($i <= $filledStars) {
                            $stars .= '<i class="fa-solid fa-star text-warning"></i>';
                        } else {
                            $stars .= '<i class="fa-regular fa-star text-warning"></i>';
                        }
                    }
                    echo $stars;
                    ?>
                </p>
            </div>
            <img class="width-img" src="{{$movies->image}}" alt="{{$movies->title}}">
        </div>

        <div class="d-flex justify-content-center m-5">
            <a href="{{route('movies.index')}}" class="btn btn-primary">Torna alla lista</a>
        </div>
    </div>
@endsection
