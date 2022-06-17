@extends('layouts.master')

@section('title','پنل کاربری - رسانه اینترنتی دارک مووی ')

@section('nav-item')
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                خروج از حساب کاربری
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
@endsection

@extends('layouts.header')

@section('content')
    <div class="col-lg-12 dashboard">
        <div class="row my-2">
            <div class="col-lg-12 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active"><img src="{{asset('Image/Dashboard/profile.ico')}}">پروفایل</a>
                    </li>
                    @can('admin')
                        <li class="nav-item">
                            <a href="" data-target="#users" data-toggle="tab" class="nav-link" ><img src="{{asset('Image/Dashboard/user.ico')}}">  کاربران </a>
                        </li>

                        <li class="nav-item">
                            <a href="" data-target="#movies" data-toggle="tab" class="nav-link"><img src="{{asset('Image/Dashboard/movie.ico')}}">  فیلم ها </a>
                        </li>

                        <li class="nav-item">
                            <a href="" data-target="#directors" data-toggle="tab" class="nav-link"><img src="{{asset('Image/Dashboard/director.ico')}}">  کارگردان ها </a>
                        </li>

                        <li class="nav-item">
                            <a href="" data-target="#channels" data-toggle="tab" class="nav-link"><img src="{{asset('Image/Dashboard/channel.ico')}}"> شبکه ها </a>
                        </li>

                        <li class="nav-item">
                            <a href="" data-target="#series" data-toggle="tab" class="nav-link"><img src="{{asset('Image/Dashboard/serial.ico')}}">  سریال ها </a>
                        </li>

                        <li class="nav-item">
                            <a href="" data-target="#artists" data-toggle="tab" class="nav-link"><img src="{{asset('Image/Dashboard/artist.ico')}}">  بازیگرها </a>
                        </li>

                        <li class="nav-item">
                            <a href="" data-target="#billboard" data-toggle="tab" class="nav-link" ><img src="{{asset('Image/Dashboard/billboard.ico')}}">  بیلبورد </a>
                        </li>

                        <li class="nav-item">
                            <a href="" data-target="#links" data-toggle="tab" class="nav-link"><img src="{{asset('Image/Dashboard/link.ico')}}">  لینک های سریال </a>
                        </li>
                    @endcan

                </ul>
                <div class="col-lg-12">
                    <div class="tab-content py-4">
                        <div class="tab-pane active" id="profile">
                            <h3 class="mb-3">نام کاربری : {{Auth::user()->name}}</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>آدرس ایمیل : {{Auth::user()->email}}</h4>
                                </div>
                            </div>
                            <!--/row-->
                        </div>

                        <div class="tab-pane" id="users">
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> مدیریت کاربران</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">نام کاربری</th>
                                        <th scope="col">ایمیل</th>
                                        <th scope="col">نقش</th>
                                        <th scope="col">ویرایش</th>
                                        <th scope="col">پاک کردن</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @foreach ($user->roles as $role)
                                                    {{ $role->title }}
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    <button class="btn btn-sm btn-link text-uppercase">ویرایش</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('میخواهید حذف شود؟');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-link text-danger text-uppercase" value="پاک کردن">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="movies">
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>مدیریت فیلم ها</h5>
                                <a href="{{route('movies.create')}}"><button type="submit" class="btn-solid-reg page-scroll">افزودن</button></a>
                                <table class="table table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">نام فیلم</th>
                                        <th scope="col">کارگردان</th>
                                        <th scope="col">ژانر</th>
                                        <th scope="col">سال ساخت</th>
                                        <th scope="col">امتیاز</th>
                                        <th scope="col">کیفیت</th>
                                        <th scope="col">ویرایش</th>
                                        <th scope="col">پاک کردن</th>
                                    </tr>
                                    </thead>
                                    @foreach($movies as $movie)
                                        <tbody>

                                        <tr>
                                            <td>{{$movie->id}}</td>
                                            <td>{{$movie->name}}</td>
                                            <td>{{$movie->director()->name}}</td>
                                            <td>{{$movie->genre}}</td>
                                            <td>{{$movie->year}}</td>
                                            <td>{{$movie->score}}</td>
                                            <td>{{$movie->quality}}</td>
                                            <td>
                                                <a href="{{ route('movies.edit', $movie->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    <button class="btn btn-sm btn-link text-uppercase">ویرایش</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form class="inline-block" action="{{route('movies.destroy', $movie->id) }}" method="POST" onsubmit="return confirm('میخواهید حذف شود؟');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-link text-danger text-uppercase" value="پاک کردن">
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="directors">
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> مدیریت کارگردان ها</h5>
                                <a href="{{route('directors.create')}}"><button type="submit" class="btn-solid-reg page-scroll">افزودن</button></a>
                                <table class="table table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">سن</th>
                                        <th scope="col">جنسیت</th>
                                        <th scope="col">ملیت</th>
                                        <th scope="col">ویرایش</th>
                                        <th scope="col">پاک کردن</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($directors as $director)
                                        <tr>
                                            <td>{{$director->id}}</td>
                                            <td>{{$director->name}}</td>
                                            <td>{{$director->age}}</td>
                                            <td>{{$director->gender}}</td>
                                            <td>{{$director->nationality}}</td>
                                            <td>
                                                <a href="{{ route('directors.edit', $director->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    <button class="btn btn-sm btn-link text-uppercase">ویرایش</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form class="inline-block" action="{{ route('directors.destroy', $director->id) }}" method="POST" onsubmit="return confirm('میخواهید حذف شود؟?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-link text-danger text-uppercase" value="پاک کردن">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane" id="channels">
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> مدیریت شبکه ها</h5>
                                <a href="{{route('channels.create')}}"><button type="submit" class="btn-solid-reg page-scroll">افزودن</button></a>
                                <table class="table table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">پاک کردن</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($channels as $channel)
                                        <tr>
                                            <td>{{$channel->id}}</td>
                                            <td>{{$channel->name}}</td>

                                            <td>
                                                <form class="inline-block" action="{{ route('channels.destroy', $channel->id) }}" method="POST" onsubmit="return confirm('میخواهید حذف شود؟');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-link text-danger text-uppercase" value="پاک کردن">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane" id="series">
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> مدیریت سریال ها</h5>
                                <a href="{{route('serials.create')}}"><button type="submit" class="btn-solid-reg page-scroll">افزودن</button></a>
                                <table class="table table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">نام سریال</th>
                                        <th scope="col">شبکه سازنده</th>
                                        <th scope="col">ژانر</th>
                                        <th scope="col">امتیاز</th>
                                        <th scope="col">ویرایش</th>
                                        <th scope="col">پاک کردن</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($series as $serial)
                                        <tr>
                                            <td>{{$serial->id}}</td>
                                            <td>{{$serial->name}}</td>
                                            <td>{{$serial->channel()->name}}</td>
                                            <td>{{$serial->genre}}</td>
                                            <td>{{$serial->score}}</td>
                                            <td>
                                                <a href="{{route('serials.edit',$serial->id)}}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    <button class="btn btn-sm btn-link text-uppercase">ویرایش</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form class="inline-block" action="{{ route('serials.destroy', $serial->id) }}" method="POST" onsubmit="return confirm('میخواهید حذف شود؟');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-link text-danger text-uppercase" value="پاک کردن" >
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane" id="artists">
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>مدیریت بازیگر ها</h5>
                                <a href="{{route('artists.create')}}"><button type="submit" class="btn-solid-reg page-scroll">افزودن</button></a>
                                <table class="table table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">سن</th>
                                        <th scope="col">جنسیت</th>
                                        <th scope="col">ملیت</th>
                                        <th scope="col">ویرایش</th>
                                        <th scope="col">پاک کردن</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($artists as $artist)
                                        <tr>
                                            <td>{{$artist->id}}</td>
                                            <td>{{$artist->name}}</td>
                                            <td>{{$artist->age}}</td>
                                            <td>{{$artist->gender}}</td>
                                            <td>{{$artist->nationality}}</td>
                                            <td>
                                                <a href="{{route('artists.edit',$artist->id)}}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    <button class="btn btn-sm btn-link text-uppercase">ویرایش</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form class="inline-block" action="{{ route('artists.destroy', $artist->id) }}" method="POST" onsubmit="return confirm('میخواهید حذف شود؟');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-link text-danger text-uppercase" value="پاک کردن">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="billboard">
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> مدیریت بیلبورد</h5>
                                <a href="{{route('billboards.create')}}"><button type="submit" class="btn-solid-reg page-scroll">افزودن</button></a>
                                <table class="table table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">شناسه فیلم</th>
                                        <th scope="col">ویرایش</th>
                                        <th scope="col">پاک کردن</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($billboards as $billboard)
                                        <tr>
                                            <td>{{$billboard->id}}</td>
                                            <td>{{$billboard->movie->name}}</td>
                                            <td>
                                                <a href="{{route('billboards.edit',$billboard->id)}}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    <button class="btn btn-sm btn-link text-uppercase">ویرایش</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form class="inline-block" action="{{route('billboards.destroy',$billboard->id)}}" method="POST" onsubmit="return confirm('میخواهید حذف شود؟');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-link text-danger text-uppercase" value="پاک کردن">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="links">
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> مدیریت لینک ها</h5>
                                <a href="{{route('links.create')}}"><button type="submit" class="btn-solid-reg page-scroll">افزودن</button></a>
                                <table class="table table-sm table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">عنوان لینک</th>
                                        <th scope="col">شناسه سریال</th>
                                        <th scope="col">ویرایش</th>
                                        <th scope="col">پاک کردن</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($links as $link)
                                        <tr>
                                            <td>{{$link->id}}</td>
                                            <td>{{$link->name}}</td>
                                            <td>{{$link->serial()->name}}</td>
                                            <td>
                                                <a href="{{ route('links.edit', $link->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    <button class="btn btn-sm btn-link text-uppercase">ویرایش</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form class="inline-block" action="{{ route('links.destroy', $link->id) }}" method="POST" onsubmit="return confirm('میخواهید حذف شود؟');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-link text-danger text-uppercase" value="پاک کردن">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
