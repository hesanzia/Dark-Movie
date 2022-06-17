@extends('layouts.master')

<!-- Title -->
@section('title','بازیگران زن - رسانه اینترنتی دارک مووی')

<!-- Login -->
@section('nav-item-login')
    <li class="nav-item">
        @if(Auth::guest())
            <a class="nav-link page-scroll" href="register">نام نویسی | ورود</a>
        @else
            <a class="nav-link page-scroll" href="{{route('dashboard')}}">{{ Auth::user()->name }}</a>
        @endif
    </li>
@endsection

<!-- Billboard -->
@extends('layouts.billboard')

<!-- Content -->
@section('content')
    <div class="container show-artist">
        <div class="card">
            <h2 class="card-header show-card-header">{{$artist->name}}</h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-body">
                        <h5 class="card-title"> سن :  {{$artist->age}} سال</h5>
                        <h5 class="card-title">جنسیت : {{$artist->gender}}</h5>
                        <h5 class="card-title"> ملیت : {{$artist->nationality}} </h5>
                        <p class="card-text text-justify">{{$artist->about}}</p>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="basic-2 show-artist-pic">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="artist">
                                        <div class="image-wrapper">
                                            @if(Auth::guest())
                                            @else
                                                <img class="img-fluid" src="{{asset($artist->profile)}}" alt="alternative">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 custom-title">
                    <h2>فیلم ها</h2>
                </div>
            </div>

            <div class="row custom-row">
                <div class="container">
                    <div class="row">
                        @foreach($artist->movies as $movie)
                            <div class="col-md-4 show-content">
                                <div class="cards-2">
                                    <a href="{{route('movies.show',$movie->id)}}"><h5 class="card-header">{{$movie->name}}</h5></a>
                                    <img class="card-img-top" src="{{asset($movie->pic)}}" alt="Card image cap">
                                    <div class="card-body show-content-body">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h5> ژانر : {{$movie->genre}}</h5>
                                            </div>
                                            <div class="col-sm-5">
                                                <h5><span><i class="fa fa-star" aria-hidden="true"></i> {{$movie->score}}/10</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 custom-title">
                    <h2>سریال ها</h2>
                </div>
            </div>

            <div class="row custom-row">
                <div class="container">
                    <div class="row">
                        @foreach($artist->serials as $serial)
                            <div class="col-md-4 show-content">
                                <div class="cards-2" >
                                    <a href="{{route('serials.show',$serial->id)}}"><h5 class="card-header">{{$serial->name}}</h5></a>
                                    <img class="card-img-top" src="{{asset($serial->pic)}}" alt="Card image cap">
                                    <div class="card-body show-content-body">
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
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

