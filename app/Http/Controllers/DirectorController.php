<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDirectorRequest;
use App\Http\Requests\UpdateDirectorRequest;
use App\Models\Billboard;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DirectorController extends Controller
{

    public function index()
    {
        $billboards = Billboard::all();
        $directors = Director::all()->sortBy('name');
        return view('directors.index',compact('directors','billboards'));
    }

    public function show(Director $director)
    {
        $billboards = Billboard::all();
        return view('directors.show', compact('director','billboards'));
    }

    public function create()
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('directors.create');
    }

    public function store(StoreDirectorRequest $request)
    {
        Director::create($request->validated());


        return redirect()->route('dashboard');
    }


    public function edit(Director $director)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('directors.edit',compact('director'));
    }

    public function update(UpdateDirectorRequest $request, Director $director)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $director->update($request->validated());
        return redirect()->route('dashboard');
    }

    public function destroy(Director $director)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $director->delete();
        return redirect()->route('dashboard');
    }
}
