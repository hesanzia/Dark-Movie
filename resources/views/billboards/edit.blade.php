@extends('layouts.master')

<!-- Title -->
@section('title','ویرایش بیلبورد - رسانه اینترنتی دارک مووی')

<!-- Header -->
@extends('layouts.header')

<!-- Content -->
@section('content')
    <div class="row" style="direction: rtl;text-align: right">
        <div class="col-lg-12" style="margin-bottom: 100px;margin-top: 100px">
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
                            <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px"> ویرایش </button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
