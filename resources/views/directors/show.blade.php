@extends('layouts.master')

<!-- Title -->
@section('title')
        {{$director->name}}
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

<!-- Billboard -->
@extends('layouts.billboard')

<!-- Content -->
@section('content')
    <div class="container" style="direction: rtl;text-align: right;font-family: IRANSans; margin-bottom: 10px;margin-top: 10px">
        <div class="card">
            <h2 class="card-header" style="background-color: #14bf98;color: white;font-family: IRANSans; text-align: left">{{$director->name}}</h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-body">
                        <h5 class="card-title"> سن :  {{$director->age}} سال</h5>
                        <h5 class="card-title">جنسیت : {{$director->gender}}</h5>
                        <h5 class="card-title"> ملیت : {{$director->nationality}} </h5>
                        <p class="card-text text-justify">{{$director->about}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="director" class="basic-2" style="background: white">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12" style="direction: ltr;text-align: left">
                                    <div class="team-member">
                                        <div class="image-wrapper">
                                            @if(Auth::guest())
                                            @else
                                                <img class="img-fluid" src="{{asset($director->profile)}}" alt="alternative">
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
                <div class="col-lg-12" style="text-align: center">
                    <h2 style="font-family: IRANSans">فیلم ها</h2>
                </div>
            </div>
            <div class="row"  style="direction: ltr;text-align: left">
                <div class="container">
                    <div class="row">
                        @foreach($director->movies() as $movie)
                            <div class="col-md-4">

                                <div class="cards-2" style="background: white">
                                    <a href="{{route('movies.show',$movie->id)}}" style="text-decoration: none"><h5 class="card-header" style="background-color: #14bf98;color: white;font-family: IRANSans;">{{$movie->name}}</h5></a>
                                    <img class="card-img-top" src="{{asset($movie->pic)}}" alt="Card image cap">
                                    <div class="card-body" style="text-align: right;direction: rtl;background-color: #14bf98;color: white">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h5 style="color: white;font-family:IRANSans"> ژانر : {{$movie->genre}}</h5>
                                            </div>
                                            <div class="col-sm-5">
                                                <h5 style="color: white;font-family:IRANSans"><span><i class="fa fa-star" aria-hidden="true" style="color: gold"></i> {{$movie->score}}/10</span></h5>
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

