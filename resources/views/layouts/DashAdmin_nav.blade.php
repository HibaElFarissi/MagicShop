<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('dash/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/sidebar-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/sweetalert.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/style.css') }}">

    <link href="{{ asset('images/logob.svg') }}" rel="icon">

    <title>MagicShop - Dashboard_Admin</title>
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">M</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">G</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">C</span>
                <span class="d-inline-block">S</span>
                <span class="d-inline-block">H</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">P</span>
            </div>
        </div>
    </div>


    <div class="sidebar-area" id="sidebar-area">
        <div class="logo position-relative">
            <a href="/" class="d-block text-decoration-none">
                <!-- <img src="assets/images/logo-icon.png" alt="logo-icon"> -->
                <span class="logo-text fw-bold text-dark">MagicShop</span>
                <br>
            </a>
            <button
                class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
                id="sidebar-burger-menu">
                <i data-feather="x"></i>
            </button>
        </div>
        <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
            <ul class="menu-inner">
                <li class="menu-item open">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="grid" class="menu-icon tf-icons"></i>
                        <span class="title">Dashboard</span>
                        <span class="count">7</span>
                    </a>
                </li>

                {{-- <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">APPS</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                        <span class="title">File Manager</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="file-manager.html" class="menu-link">
                                My Drive
                            </a>
                        </li>
                    </ul>
                </li> --}}



                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">PAGES</span>
                </li>


                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="shopping-cart" class="menu-icon tf-icons"></i>
                        <span class="title">eCommerce</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('products.index') }}" class="menu-link">
                                Products
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('products.create') }}" class="menu-link">
                                Create Product
                            </a>
                        </li>
                        {{-- Categories --}}
                        <li class="menu-item">
                            <a href="{{ route('categories.index') }}" class="menu-link">
                                Categories
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('categories.create') }}" class="menu-link">
                                Create Category
                            </a>
                        </li>
                     <li class="menu-item">
                        <a href="{{ route('orders.index') }}" class="menu-link">
                        Orders List
                        </a>
                    </li>

                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="layers" class="menu-icon tf-icons"></i>
                        <span class="title">Pages</span>
                    </a>
                    <ul class="menu-sub">
                        {{-- About:  --}}

                        <li class="menu-item">
                                <a href="{{ route('abouts.index') }}" class="menu-link">
                                    About Content
                                </a>
                        </li>

                        {{-- Faq:  --}}
                        <li class="menu-item">
                            <a href="{{ route('faqs.index') }}" class="menu-link">
                                FAQ
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('faqs.create') }}" class="menu-link">
                                Create FAQ
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                Blogs
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('quotes.index') }}" class="menu-link">
                                Quotes
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('quotes.create') }}" class="menu-link">
                                Create Quote
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('feedback.index') }}" class="menu-link">
                                Feedback
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('feedback.create') }}" class="menu-link">
                                Create Feedback
                            </a>
                        </li>

                    </ul>
                </li>


                {{-- Blog --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                    <i data-feather="align-justify" class="menu-icon tf-icons"></i>
                    <span class="title">Blog</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('Articles.index') }}" class="menu-link">
                        All Articles
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('Articles.create') }}" class="menu-link">
                        Create An Article
                        </a>
                    </li>
                </ul>

                {{-- Email --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="mail" class="menu-icon tf-icons"></i>
                    <span class="title">Email</span>
                </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('inbox') }}" class="menu-link">
                    Inbox
                    </a>
                </li>
            </ul>




                {{-- Slide Home --}}
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">

                    <i data-feather="align-right" class="menu-icon tf-icons"></i>
                    <span class="title">Slide Home</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('slides.index') }}" class="menu-link">
                            SlideShow
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('slides.create') }}" class="menu-link">
                        Create
                        </a>
                    </li>
                </ul>

                {{-- Banner --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="message-square" class="menu-icon tf-icons"></i>
                    <span class="title">Banners</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('banners.index') }}" class="menu-link">
                            Banner Show
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('banners.create') }}" class="menu-link">
                        Create
                        </a>
                    </li>
                </ul>


                {{-- Brands --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="message-square" class="menu-icon tf-icons"></i>
                    <span class="title">Brands</span>
                </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('Brands.index') }}" class="menu-link">
                        All Brands
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('Brands.create') }}" class="menu-link">
                    Create
                    </a>
                </li>
            </ul>


                {{-- Tags --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                    <i data-feather="anchor" class="menu-icon tf-icons"></i>
                    <span class="title">Tags</span>
                </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('Tags.index') }}" class="menu-link">
                        All Tags
                    </a>
                </li>
            </ul>


                {{-- Colors --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                    <i data-feather="aperture" class="menu-icon tf-icons"></i>
                    <span class="title">Colors</span>
                </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('Color.index') }}" class="menu-link">
                        All Colors
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('Color.create') }}" class="menu-link">
                    Create
                    </a>
                </li>
            </ul>


                {{-- Sizes --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">

                    <i data-feather="activity" class="menu-icon tf-icons"></i>
                    <span class="title">Sizes</span>
                </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('sizes.index') }}" class="menu-link">
                        All Sizes
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('sizes.create') }}" class="menu-link">
                    Create
                    </a>
                </li>
            </ul>




                    <!-- Informations -->
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text"> All Information</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle active">
        
                            <i data-feather="at-sign" class="menu-icon tf-icons"></i>
                            <span class="title">Infos</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('infos.index') }}" class="menu-link">
                                    All infos
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('infos.create') }}" class="menu-link">
                                    Create an info
                                </a>
                            </li>
                        </ul>
                    </li>

              <!-- Auth -->
              <li class="menu-title small text-uppercase">
                <span class="menu-title-text">Settings & Others</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="settings" class="menu-icon tf-icons"></i>
                    <span class="title">Settings</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('profile') }}" class="menu-link">
                            Profile
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('profile.edit') }}" class="menu-link">
                            Account
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('update_password') }}" class="menu-link">
                            Security
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('delete_user') }}" class="menu-link">
                            Delete
                        </a>
                    </li>

                </ul>
            </li>

            </ul>
        </aside>
        <div class="bg-white z-1 admin">
            <div class="d-flex align-items-center admin-info border-top">
                <div class="flex-shrink-0">
                    <a href="profile.html" class="d-block">
                        {{-- <img src="{{ asset('dash/images/admin.jpg') }}" class="rounded-circle wh-54" alt="admin"> --}}
                        @if(auth()->user()->photo === null)
                            <img src="{{ asset('BackEnd/images/userAuto.jpeg') }}" class="rounded-circle wh-54" alt="">
                        @else
                            <img src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}" class="rounded-circle wh-54" alt="admin">
                        @endif
                    </a>
                </div>
                <div class="flex-grow-1 ms-3 info">
                    <a href="#" class="d-block name">{{ auth()->user()->username }}</a>
                    <a href=""
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="main-content d-flex flex-column">

            <header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="left-header-content">
                            <ul
                                class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                                <li>
                                    <button class="header-burger-menu bg-transparent p-0 border-0"
                                        id="header-burger-menu">
                                        <i data-feather="menu"></i>
                                    </button>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-md-8">
                        <div class="right-header-content mt-2 mt-sm-0">
                            <ul
                                class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">


                                <li class="header-right-item">
                                    <div class="dropdown notifications noti">

                                        <!-- Home :  -->
                                        <a href="/">
                                            <button class="btn btn-secondary border-0 p-0 position-relative"
                                                type="button">
                                                <i data-feather="home"></i>
                                            </button>
                                        </a>
                                </li>

                                <li class="header-right-item d-none d-md-block">
                                    <div class="today-date">
                                        <span id="digitalDate"></span>
                                        <i data-feather="calendar"></i>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown admin-profile">
                                        <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor"
                                            data-bs-toggle="dropdown">
                                            <div class="flex-shrink-0">
                                                {{-- <img class="rounded-circle wh-54"
                                                    src="{{ asset('dash/images/admin.jpg') }}" alt="admin"> --}}
                                                @if(auth()->user()->photo === null)
                                                    <img src="{{ asset('BackEnd/images/userAuto.jpeg') }}" class="rounded-circle wh-54" alt="">
                                                @else
                                                    <img src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}" class="rounded-circle wh-54" alt="admin">
                                                @endif
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-none d-xxl-block">
                                                        <span class="degeneration">{{ auth()->user()->role }}</span>
                                                        <div class="d-flex align-content-center">
                                                            <h3>{{ auth()->user()->name }}</h3>
                                                            <div class="down">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="profile.html">
                                                    <i data-feather="user"></i>
                                                    <span class="ms-2">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="account.html">
                                                    <i data-feather="settings"></i>
                                                    <span class="ms-2">Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                                    class="dropdown-item d-flex align-items-center text-body">
                                                    <i data-feather="log-out"></i>
                                                    <span class="ms-2">Logout</span>
                                                </a>
                                                <form action="{{ route('logout') }}" id="logout-form"
                                                    method="post">
                                                    @csrf
                                                </form>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                @yield('content')
            </main>


            <div class="flex-grow-1"></div>
            <footer class="footer-area bg-white text-center rounded-top-10">
                <p class="fs-14"> <span class="OSM">© </span><span class="text-primary">Magic Shop</span> <span
                        class="OSM">is Proudly Owned by</span> <a href="/" target="_blank"
                        class="text-primary text-decoration-none">Hiba</a></p>
            </footer>

        </div>
    </div>



    <button class="btn btn-danger theme-settings-btn p-0 position-fixed z-2 text-center"
        style="bottom: 30px; right: 30px; width: 40px; height: 40px;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i data-feather="settings" class="wh-20 text-white position-relative" style="top: -1px; outline: none;"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">RTL / LTR</h4>
            <div class="settings-btn rtl-btn">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Light / Dark</h4>
            <button class="switch-toggle settings-btn dark-btn" id="switch-toggle">
                Click To <span class="dark">Dark</span> <span class="light">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To <span class="dark1">Dark</span> <span class="light1">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To <span class="dark2">Dark</span> <span class="light2">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To <span class="dark3">Dark</span> <span class="light3">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To <span class="square">Square</span> <span class="radius">Radius</span>
            </button>
        </div>
    </div>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('dash/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dash/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('dash/js/dragdrop.js') }}"></script>
    <script src="{{ asset('dash/js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('dash/js/sweetalert.js') }}"></script>
    <script src="{{ asset('dash/js/quill.min.js') }}"></script>
    <script src="{{ asset('dash/js/data-table.js') }}"></script>
    <script src="{{ asset('dash/js/prism.js') }}"></script>
    <script src="{{ asset('dash/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('dash/js/feather.min.js') }}"></script>
    <script src="{{ asset('dash/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('dash/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dash/js/amcharts.js') }}"></script>
    <script src="{{ asset('dash/js/custom/ecommerce-chart.js') }}"></script>
    <script src="{{ asset('dash/js/custom/custom.js') }}"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/Magic Shop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Feb 2024 15:49:17 GMT -->

</html>
