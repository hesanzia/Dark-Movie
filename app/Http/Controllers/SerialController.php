<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSerialRequest;
use App\Http\Requests\UpdateSerialRequest;
use App\Models\Channel;
use App\Models\Serial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SerialController extends Controller
{
    public function show(Serial $serial)
    {
        return view('serials.show', compact('serial'));
    }
    public function create()
    {
        $channels = Channel::all()->sortBy('name');
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('serials.create',compact('channels'));
    }

    public function store(StoreSerialRequest $request)
    {
        Serial::create($request->validated());

        return redirect()->route('dashboard');
    }

    public function edit(Serial $serial)
    {
        $channels = Channel::all()->sortBy('name');
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('serials.edit',compact('serial','channels'));
    }

    public function update(UpdateSerialRequest $request , Serial $serial)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $serial->update($request->validated());
        return redirect()->route('dashboard');
    }

    public function destroy(Serial $serial)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $serial->delete();
        return redirect()->route('dashboard');
    }
}
