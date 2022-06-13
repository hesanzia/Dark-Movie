<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="Inovatik">

    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content=""/>
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="article" />

    <title>پنل کاربری - رسانه اینترنتی دارک مووی </title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" href="{{asset('Image/Backgound/title_icon.ico')}}">
</head>
<body data-spy="scroll" data-target=".fixed-top">

<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<!--Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" style="direction: rtl;" >
    <a class="navbar-brand logo-text page-scroll" href="{{route('home')}}"><img src="{{asset('Image/Backgound/2_1.png')}}"> </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                </div>
                <!-- Collapsible content -->
                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="direction: rtl;">
        <form class="form-inline" method="get" action="{{route('search')}}" style="direction: ltr;text-align:left; margin-top: 10px ">
            <input class="form-control mr-sm-2" type="search" placeholder="در همه چیز بگردید" aria-label="Search" name="search" id="search" style="text-align: right">
            <button class="btn-solid-reg page-scroll" type="submit" style="font-family: IRANSans">جستجو کردن</button>
        </form>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('home')}}">صفحه نخست<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="" id="navbarDropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">فیلم ها</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('action')}}"><span class="item-text">اکشن</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('adventure')}}"><span
                            class="item-text">ماجراجویی</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('animation')}}"><span
                            class="item-text">انیمیشن</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('comedy')}}"><span
                            class="item-text">کمدی</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('crime')}}"><span class="item-text">جنایی</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('drama')}}"><span class="item-text">درام</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('horror')}}"><span class="item-text">ترسناک</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('mystery')}}"><span class="item-text">راز آلود</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('romance')}}"><span
                            class="item-text">عاشقانه</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href={{route('sF')}}""><span
                            class="item-text">علمی تخیلی</span></a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('serial')}}">سریال ها</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">هنرمندان</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('male')}}"><span class="item-text">بازیگر های مرد</span></a>

                    <div class="dropdown-items-divide-hr"></div>


                    <a class="dropdown-item" href="{{route('female')}}"><span class="item-text">بازیگرهای زن</span></a>

                    <div class="dropdown-items-divide-hr"></div>

                    <a class="dropdown-item" href="{{route('directors.index')}}">
                        <span class="item-text">کارگردان ها</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#footer">تماس با ما</a>
            </li>

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
        </ul>
        <span class="nav-item social-icons" style="text-align: right">
                <span class="fa-stack">
                    <a href="#">
                        <span class="hexagon" style="text-align: right"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
    </div>
</nav>

<!-- Header -->

<div id="header" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('Image/Backgound/header-background.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------->

<!-- Panel -->

<div class="col-lg-12" style="text-align: right;direction: rtl;margin-top: 50px">
    <div class="row my-2">
        <div class="col-lg-12 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active" style="text-decoration: none"><img src="{{asset('Image/Dashboard/profile.ico')}}">پروفایل</a>
                </li>
                @can('admin')
                    <li class="nav-item">
                        <a href="" data-target="#users" data-toggle="tab" class="nav-link" style="text-decoration: none"><img src="{{asset('Image/Dashboard/user.ico')}}">  کاربران </a>
                    </li>

                    <li class="nav-item">
                        <a href="" data-target="#movies" data-toggle="tab" class="nav-link" style="text-decoration: none"><img src="{{asset('Image/Dashboard/movie.ico')}}">  فیلم ها </a>
                    </li>

                    <li class="nav-item">
                        <a href="" data-target="#directors" data-toggle="tab" class="nav-link" style="text-decoration: none"><img src="{{asset('Image/Dashboard/director.ico')}}">  کارگردان ها </a>
                    </li>

                    <li class="nav-item">
                        <a href="" data-target="#channels" data-toggle="tab" class="nav-link" style="text-decoration: none"><img src="{{asset('Image/Dashboard/channel.ico')}}"> شبکه ها </a>
                    </li>

                    <li class="nav-item">
                        <a href="" data-target="#series" data-toggle="tab" class="nav-link" style="text-decoration: none"><img src="{{asset('Image/Dashboard/serial.ico')}}">  سریال ها </a>
                    </li>

                    <li class="nav-item">
                        <a href="" data-target="#artists" data-toggle="tab" class="nav-link" style="text-decoration: none"><img src="{{asset('Image/Dashboard/artist.ico')}}">  بازیگرها </a>
                    </li>

                    <li class="nav-item">
                        <a href="" data-target="#billboard" data-toggle="tab" class="nav-link" style="text-decoration: none"><img src="{{asset('Image/Dashboard/billboard.ico')}}">  بیلبورد </a>
                    </li>

                    <li class="nav-item">
                        <a href="" data-target="#links" data-toggle="tab" class="nav-link" style="text-decoration: none"><img src="{{asset('Image/Dashboard/link.ico')}}">  لینک های سریال </a>
                    </li>
                @endcan

            </ul>
            <div class="col-lg-12" style="direction: rtl;text-align: right">
            <div class="tab-content py-4" style="direction: rtl;text-align: right">

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
                        <a href="{{route('movies.create')}}"><button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px">افزودن</button></a>
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
                        <a href="{{route('directors.create')}}"><button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px">افزودن</button></a>
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
                        <a href="{{route('channels.create')}}"><button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px">افزودن</button></a>
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
                        <a href="{{route('serials.create')}}"><button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px">افزودن</button></a>
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
                        <a href="{{route('artists.create')}}"><button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px">افزودن</button></a>
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
                        <a href="{{route('billboards.create')}}"><button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px">افزودن</button></a>
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
                        <a href="{{route('links.create')}}"><button type="submit" class="btn-solid-reg page-scroll" style="margin-bottom: 5px">افزودن</button></a>
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


<!---------------------------------------------------------------------------------------------->


<!-- Footer -->
<div id="footer" class="footer"  style="direction: rtl;text-align: right">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-container about">
                    <h4>رسانه اینترنتی دارک مووی</h4>
                    <p class="white" dir="rtl" align="right" style=" font-size: 14pt ; ">تمام
                        تمامی حقوق اين وبسايت متعلق به رسانه اینترنتی دارک مووی بوده و هرگونه کپي برداری به دور از اخلاق می باشد. مدیریت دارک مووی</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-container">
                    <h4>آدرس</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li>
                            <a class="white" href=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-container">
                    <h4>درباره ما</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li>
                            <a class="white" href=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-container">
                    <h4>تماس با ما</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li>
                            <a class="white" href=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Copy Right -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2020 <a href="#">Designed by Hesan Zia</a></p>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/morphext.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
