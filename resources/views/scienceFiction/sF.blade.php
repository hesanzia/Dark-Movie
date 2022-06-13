@extends('layouts.master')

@section('title','علمی تخیلی - رسانه اینترنتی دارک مووی')

<!-- Billboard -->
@extends('layouts.billboard')

@section('content')
    <div class="container" style="margin-top: 10px;margin-bottom: 10px;font-family:IRANSans">
        <div class="row">
            @foreach($movies as $movie)
                @if($movie->genre == 'علمی تخیلی')
                    <div class="col-lg-12">
                        <div class="card mb-3">
                            <a href="{{route('movies.show',$movie->id)}}" style="text-decoration: none;"><h2 class="card-header" style="background-color: #14bf98;color: white;font-family:IRANSans" >{{$movie->name}}</h2></a>
                            <img class="card-img-top" src="{{asset($movie->pic)}}" alt="Card image cap">
                            <div class="card-body" style="text-align: right; direction: rtl; background-color: #14bf98;">
                                <p class="card-text" style="color: white">{{$movie->description}}</p>
                                <br>
                                <div class="row" >
                                    <div class="col-sm-8">
                                        <h5 style="color: white;font-family:IRANSans">کارگردان : {{$movie->director()->name}}</h5>
                                    </div>
                                    <div class="col-sm-3" >
                                        <h5 style="color: white;font-family:IRANSans"><span><i class="fa fa-star" aria-hidden="true" style="color: gold"></i> {{$movie->score}}/10</span></h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5 style="color: white;font-family:IRANSans"> ژانر : {{$movie->genre}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
