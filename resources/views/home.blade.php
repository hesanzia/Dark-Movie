@extends('layouts.master')

@section('title','صفحه نخست - رسانه اینترنتی دارک مووی')

@extends('layouts.billboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach($movies as $movie)
                    <div class="card mb-3 show-movie">
                        <a href="{{route('movies.show',$movie->id)}}"><h2 class="card-header">{{$movie->name}}</h2></a>
                        <img class="card-img-top" src="{{asset($movie->pic)}}" alt="Card image cap">
                        <div class="card-body card-body-movie">
                            <p class="card-text">{{$movie->description}}</p>
                            <br>
                            <div class="row" >
                                <div class="col-sm-8">
                                    <h5>کارگردان : {{$movie->director()->name}}</h5>
                                </div>
                                <div class="col-sm-3" >
                                    <h5><span><i class="fa fa-star" aria-hidden="true"></i> {{$movie->score}}/10</span></h5>
                                </div>
                                <div class="col-sm-3">
                                    <h5> ژانر : {{$movie->genre}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
                @foreach($serials as $serial)
                    <div id="show-serial" class="card">
                        <a href="{{route('serials.show',$serial->id)}}"><h5 class="card-header">{{$serial->name}}</h5></a>
                        <img class="card-img-top" src="{{asset($serial->pic)}}" alt="Card image cap">
                        <div id="card-serial" class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5> ژانر : {{$serial->genre}}</h5>
                                </div>
                                <div class="col-sm-5">
                                    <h5><span><i class="fa fa-star" aria-hidden="true"></i> {{$serial->score}}/10</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
