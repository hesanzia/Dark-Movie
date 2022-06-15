@extends('layouts.master')

<!-- Title -->
@section('title','افزودن به بیلبورد - رسانه اینترنتی دارک مووی')

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
@extends('layouts.header')

<!-- Content -->
@section('content')
    <div class="row" style="direction: rtl;text-align: right">
        <div class="col-lg-12" style="margin-bottom: 100px;margin-top: 100px">
            <div class="container">
                <form method="post" action="{{ route('billboards.store') }}">
                    @csrf
                    <div class="">

                        <div class="form-group">
                            <label for="movie_id"> فیلم</label>
                            <select name="movie_id" id="movie_id" class="custom-select">
                                @foreach($movies as $movie)
                                    <option value="{{$movie->id}}">{{$movie->name}}</option>
                                @endforeach
                            </select>
                            @error('movie_id')
                            <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px"> افزودن </button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
