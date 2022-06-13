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
}
