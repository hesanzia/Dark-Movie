<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Movie;

class MovieController extends Controller
{
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }
    public function create()
    {
        $directors = Director::all()->sortBy('name');
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('movies.create', compact('directors'));
    }

    public function store(StoreMovieRequest $request)
    {
        Movie::create($request->validated());

        return redirect()->route('dashboard');
    }

    public function edit(Movie $movie)
    {
        $directors = Director::all()->sortBy('name');
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('movies.edit',compact('movie','directors'));
    }

    public function update(UpdateMovieRequest $request , Movie $movie)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $movie->update($request->validated());
        return redirect()->route('dashboard');
    }

    public function destroy(Movie $movie)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $movie->delete();
        return redirect()->route('dashboard');
    }
}
