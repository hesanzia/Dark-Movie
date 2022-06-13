<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Models\Artist;
use App\Models\Billboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ArtistController extends Controller
{
    public function show(Artist $artist)
    {
        $billboards = Billboard::all();
        return view('artists.show', compact('artist','billboards'));
    }

    public function create()
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('artists.create');
    }

    public function store(StoreArtistRequest $request)
    {
        Artist::create($request->validated());

        return redirect()->route('dashboard');
    }

    public function edit(Artist $artist)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('artists.edit',compact('artist'));
    }

    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $artist->update($request->validated());
        return redirect()->route('dashboard');
    }

    public function destroy(Artist $artist)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $artist->delete();
        return redirect()->route('dashboard');
    }
}
