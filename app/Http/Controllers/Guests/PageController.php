<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // $movies = Movie::orderByDesc('id')->get();
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
