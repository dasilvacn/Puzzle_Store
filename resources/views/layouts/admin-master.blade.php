

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Paneli</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset("adminPanel/img/favicon.ico")}}>
    <!-- Google Fonts
============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/bootstrap.min.css")}}>
    <!-- Bootstrap CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/font-awesome.min.css")}}>
    <!-- nalika Icon CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/nalika-icon.css")}}>
    <!-- owl.carousel CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/owl.carousel.css")}}>
    <link rel="stylesheet" href={{asset("adminPanel/css/owl.theme.css")}}>
    <link rel="stylesheet" href={{asset("adminPanel/css/owl.transitions.css")}}>
    <!-- animate CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/animate.css")}}>
    <!-- normalize CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/normalize.css")}}>
    <!-- meanmenu icon CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/meanmenu.min.css")}}>
    <!-- main CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/main.css")}}>
    <!-- morrisjs CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/morrisjs/morris.css")}}>
    <!-- mCustomScrollbar CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/scrollbar/jquery.mCustomScrollbar.min.css")}}>
    <!-- metisMenu CSS
============================================ -->
    <link rel="stylesheet" href={{"adminPanel/css/metisMenu/metisMenu.min.css"}}>
    <link rel="stylesheet" href={{asset("adminPanel/css/metisMenu/metisMenu-vertical.css")}}>
    <!-- calendar CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/calendar/fullcalendar.min.css")}}>
    <link rel="stylesheet" href={{asset("adminPanel/css/calendar/fullcalendar.print.min.css")}}>
    <!-- style CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/style.css")}}>
    <!-- responsive CSS
============================================ -->
    <link rel="stylesheet" href={{asset("adminPanel/css/responsive.css")}}>
    <!-- modernizr JS
============================================ -->
    <script src={{asset("adminPanel/js/vendor/modernizr-2.8.3.min.js")}}></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{ url('admin') }}"><img class="main-logo" src={{asset("adminPanel/img/logo/logo.png")}} alt="" /></a>
            <strong><img src={{asset("adminPanel/img/logo/logosn.png")}} alt="" /></strong>
        </div>
        <div class="nalika-profile"></div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="../yonetimPaneli/admins.blade.php">
                            <i class="icon nalika-home icon-wrap"></i>
                            <span class="mini-click-non">Yönetim Paneli</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a href="{{ url('admins') }}">Yöneticiler</a></li>
                            <li><a href="{{ url('users') }}">Üyeler</a></li>
                            <li><a href="{{ url('category') }}">Kategori Yönetimi</a></li>
                            <li><a href="{{ url('productsList') }}">Ürünler</a></li>
                            <li><a href="{{ url('orders') }}">Siparişler</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href={{asset("adminPanel/mailbox.html")}} aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="adminPanel/mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                            <li><a title="View Mail" href="adminPanel/mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                            <li><a title="Compose Mail" href="adminPanel/mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="adminPanel/login.html"><span class="mini-sub-pro">Login</span></a></li>
                            <li><a title="Register" href="adminPanel/register.html"><span class="mini-sub-pro">Register</span></a></li>
                            <li><a title="Lock" href="adminPanel/lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                            <li><a title="Password Recovery" href="adminPanel/password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="{{ url('admin') }}"><img class="main-logo" src={{asset("adminPanel/img/logo/logo.png")}} alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="icon nalika-menu-task"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n hd-search-rp">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src={{asset("adminPanel/img/contact/1.jpg")}} alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src={{asset("adminPanel/img/contact/4.jpg")}} alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src={{asset("adminPanel/img/contact/3.jpg")}} alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src={{asset("adminPanel/img/contact/2.jpg")}} alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="#">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-folder" aria-hidden="true"></i>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>


                                            <li class="navbar-nav ml-auto">
                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>
                                    </li>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


                                            <!-- MAIN CONTENT-->
                                            <div class="main-content">
                                            @yield('content') <!-- Ana İçerik gelecek -->
                                            </div>

<!-- jquery
    ============================================ -->
<script src="{{asset('adminPanel/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('adminPanel/js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('adminPanel/js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('adminPanel/js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('adminPanel/js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('adminPanel/js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{asset('adminPanel/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('adminPanel/js/jquery.scrollUp.min.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('adminPanel/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('adminPanel/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{asset('adminPanel/js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('adminPanel/js/metisMenu/metisMenu-active.js')}}"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{asset('adminPanel/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('adminPanel/js/sparkline/jquery.charts-sparkline.js')}}"></script>
<!-- calendar JS
    ============================================ -->
<script src="{{asset('adminPanel/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('adminPanel/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('adminPanel/js/flot/jquery.flot.js')}}"></script>
<!-- float JS
    ============================================ -->
<script src="{{asset('adminPanel/js/flot/jquery.flot.js')}}"></script>
<script src="{{asset('adminPanel/js/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('adminPanel/js/flot/curvedLines.js')}}"></script>
<script src="{{asset('adminPanel/js/flot/flot-active.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('adminPanel/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('adminPanel/js/main.js')}}"></script>
</body>

</html>
