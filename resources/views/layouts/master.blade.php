<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="Inovatik">

    <meta property="og:site_name" content=""/>
    <meta property="og:site" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:type" content="article"/>

    <title>@yield('title')</title>

    <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext')}}"
          rel="stylesheet">
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext')}}"
        rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('favicon.ico')}}">
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
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <a class="navbar-brand logo-text page-scroll" href="{{route('home')}}"><img src="{{asset('Image/Backgound/logo v2.png')}}"></a>
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
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <form id="search-form" class="form-inline" method="get" action="{{route('search')}}">
            <input class="form-control mr-sm-2" type="search"  placeholder="???? ?????? ?????? ????????????" aria-label="Search" name="search" id="search">
            <button class="btn-solid-reg page-scroll" type="submit">?????????? ????????</button>
        </form>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('home')}}">???????? ????????<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="" id="navbarDropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">???????? ????</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('action')}}"><span class="item-text">????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('adventure')}}"><span
                            class="item-text">??????????????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('animation')}}"><span
                            class="item-text">??????????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('comedy')}}"><span
                            class="item-text">????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('crime')}}"><span class="item-text">??????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('drama')}}"><span class="item-text">????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('horror')}}"><span class="item-text">????????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('mystery')}}"><span class="item-text">?????? ????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('romance')}}"><span
                            class="item-text">??????????????</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{route('sF')}}"><span
                            class="item-text">???????? ??????????</span></a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{route('serial')}}">?????????? ????</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">????????????????</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('male')}}"><span class="item-text">???????????? ?????? ??????</span></a>

                    <div class="dropdown-items-divide-hr"></div>


                    <a class="dropdown-item" href="{{route('female')}}"><span class="item-text">?????????????????? ????</span></a>

                    <div class="dropdown-items-divide-hr"></div>

                    <a class="dropdown-item" href="{{route('directors.index')}}">
                        <span class="item-text">???????????????? ????</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#footer">???????? ???? ????</a>
            </li>

            @yield('nav-item')

            @yield('nav-item-login')
        </ul>
        <span id="social" class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#">
                        <span class="hexagon"></span>
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

@yield('background')

<!-- Content -->
@yield('content')

<!-- Footer -->
<div id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-container about">
                    <h4>?????????? ???????????????? ???????? ????????</h4>
                    <p class="white" dir="rtl" align="right">????????
                        ?????????? ???????? ?????? ???????????? ?????????? ???? ?????????? ???????????????? ???????? ???????? ???????? ?? ???????????? ?????? ???????????? ???? ?????? ???? ?????????? ???? ????????. ???????????? ???????? ????????</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-container">
                    <h4>????????</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li>
                            <a class="white" href=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-container">
                    <h4>???????????? ????</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li>
                            <a class="white" href=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-container">
                    <h4>???????? ???? ????</h4>
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
                <p class="p-small">Copyright ?? 2020 <a href="#">Designed by Hesan Zia</a></p>
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
