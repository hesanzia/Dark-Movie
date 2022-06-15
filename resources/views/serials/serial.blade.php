@extends('layouts.master')

<!-- Title -->
@section('title',' سریال ها - رسانه اینترنتی دارک مووی')

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
    <div class="container" style="margin-top: 10px;margin-bottom: 10px;font-family:IRANSans">
        <div class="row">
            @foreach($serials as $serial)
                <div class="col-lg-12">
                    <div class="card mb-3  show-movie">
                        <a href="{{route('serials.show',$serial->id)}}" ><h2 class="card-header">{{$serial->name}}</h2></a>
                        <img class="card-img-top" src="{{asset($serial->pic)}}" alt="Card image cap">
                        <div class="card-body card-body-movie">
                            <p class="card-text" >{{$serial->description}}</p>
                            <br>
                            <div class="row" >
                                <div class="col-sm-8">
                                    <h5 >پخش از شبکه : {{$serial->channel()->name}}</h5>
                                </div>
                                <div class="col-sm-3" >
                                    <h5 ><span><i class="fa fa-star" aria-hidden="true"></i> {{$serial->score}}/10</span></h5>
                                </div>
                                <div class="col-sm-3">
                                    <h5> ژانر : {{$serial->genre}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection






