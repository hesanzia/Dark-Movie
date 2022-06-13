<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChannelRequest;
use App\Models\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ChannelController extends Controller
{

    public function create()
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('channels.create');
    }

    public function store(StoreChannelRequest $request)
    {
        Channel::create($request->validated());

        return redirect()->route('dashboard');
    }

    public function destroy(Channel $channel)
    {
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $channel->delete();
        return redirect()->route('dashboard');
    }
}
