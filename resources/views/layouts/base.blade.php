<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Favicons -->
  <link href="{{ asset('images/logob.svg') }}" rel="icon">
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/products.css') }}" rel="stylesheet">
  <link href="{{ asset('css/categories.css') }}" rel="stylesheet">
  <link href="{{ asset('css/protfolio.css') }}" rel="stylesheet">
  {{-- for cards  shopping --}}
  <link rel="stylesheet" href="{{ asset('frontEnd/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('frontEnd/css/custom.css') }}"></head>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/slider.css">
  <!-- Vendor CSS Files -->
  {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.navhome')
    <div class="container my-5">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <strong>Errors</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
     </div>
        @endif
    </div>
       <main>
            @yield('content')
       </main>
    @include('layouts.footer')

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('/js/protfolio.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Template Main JS File -->
<!-- Vendor JS-->
<script src="frontEnd/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="frontEnd/js/vendor/jquery-3.6.0.min.js"></script>
<script src="frontEnd/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="frontEnd/js/vendor/bootstrap.bundle.min.js"></script>
<script src="frontEnd/js/plugins/slick.js"></script>
<script src="frontEnd/js/plugins/jquery.syotimer.min.js"></script>
<script src="frontEnd/js/plugins/wow.js"></script>
<script src="frontEnd/js/plugins/jquery-ui.js"></script>
<script src="frontEnd/js/plugins/perfect-scrollbar.js"></script>
<script src="frontEnd/js/plugins/magnific-popup.js"></script>
<script src="frontEnd/js/plugins/select2.min.js"></script>
<script src="frontEnd/js/plugins/waypoints.js"></script>
<script src="frontEnd/js/plugins/counterup.js"></script>
<script src="frontEnd/js/plugins/jquery.countdown.min.js"></script>
<script src="frontEnd/js/plugins/images-loaded.js"></script>
<script src="frontEnd/js/plugins/isotope.js"></script>
<script src="frontEnd/js/plugins/scrollup.js"></script>
<script src="frontEnd/js/plugins/jquery.vticker-min.js"></script>
<script src="frontEnd/js/plugins/jquery.theia.sticky.js"></script>
<script src="frontEnd/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="frontEnd/js/main.js?v=3.3"></script>
{{-- <script src="frontEnd/js/shop.js?v=3.3"></script> --}}


<!-- Template  JS -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-e180f630-013d-456d-9e9c-159256b03185" data-elfsight-app-lazy></div>

</body>
</html>
