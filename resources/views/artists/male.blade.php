@extends('layouts.master')

<!-- Title -->
@section('title','بازیگران زن - رسانه اینترنتی دارک مووی')

<!-- Billboard -->
@extends('layouts.billboard')

<!-- Content -->
@section('content')

    <div id="artists" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($artists as $artist)
                        @if($artist->gender == 'مرد')
                            <div class="team-member">
                                <div class="image-wrapper">
                                    @if(Auth::guest())
                                    @else
                                        <a href="{{route('artists.show',$artist->id)}}"><img class="img-fluid" src="{{asset($artist->pic)}}" alt="alternative"></a>
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
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection