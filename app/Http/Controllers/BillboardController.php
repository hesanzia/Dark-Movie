<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBillboardRequest;
use App\Http\Requests\UpdateBillboardRequest;
use App\Models\Billboard;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class BillboardController extends Controller
{

    public function create()
    {
        $movies = Movie::all()->sortBy('name');
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('billboards.create',compact('movies'));
    }

    public function store(StoreBillboardRequest $request)
    {
        Billboard::create($request->validated());

        return redirect()->route('dashboard');
    }

    public function edit(Billboard $billboard)
    {
        $movies = Movie::all()->sortBy('name');
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('billboards.edit',compact('billboard','movies'));
    }

    public function update(UpdateBillboardRequest $request , Billboard $billboard)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $billboard->update($request->validated());
        return redirect()->route('dashboard');
    }

    public function destroy(Billboard $billboard)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $billboard->delete();
        return redirect()->route('dashboard');
    }
}
