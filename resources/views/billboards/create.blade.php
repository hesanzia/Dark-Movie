<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="Inovatik">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content=""/>
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="article" />

    <title>افزودن به بیلبورد - رسانه اینترنتی دارک مووی</title>

    <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
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
                <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button"
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
                    <a class="dropdown-item" href="{{route('sF')}}"><span
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

            <li class="nav-item">
                @if(Auth::guest())
                    <a class="nav-link page-scroll" href="register">نام نویسی | ورود</a>
                @else
                    <a class="nav-link page-scroll" href="{{route('dashboard')}}">{{ Auth::user()->name }}</a>
                @endif
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
    <ol class="carousel-indicators">
        <li data-target="#header" data-slide-to="0" class="active"></li>
    </ol>
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

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/morphext.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/validator.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
