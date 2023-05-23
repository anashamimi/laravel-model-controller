@extends('layouts.app')

@section('header')
    <nav class="navbar-dark p-5">
        <div class="container-fluid d-flex justify-content-around align-items-center">
            <p class="text-white fs-2">Movies</p>
            <div class="text-white d-flex">
                <a class="mx-4 fs-5" href="{{ route('home') }}">Home</a>
                <a class="mx-4 fs-5" href="{{ route('movies.index') }}">Movies List</a>
            </div>
        </div>
    </nav>
@endsection
