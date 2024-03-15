<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

   <div class="sidebar-area" id="sidebar-area">
        <div class="logo position-relative">
            <a href="/" class="d-block text-decoration-none">
             <span class="logo-text fw-bold text-dark">PROFILE</span>
            </a>
            <button
                class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
                id="sidebar-burger-menu">
                <i data-feather="x"></i>
            </button>
        </div>
        <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
            <ul class="menu-inner">
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">Settings & Others</span>
                </li>
                
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="settings" class="menu-icon tf-icons"></i>
                        <span class="title">Profile</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('profile')}}" class="menu-link">
                                Profile
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('profile.edit')}}" class="menu-link">
                                Profile Information
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('update_password')}}" class="menu-link">
                                Security
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('My_Orders')}}" class="menu-link">
                                My Orders
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('wishlist.index')}}" class="menu-link">
                                Wish List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('delete_user')}}" class="menu-link">
                                delete
                            </a>
                        </li>
                       
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="bg-white z-1 admin">
            <div class="d-flex align-items-center admin-info border-top">
                <div class="flex-shrink-0">
                    <a href="profile" class="d-block">
                        <img src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}" class="rounded-circle wh-54" alt="admin">
                    </a>
                </div>
                <div class="flex-grow-1 ms-3 info">
                    <a href="profile" class="d-block name"> {{ auth()->user()->name }}</a>
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out
                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                            @csrf 
                        </form>
                    </a>
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
                            <ul class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                               
                                <li class="header-right-item">
                                    <div class="dropdown notifications ">
                                        <a href="/">
                                        <button class="btn btn-secondary border-0 p-0 position-relative "
                                            type="button">
                                            <i data-feather="home"></i>
                                        </button>
                                    </a>
                                    </div>
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
                                                <img class="rounded-circle wh-54" src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}"
                                                    alt="admin">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-none d-xxl-block">
                                                        <span class="degeneration">Admin</span>
                                                        <div class="d-flex align-content-center">
                                                            <h3> {{ auth()->user()->name }}</h3>
                                                            <div class="down">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <!-- Profile dropdown -->
                                        <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="{{route('profile')}}">
                                                    <i data-feather="user"></i>
                                                    <span class="ms-2">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body"
                                                    href="{{route('profile.edit')}}">
                                                    <i data-feather="settings"></i>
                                                    <span class="ms-2">Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"  class="dropdown-item d-flex align-items-center text-body"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i data-feather="log-out"></i>
                                                    <span class="ms-2">Logout</span>
                                                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                                                        @csrf 
                                                      </form>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>



            <main id="main" class="main">
                @yield('content') 
            </main>

            <div class="flex-grow-1"></div>
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

    <footer class="footer-area bg-white text-center rounded-top-10">
        <p class="fs-14">© <span class="text-primary">Portfolio</span> is Proudly Owned by <a
                href="" target="_blank" class="text-decoration-none">TSM.OSM</a></p>
    </footer>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('Backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Backend/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('Backend/js/dragdrop.js') }}"></script>
    <script src="{{ asset('Backend/js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('Backend/js/sweetalert.js') }}"></script>
    <script src="{{ asset('Backend/js/quill.min.js') }}"></script>
    <script src="{{ asset('Backend/js/data-table.js') }}"></script>
    <script src="{{ asset('Backend/js/prism.js') }}"></script>
    <script src="{{ asset('Backend/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('Backend/js/feather.min.js') }}"></script>
    <script src="{{ asset('Backend/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('Backend/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Backend/js/amcharts.js') }}"></script>
    <script src="{{ asset('Backend/js/custom/ecommerce-chart.js') }}"></script>
    <script src="{{ asset('Backend/js/custom/custom.js') }}"></script>
</body>



</html>
