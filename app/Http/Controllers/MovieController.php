<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        //$books = Book::all();
        $movies = Movie::where('id', '>', '2')->get();
        return view('home', compact('movies')) ;
    }
}
