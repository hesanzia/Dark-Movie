<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use App\Models\Serial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class LinkController extends Controller
{

    public function create()
    {
        $serials = Serial::all()->sortBy('name');
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('links.create',compact('serials'));
    }

    public function store(StoreLinkRequest $request)
    {
        Link::create($request->validated());

        return redirect()->route('dashboard');
    }


    public function edit(Link $link)
    {
        $serials = Serial::all()->sortBy('name');
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('links.edit',compact('link','serials'));
    }

    public function update(UpdateLinkRequest $request, Link $link)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $link->update($request->validated());
        return redirect()->route('dashboard');
    }

    public function destroy(Link $link)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $link->delete();
        return redirect()->route('dashboard');
    }
}
