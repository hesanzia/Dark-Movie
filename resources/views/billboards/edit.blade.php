@extends('layouts.master')

<!-- Title -->
@section('title','ویرایش بیلبورد - رسانه اینترنتی دارک مووی')

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
    <div class="row" >
        <div class="col-lg-12 custom-form-1">
            <div class="container">
                <form method="post" action="{{ route('billboards.update' ,$billboard->id) }}">
                    @csrf
                    <div class="">
                        @method('put')
                        <div class="form-group">
                            <label for="movie_id"> فیلم</label>
                            <select name="movie_id" id="movie_id" class="custom-select">
                                @foreach($movies as $movie)
                                    <option value="{{$movie->id}}">{{$movie->name}}</option>
                                @endforeach
                            </select>
                            @error('movie_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn-solid-reg page-scroll"> ویرایش </button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
