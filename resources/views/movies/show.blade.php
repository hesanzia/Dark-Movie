@extends('layouts.master')

<!-- Title -->
@section('title')
    {{$movie->name }}
@endsection

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

<!-- Header -->
@section('background')
    <header id="header" class="header">
        <div class="carousel-inner">
            <div class="carousel-item-active">
                <img class="d-block w-100" src="{{asset($movie->background)}}" alt="Second slide">
            </div>
        </div>
    </header>
@endsection

<!-- Content -->
@section('content')
    <div class="container" style="direction: rtl;text-align: right;font-family: IRANSans; margin-bottom: 10px;margin-top: 10px">
        <div class="card">
            <h2 class="card-header" style="background-color: #14bf98;color: white;font-family: IRANSans; text-align: left">{{$movie->name}}</h2>
            <div class="card-body">

                <h5 class="card-title">خلاصه داستان</h5>
                <p class="card-text">{{$movie->description}}</p>
                <a href="{{route('drama')}}" style="text-decoration: none"><h5 class="card-title">ژانر : {{$movie->genre}}</h5></a>
                <h5><span><i class="fa fa-star" aria-hidden="true" style="color: gold"></i> {{$movie->score}}/10</span></h5>
                <h5 class="card-title">سال ساخت : {{$movie->year}}</h5>
                <div class="col-sm-12" style="direction: ltr;text-align: left">
                    <a href="{{$movie->link}}" class="btn-solid-reg page-scroll" style="direction: ltr;text-align: left"> {{$movie->quality}} - دانلود</a>
                </div>
                <div id="artist" class="basic-2" style="background-color: white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>کارگردان</h5>
                            </div>
                            <div class="col-lg-12" style="margin-top: 25px">
                                <div class="team-member">
                                    <div class="image-wrapper">
                                        @if(Auth::guest())
                                        @else
                                            <a href="{{route('directors.show', $movie->director()->id)}}"><img class="img-fluid" src="{{asset($movie->director()->pic)}}" alt="alternative"></a>
                                        @endif
                                    </div>
                                    <p class="p-large">{{$movie->director()->name}}</p>
                                    <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 style="font-family: IRANSans">بازیگران</h5>
                            </div>
                            <div class="col-lg-12" style="margin-top: 25px">
                                @foreach($movie->artists as $artist)
                                    <div class="team-member">
                                        <div class="image-wrapper">
                                            @if(Auth::guest())
                                            @else
                                                <a href="{{route('artists.show', $artist->id)}}"><img class="img-fluid" src="{{asset($artist->pic)}}" alt="alternative"></a>
                                            @endif
                                        </div>
                                        <p class="p-large">{{$artist->name}}</p>
                                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="direction: rtl;text-align: right">

                                @comments(['model' => $movie])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




