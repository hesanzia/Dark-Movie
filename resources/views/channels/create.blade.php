@extends('layouts.master')

<!-- Title -->
@section('title','افزودن به شبکه - رسانه اینترنتی دارک مووی')

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
                <form method="post" action="{{ route('channels.store') }}">
                    @csrf
                    <div class="">

                        <div class="form-group">
                            <label for="name">نام شبکه</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                            @error('name')
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
