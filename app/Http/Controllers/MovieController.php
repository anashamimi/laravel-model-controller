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
}
