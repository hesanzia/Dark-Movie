@extends('layouts.master')

<!-- Title -->
@section('title','ویرایش بازیگر - رسانه اینترنتی دارک مووی')

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
    div class="row">
    <div class="col-lg-12 custom-form-1">
        <div class="container">
            <form method="post" action="{{route('artists.update',$artist->id)}}">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @method('put')
                <div class="form-group">
                    <label for="name">نام بازیگر</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="age">سن</label>
                    <input type="text" class="form-control" id="age" name="age">
                    @error('age')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">جنسیت</label>
                    <select class="custom-select" id="gender" name="gender">
                        <option>مرد</option>
                        <option>زن</option>
                    </select>
                    @error('gender')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nationality">ملیت</label>
                    <input type="text" class="form-control" id="nationality" name="nationality">
                    @error('nationality')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pic">آپلود عکس بازیگر</label>
                    <input type="text" class="form-control" id="pic" name="pic">
                    @error('pic')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="profile">آپلود عکس پروفایل</label>
                    <input type="text" class="form-control" id="profile" name="profile">
                    @error('profile')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="about">درباره</label>
                    <input type="text" name="about" id="about" class="form-control-textarea" />
                    @error('about')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn-solid-reg page-scroll"> ویرایش </button></a>
            </form>
        </div>
    </div>
    </div>
@endsection
