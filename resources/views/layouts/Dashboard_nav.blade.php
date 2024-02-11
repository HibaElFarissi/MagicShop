<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard -  MagicShop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="images/logob.svg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">MagicShop</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle" href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">

            {{-- Avatar:  --}}
            {{-- <img src="{{Avatar::create(Auth::user()->name)->toBase64()}}" alt="Profile" > --}}
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->username }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ auth()->user()->username }}</h6>
              {{-- <span>Web Designer</span> --}}
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a  href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li> --}}

            <li><a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="bi bi-box-arrow-right"></i>Sign Out</a>
                <form action="{{ route('logout') }}" id="logout-form" method="post">
                    @csrf
                </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      {{-- Categories --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#categories-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="categories-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('categories.index') }}">
              <i class="bi bi-circle"></i><span>All Category </span>
            </a>
          </li>
          <li>
            <a href="{{ route('categories.create') }}">
              <i class="bi bi-circle"></i><span>Create Category</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Category Nav -->

      {{-- Products --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse"  data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('products.index') }}">
              <i class="bi bi-circle"></i><span>All Products </span>
            </a>
          </li>
          <li>
            <a href="{{ route('products.create') }}">
              <i class="bi bi-circle"></i><span>Create Product</span>
            </a>
          </li>
        </ul>
      </li>



      {{-- Brands --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Brands-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Brands</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Brands-nav" class="nav-content collapse " data-bs-parent="#brands-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>All Brands </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Create Brand</span>
            </a>
          </li>
        </ul>
      </li>


      {{-- Colors --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Colors-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Colors</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Colors-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>All Colors </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Create Color</span>
            </a>
          </li>
        </ul>
      </li>



       {{-- Slider --}}

       <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('#') }}">
          <i class="bi bi-card-list"></i>
          <span>Home Slider</span>
        </a>
      </li>


      {{-- Page About --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#About-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>About Content</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="About-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('abouts.create') }}">
                    <i class="bi bi-circle"></i><span>Update Content</span>
                </a>
            </li>
            </ul>
        </li>

 
      {{-- Quotes --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Quotes-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Quotes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Quotes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>All Quotes </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Create A Quote</span>
            </a>
          </li>
        </ul>
      </li>

      {{-- Questions - Answers --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#FAQ-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>FAQ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="FAQ-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>All FAQ </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Create A FAQ</span>
            </a>
          </li>
        </ul>
      </li>

      {{-- Feedback --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Feedback-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Feedback</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Feedback-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('feedback.index') }}">
                <i class="bi bi-circle"></i><span>All Feedbacks </span>
            </a>
        </li>
        <li>
              <a href="{{ route('feedback.create') }}">
              <i class="bi bi-circle"></i><span>Create A Feedback</span>
            </a>
          </li>
        </ul>
      </li>


       {{-- Settings --}}
       {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#settings-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="settings-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="#"><i class="bi bi-circle"></i><span>FAQ</span></a>
        </li>
        </ul>
      </li> --}}


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="/register">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/login">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

    {{-- Settings --}}


  <main id="main" class="main">
    @yield('content')
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/dashboard_main.js') }}"></script>

</body>

</html>
