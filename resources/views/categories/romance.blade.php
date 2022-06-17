@extends('layouts.master')

@section('title','عاشقانه - رسانه اینترنتی دارک مووی')

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

@section('content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                @if($movie->genre == 'عاشقانه')
                    <div class="col-lg-12">
                        <div class="card mb-3  show-content">
                            <a href="{{route('movies.show',$movie->id)}}" ><h2 class="card-header">{{$movie->name}}</h2></a>
                            <img class="card-img-top" src="{{asset($movie->pic)}}" alt="Card image cap">
                            <div class="card-body show-content-body">
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
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection