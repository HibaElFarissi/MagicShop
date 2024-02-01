{{-- @extends('layouts.navhome') --}}
@extends('layouts.base')
@section('title' , 'Products')
@section('content')
@include('sweetalert::alert')

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>MagicShop</span></h1>
      <h2>Welcome to MagicShop, where the extraordinary awaits you at every click. </h2>
      <div class="d-flex">
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="/" class="btn-get-started align-items-center  scrollto">Get Started</a>
        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
      </div>
    </div>
  </section><!-- End Hero -->


      {{-- Cards --}}
      <br><br><br>
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Last Products </h1>
        </div>

         <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($products as $product)
            <div class="col">
                <div class="card h-100">

                <img class="card-img-top" src="storage/{{ $product->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{!! $product->description !!}</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Quantity:<span class="badge bg-success">{{ $product->quantity }} </span></span>

                        <span>Price: <span class="badge bg-primary">{{ $product->price }} MAD</span></span>
                        <span><span class="badge bg-secondary">{{ $product->status }}</span></span>
                    </div>
                    <div class="my-2">
                        <hr>
                        <span>Category: <span class="badge bg-warning text-dark">{{ $product->category?->name }} </span></span>
                    </div>
                </div>
                    <div class="card-footer">
                        <small class="text-muted">{{ $product->created_at }}</small><br> <br>
                </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>


      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-e180f630-013d-456d-9e9c-159256b03185" data-elfsight-app-lazy></div>

    @endsection

