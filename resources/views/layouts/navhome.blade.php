<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar | MagicShop </title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link href="images/logob.svg" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    {{-- for cards  shopping --}}
    <link rel="stylesheet" href="{{ asset('frontEnd/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/custom.css') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>


</head>

<body>


    <div class="TopRsponsive">
        <section id="topbar" class="d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                @forelse ($infos as $info)
                    <div class="contact-info d-flex align-items-center">
                        <i class="bi bi-envelope d-flex align-items-center"><a
                                href="mailto:{{ $info->email }}">{{ $info->email }}</a></i>
                        <i class="bi bi-phone d-flex align-items-center ms-4"><a
                                href="tel:{{ $info->phoneNumber }}">{{ $info->phoneNumber }}</a></i>
                    </div>
                @empty
                    <p class="text-white">There is no Data here yet...</p>
                @endforelse
            </div>


            {{-- auhentification --}}
            @guest
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right ">
                        <ul>
                            <li><a class="text-white" href="/login">Log In </a></li>
                            <li><a class="text-white" href="/register">Sign Up </a></li>
                        </ul>
                    </div>
                </div>
            @else
            @endguest

        </section>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">MagicShop<span>.</span></a></h1>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('shop') }}">Shop</a></li>


                    <li class="dropdown"><a href="/"><span>Our Collections</span><i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('product-category',$category) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('blog') }}">Blog</a></li>

                    <li><a class="nav-link scrollto" href="{{ route('contact.create') }}">Contact </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                    {{-- Guest authentification:   if condition --}}

                    <div class="respo_user">
                        @if (!auth()->check())
                        @else
                            <li class="dropdown-login">
                                <a href="{{ route('login') }}"><span>{{ auth()->user()->name }}</span> <i
                                        class="fa fa-user"></i></a>
                                <ul>
                                    <li><a href="{{ route('profile') }}"><span>Profile</span><i
                                                class="fa fa-user"></i></a>
                                    </li>

                                    <li><a href="{{ route('wishlist.index') }}"><span>WishList</span><i
                                                class="fa fa-user"></i></a>
                                    </li>

                                    <li><a href="{{ route('My_Orders') }}"><span>Orders</span><i
                                                class="fa fa-user"></i></a>
                                    </li>
                                    <li><a href="#"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout</a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </div>


                    {{-- @endguest --}}

                    {{-- Auto --}}
                    <div class="IconRespo">
                        <div class="header-action">
                            <div class="header-action-2">

                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{ route('cart.index') }}">
                                        <img alt="Surfside Media" src="{{ asset('frontEnd/imgs/addoda.png') }}">
                                        <span class="pro-count blue">
                                            {{ $totalCartCount }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart_respo">
                        <li><a class="nav-link scrollto" href="{{ route('cart.index') }}">My Cart</a></li>
                    </div>

                    {{-- Admin --}}
                    <div class="login_respo">
                        @guest
                            {{-- <div class="col-xl-3 col-lg-4">
                                <div class="header-info header-info-right ">
                                    <ul> --}}
                                        <li><a class= "nav-link scrollto " href="/login">Log In </a></li>
                                        <li><a class="nav-link scrollto " href="/register">Sign Up </a></li>
                                    {{-- </ul>
                                </div>
                            </div> --}}
                        @else
                            <li class="dropdown">
                                <a href="{{ route('login') }}"><span>{{ auth()->user()->name }}</span> <i
                                        class="fa fa-user"></i></a>
                                <ul>
                                    <li><a href="{{ route('profile') }}"><span>Profile</span><i
                                                class="fa fa-user"></i></a>
                                    </li>

                                    <li><a href="{{ route('wishlist.index') }}"><span>WishList</span><i
                                                class="fa fa-user"></i></a>
                                    </li>

                                    <li><a href="{{ route('My_Orders') }}"><span>Orders</span><i
                                                class="fa fa-user"></i></a>
                                    </li>
                                    <li><a href="#"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout</a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest

                    </div>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>


            </nav><!-- .navbar -->

        </div>
    </header>

</body>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

</html>
