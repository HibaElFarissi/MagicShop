<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar | MagicShop </title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="css/navhome.css"> --}}
    {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
    <!-- Favicons -->
    <link href="images/logob.svg" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Template Main CSS File -->
    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
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
    {{-- <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <div class="contact-info d-flex align-items-center">
                            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:magicShop@gmail.com"> MagicShop@gmail.com</a></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="{{ route('shop') }}">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            <li><i class="fi-rs-key"></i><a href="/register">Sign Up </a></li>
                            <li><a href="/login">Log In </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="TopRsponsive">
    <section id="topbar"  class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            @foreach ($infos as $info)
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:{{ $info->email }}">{{ $info->email }}</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:{{ $info->phoneNumber }}">{{ $info->phoneNumber }}</a></i>
                </div>
            @endforeach
        </div>


        {{-- auhentification --}}
        @guest
            <div class="col-xl-3 col-lg-4">
                <div class="header-info header-info-right ">
                    <ul>
                        <li><a class="text-white"  href="/login">Log In </a></li>
                        <li><a class="text-white" href="/register">Sign Up </a></li>
                    </ul>
                </div>
            </div>
        @else

        @endguest
        {{-- <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div> --}}
    </section>
</div>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">MagicShop<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a> --}}

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('shop') }}">Shop</a></li>
                    {{-- <li><a class="nav-link scrollto" href="{{ route('products.index') }}">Product</a></li> --}}
                    {{-- <li><a  href="/login">Login</a></li> --}}


                    <li class="dropdown"><a href="/"><span>Our Collections</span><i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="/">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('blog') }}">Blog</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('contact.create') }}">Contact</a></li>


                    {{-- Guest authentification:   if condition --}}

                    @if (!auth()->check())
                    @else
                        <li class="dropdown-login">
                            <a href="{{ route('login') }}"><span>{{ auth()->user()->name }}</span> <i
                                    class="fa fa-user"></i></a>
                            <ul>
                                <li><a href="{{ route('profile.edit') }}"><span>Profile</span><i
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


                {{-- @endguest --}}

                    {{-- Auto --}}
                    <div class="IconRespo">
                        <div class="header-action">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.php">
                                        <img class="svgInject" alt="Surfside Media" src="{{ asset('frontEnd/imgs/theme/icons/icon-heart.svg') }}">
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="cart.html">
                                        <img alt="Surfside Media" src="{{ asset('frontEnd/imgs/theme/icons/icon-cart.svg') }}">
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('frontEnd/imgs/shop/thumbnail-3.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('frontEnd/imgs/shop/thumbnail-2.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="/cart" class="outline">View cart</a>
                                                <a href="/checkout">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Mobile Friendly --}}

                    {{-- <div class="IconMobile">
                        <div class="header-action">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.php">
                                        <h3>Wishlist</h3>
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="cart.html">
                                        <h3 class="oo">My Cart</h3>
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('frontEnd/imgs/shop/thumbnail-3.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('frontEnd/imgs/shop/thumbnail-2.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="/cart" class="outline">View cart</a>
                                                <a href="/checkout">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>


            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    {{-- <nav class="nav">
      <i class="uil uil-bars navOpenBtn"></i>
     <a href="/"> <img  width="90px" height="90px" src="images/logob.svg" alt="" class="logo"></a>

      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('products.index') }}">Products</a></li>
        <li><a href="{{ route('categories.index') }}">All Categories</a></li>
        <li><a href="/about">About Us</a></li>

        <li><a href="/contact">Contact Us</a></li>
        <br>
        <li><a href="/login"> <i class="fa fa-user"></i> Log In</a></li>
        <li><a href="/register">Register</a></li>
      </ul>


      <i class="uil uil-search search-icon" id="searchIcon"></i>
      <div class="search-box">
        <i class="uil uil-search search-icon"></i>
        <input type="text" placeholder="Search here..." />
      </div>
    </nav> --}}
</body>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

</html>
