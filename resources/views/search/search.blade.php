@extends('layouts.master')

@section('title','جستجو - رسانه اینترنتی دارک مووی')

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

@extends('layouts.billboard')

@section('content')
    <div class="container" style="margin-top: 10px;margin-bottom: 10px;font-family:IRANSans">
        <div class="row">
            <div class="col-md-8">
                @foreach($movies as $movie)
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
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($serials as $serial)
                    <div class="card">
                        <a href="{{route('serials.show',$serial->id)}}" style="text-decoration: none"><h5 class="card-header" style="background-color: #14bf98;color: white;font-family: IRANSans;">{{$serial->name}}</h5></a>
                        <img class="card-img-top" src="{{asset($serial->pic)}}" alt="Card image cap">
                        <div class="card-body" style="text-align: right;direction: rtl;background-color: #14bf98;color: white">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5 style="color: white;font-family:IRANSans"> ژانر : {{$serial->genre}}</h5>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: white;font-family:IRANSans"><span><i class="fa fa-star" aria-hidden="true" style="color: gold"></i> {{$serial->score}}/10</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="directors" class="basic-2" style="background-color: white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach($directors as $director)
                                <div class="team-member">
                                    <div class="image-wrapper">
                                        @if(Auth::guest())
                                        @else
                                            <a href="{{route('directors.show', $director->id)}}"><img class="img-fluid " src="{{asset($director->pic)}}" alt="alternative"></a>
                                        @endif
                                    </div>
                                    <p class="p-large">{{$director->name}}</p>
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
                </div>
            </div>

            <div id="actors" class="basic-2" style="background-color: white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach($artists as $artist)
                                <div class="team-member">
                                    <div class="image-wrapper">
                                        @if(Auth::guest())
                                        @else
                                            <a href="{{route('artists.show', $artist->id)}}"><img class="img-fluid " src="{{asset($artist->pic)}}" alt="alternative"></a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
