<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Billboard;
use App\Models\Channel;
use App\Models\Dialog;
use App\Models\Director;
use App\Models\Link;
use App\Models\Movie;
use App\Models\Serial;
use App\Models\Series;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $users = User::all();
        $movies = Movie::all();
        $directors = Director::all();
        $artists = Artist::all();
        $billboards = Billboard::all();
        $channels = Channel::all();
        $series = Serial::all();
        $links = Link::all();

        return view('dashboard',compact('users','movies','directors','artists','billboards','channels','series','links'));
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

    public function actions()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.action',compact('billboards','movies'));
    }


    public function adventures()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.adventure',compact('billboards','movies'));
    }

    public function animations()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.animation',compact('billboards','movies'));
    }

    public function comedies()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.comedy',compact('movies','billboards'));
    }

    public function crimes()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.crime',compact('movies','billboards'));
    }

    public function dramas()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.drama',compact('movies','billboards'));
    }

    public function mysteries()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.mystery',compact('movies','billboards'));
    }

    public function romances()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.romance',compact('movies','billboards'));
    }

    public function horrors()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.horror',compact('movies','billboards'));
    }
    public function scienceFiction()
    {
        $movies = Movie::all()->sortBy('name');
        $billboards = Billboard::all();
        return view('categories.sF',compact('movies','billboards'));
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
