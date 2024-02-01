
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
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
       <!-- Template Main CSS File -->
       <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
       <!-- Vendor CSS Files -->
       {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
       <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
       <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
       <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
       <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
       <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  </head>

  <body>
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:magicShop@gmail.com">magicShop@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:0615256198">+212 615 256 198</a></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
        </div>
      </section>

      <!-- ======= Header ======= -->
      <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

          <h1 class="logo"><a href="/">MagicShop<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
           {{-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a> --}}

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="/">Home</a></li>
              <li><a class="nav-link scrollto" href="/about">About</a></li>
              {{-- <li><a class="nav-link scrollto" href="{{ route('products.index') }}">Product</a></li> --}}
              {{-- <li><a  href="/login">Login</a></li> --}}

              <li class="dropdown"><a href="/"><span>All Categories</span><i class="bi bi-chevron-down"></i></a>
                <ul>
                    @foreach ( $categories as $category )
                        <li><a href="#">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="/contact">Contact</a></li>

              {{-- Guest authentification:  --}}
        @guest
            <li>
                <a class="nav-link scrollto" href="/login">
                    Log In
                </a>
            </li>
            <li>
                <a class="nav-link scrollto" href="/register">
                    Register
                </a>
            </li>

            @else
                <li class="dropdown"><a href="{{ route('login') }}"><span>{{ auth()->user()->username }}</span> <i class="fa fa-user"></i></a>
                    <ul>
                        <li><a href="{{ route('profile.edit') }}"><span>Profile</span><i class="fa fa-user"></i></a></li>
                        <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a>
                            <form action="{{ route('logout') }}" id="logout-form" method="post">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>

        @endguest

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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</html>

