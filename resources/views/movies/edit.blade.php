@extends('layouts.master')

<!-- Title -->
@section('title',' ویرایش فیلم - رسانه اینترنتی دارک مووی')

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
    <div class="row">
        <div class="col-lg-12 custom-form-1">
            <div class="container">
                <form method="post" action="{{ route('movies.update' ,$movie->id) }}">
                    @csrf
                    @method('put')
                    <div class="">
                        <div class="form-group">
                            <label for="name">نام فیلم</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                            @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="score">امتیاز IMDB</label>
                            <input type="text" name="score" id="score" class="form-control"/>
                            @error('score')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="director_id"> کارگردان</label>

                            <select class="custom-select" aria-label="Default select example" id="director_id" name="director_id">
                                @foreach($directors as $director)
                                    <option value="{{$director->id}}">{{$director->name}}</option>
                                @endforeach
                            </select>
                            @error('director_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="genre">ژانر</label>
                            <select class="custom-select" id="genre" name="genre">
                                <option>اکشن</option>
                                <option>ماجراجویی</option>
                                <option>انیمیشن</option>
                                <option>کمدی</option>
                                <option>جنایی</option>
                                <option>درام</option>
                                <option>ترسناک</option>
                                <option>راز آلود</option>
                                <option>عاشقانه</option>
                                <option>علمی تخیلی</option>
                            </select>
                            @error('genre')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="quality">کیفیت</label>
                            <select class="custom-select" id="quality" name="quality">
                                <option>720p WEBDL</option>
                                <option>1080p WEBDL</option>
                                <option>1080p BlueRay</option>
                                <option>1080p BlueRay</option>
                            </select>
                            @error('quality')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="year">سال ساخت</label>
                            <input type="date" name="year" id="year" class="form-control" />
                            @error('year')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">خلاصه داستان</label>
                            <input type="text" name="description" id="description" class="form-control-textarea" />
                            @error('description')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link" >لینک دانلود</label>
                            <input type="text" name="link" id="link" class="form-control" />
                            @error('link')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pic">آپلود عکس کوچک</label>
                            <input type="text" name="pic" id="pic" class="form-control"/>
                            @error('pic')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="background">آپلود عکس صفحه</label>
                            <input type="text" name="background" id="background" class="form-control"/>
                            @error('background')
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
