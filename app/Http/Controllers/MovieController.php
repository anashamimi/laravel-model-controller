<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('vote', 'desc')
        ->limit(3)
        ->get();
        return view('home', compact('movies')) ;
    }

    public function movie()
    {
        $movies = Movie::orderBy('title', 'desc')
        ->get();
        return view('movies.index', compact('movies')) ;
    }

    public function show($id)
    {
        $movies = Movie::findOrFail($id);
        return view('movies.show', compact('movies')) ;
    }
}
