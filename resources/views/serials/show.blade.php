@extends('layouts.master')

<!-- Title -->
@section('title')
    {{$serial->name}}
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
                <img class="d-block w-100" src="{{asset($serial->background)}}" alt="Second slide">
            </div>
        </div>
    </header>
@endsection

<!-- Content -->
@section('content')
    <div class="container show-page">
        <div class="card">
            <h2 class="card-header show-card-header">{{$serial->name}}</h2>
            <div class="card-body show-card-body">

                <h5 class="card-title">خلاصه داستان</h5>
                <p class="card-text">{{$serial->description}}</p>
                <a href="{{route('drama')}}"><h5 class="card-title">ژانر : {{$serial->genre}}</h5></a>
                <h5><span><i class="fa fa-star" aria-hidden="true"></i> {{$serial->score}}/10</span></h5>
                <h5 class="card-title">شبکه سازنده : {{$serial->channel()->name}}</h5>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 custom-btn">
                            <div class="row">
                                <a href="#links" class="btn-solid-reg page-scroll" data-toggle="collapse" aria-expanded="false" aria-controls="links">نمایش لینک های دانلود</a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="collapse" id="links">
                                        <div class="card card-body">
                                            <table class="table custom-table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">عنوان</th>
                                                    <th scope="col">لینک</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($serial->links() as $link)
                                                    <tr>
                                                        <td>{{$link->name}}</td>
                                                        <td><a href="{{$link->link}}">{{$link->link}}</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="basic-2 show-artist-pic">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">
                                <h5>بازیگران</h5>
                            </div>
                            <div class="col-lg-12">
                                @foreach($serial->artists as $artist)
                                    <div class="artist">
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
                            <div class="col-lg-12 comment">

                                @comments(['model' => $serial])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
