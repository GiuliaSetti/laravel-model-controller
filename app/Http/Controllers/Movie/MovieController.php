<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //funzione richiamate dalle rotte:

    public function index(){
        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function about(){
        return view('about');
    }
  
    public function contacts(){
        return view('contacts');
    }
  
}
