@extends('layouts.master')

<!-- Title -->
@section('title','ویرایش کاربر - رسانه اینترنتی دارک مووی')

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
    <div class="row" style="text-align: right;direction: rtl">
        <div class="col-lg-12" style="margin-bottom: 100px;margin-top: 100px">
            <div class="container">
                <form method="post" action="{{route('users.update',$user->id)}}">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @method('put')
                    <div class="form-group">
                        <label for="roles">تغییر نقش کاربر</label>
                        <select name="roles[]" id="roles" class="custom-select" multiple="multiple">
                            @foreach($roles as $id => $role)
                                <option value="{{ $id }}"{{ in_array($id, old('roles', [])) ? ' selected' : '' }}>{{ $role }}</option>
                            @endforeach
                        </select>
                        @error('roles')
                        <p class="text-sm text-red-600" style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px"> ویرایش </button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
