<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller
{
    public function index(){
        $moviesList = Movie::all();
            return view('home', compact('moviesList'));

    }
}
