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

    public function actions()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('actions.action',compact('billboards','movies'));
    }

    public function search()
    {
        $search = $_GET['search'];
        $billboards = Billboard::all();
        $movies = Movie::where('name','LIKE','%'.$search. '%')->get();
        $serials = Serial::where('name','LIKE','%'.$search. '%')->get();
        $artists = Artist::where('name','LIKE','%' .$search. '%')->get();
        $directors = Director::where('name','LIKE','%' .$search. '%')->get();
        return view('search.search',compact('movies','serials','artists','directors','billboards'));

    }

    public function adventures()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('adventures.adventure',compact('billboards','movies'));
    }

    public function animations()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('animations.animation',compact('billboards','movies'));
    }

    public function comedies()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('comedies.comedy',compact('movies','billboards'));
    }

    public function crimes()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('crimes.crime',compact('movies','billboards'));
    }

    public function dramas()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('dramas.drama',compact('movies','billboards'));
    }

    public function mysteries()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('mysteries.mystery',compact('movies','billboards'));
    }

    public function romances()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('romances.romance',compact('movies','billboards'));
    }

    public function horrors()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('horrors.horror',compact('movies','billboards'));
    }
    public function scienceFiction()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('scienceFiction.sF',compact('movies','billboards'));
    }

    public function maleArtists()
    {

        $artists = Artist::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('artists.male',compact('billboards','artists'));
    }
    public function femaleArtists()
    {
        $artists = Artist::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('artists.female',compact('billboards','artists'));
    }

    public function serials()
    {
        $serials = Serial::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('serials.serial',compact('billboards','serials'));
    }
}
