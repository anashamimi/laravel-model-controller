@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center container">
    <div class="row">
        <h1 class="text-center m-5">MOVIES LIST</h1>

        @foreach ($movies as $movie)
            <div class="card col-4 p-5 border-0 rounded-0">
                <div class="card-image">
                    <img class="rounded-3 img-fluid" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-title fs-5">{{ $movie->title }}</p>
                        <p>
                            <?php
                            $maxStars = 5;
                            $rating = $movie->vote;
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
                    <div class="d-flex justify-content-center">
                        <a href="{{route('movies.show', ['id' => $movie->id])}}" class="btn btn-primary">Details</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
