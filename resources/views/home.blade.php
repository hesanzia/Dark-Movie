@extends('layouts.master')

@section('title','صفحه نخست - رسانه اینترنتی دارک مووی')

@extends('layouts.billboard')

@section('content')
    <div class="container" style="margin-top: 10px;margin-bottom: 10px;font-family:'IRAN Sans','Century Gothic'">
        <div class="row">
            <div class="col-md-8">
                @foreach($movies as $movie)
                    <div class="card mb-3">
                        <a href="{{route('movies.show',$movie->id)}}" style="text-decoration: none;"><h2 class="card-header" style="background-color: #14bf98;color: white;font-family:'IRAN Sans','Century Gothic'" >{{$movie->name}}</h2></a>
                        <img class="card-img-top" src="{{asset($movie->pic)}}" alt="Card image cap">
                        <div class="card-body" style="text-align: right; direction: rtl; background-color: #14bf98;">
                            <p class="card-text" style="color: white">{{$movie->description}}</p>
                            <br>
                            <div class="row" >
                                <div class="col-sm-8">
                                    <h5 style="color: white;font-family:'IRAN Sans','Century Gothic'">کارگردان : {{$movie->director()->name}}</h5>
                                </div>
                                <div class="col-sm-3" >
                                    <h5 style="color: white;font-family:'IRAN Sans','Century Gothic'"><span><i class="fa fa-star" aria-hidden="true" style="color: gold"></i> {{$movie->score}}/10</span></h5>
                                </div>
                                <div class="col-sm-3">
                                    <h5 style="color: white;font-family:'IRAN Sans','Century Gothic'"> ژانر : {{$movie->genre}}</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($serials as $serial)
                    <div class="card">
                        <a href="{{route('serials.show',$serial->id)}}" style="text-decoration: none"><h5 class="card-header" style="background-color: #14bf98;color: white;font-family:'IRAN Sans','Century Gothic';">{{$serial->name}}</h5></a>
                        <img class="card-img-top" src="{{asset($serial->pic)}}" alt="Card image cap">
                        <div class="card-body" style="text-align: right;direction: rtl;background-color: #14bf98;color: white">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5 style="color: white;font-family:'IRAN Sans','Century Gothic'"> ژانر : {{$serial->genre}}</h5>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: white;font-family:'IRAN Sans','Century Gothic'"><span><i class="fa fa-star" aria-hidden="true" style="color: gold"></i> {{$serial->score}}/10</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
