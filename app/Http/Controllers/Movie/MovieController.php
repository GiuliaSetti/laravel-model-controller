<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //funzione richiamate dalle rotte:

    public function index(){
        return view('home');
    }
  
}
