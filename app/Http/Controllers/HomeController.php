<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
    //funzione che gestisce la home
    public function index(){

        $movies = Movie::all();
        dd($movies);

        return view('home', compact('movies'));
    }
}
