@extends('layouts.master')

<!-- Title -->
@section('title',' کارگردان ها - رسانه اینترنتی دارک مووی')

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
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($directors as $director)
                        <div class="artist">
                            <div class="image-wrapper">
                                @if(Auth::guest())
                                @else
                                    <a href="{{route('directors.show',$director->id)}}"><img class="img-fluid " src="{{asset($director->pic)}}" alt="alternative"></a>
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
@endsection
