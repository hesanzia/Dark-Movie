@extends('layouts.master')

<!-- Title -->
@section('title','افزودن بازیگر - رسانه اینترنتی دارک مووی')

<!-- Header -->
@extends('layouts.header')

<!-- Content -->
@section('content')
    <div class="row">
        <div class="col-lg-12" style="margin-bottom: 100px;margin-top: 100px;direction: rtl;text-align: right">
            <div class="container">
                <form method="post" action="{{route('artists.store')}}">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name">نام بازیگر</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                        <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="age">سن</label>
                        <input type="text" class="form-control" id="age" name="age">
                        @error('age')
                        <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">جنسیت</label>
                        <select class="custom-select" id="gender" name="gender">
                            <option>مرد</option>
                            <option>زن</option>
                        </select>
                        @error('gender')
                        <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nationality">ملیت</label>
                        <input type="text" class="form-control" id="nationality" name="nationality">
                        @error('nationality')
                        <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pic">آپلود عکس بازیگر</label>
                        <input type="text" class="form-control" id="pic" name="pic">
                        @error('pic')
                        <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="profile">آپلود عکس پروفایل</label>
                        <input type="text" class="form-control" id="profile" name="profile">
                        @error('profile')
                        <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="about">درباره</label>
                        <input type="text" name="about" id="about" class="form-control-textarea" />
                        @error('about')
                        <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px"> افزودن </button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
