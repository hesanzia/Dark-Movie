<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Billboard;
use App\Models\Director;
use App\Models\Movie;
use App\Models\Serial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $billboards = Billboard::all();
        $movies = Movie::all()->sortBy('name');
        $serials = Serial::all()->sortBy('name');
        return view('home',compact('movies','billboards','serials'));
    }
}
