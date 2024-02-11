
@extends('layouts.base')

@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <span></span> Categories
            </div>
        </div>
    </div>
<!-- ======= Categories Section ======= -->

        <section id="portfolio" class="portfolio sections-bg">
            <div class="mt-5 p-2 d-flex justify-content-between align-items-center">

                   {{-- <h1 class="section-title p-10">Our <span>Collection</span></h1> --}}

                {{-- <a href="{{ route('categories.create') }}" class="btn btn-secondary">Browse all collections</a> --}}
            </div>



            <br><br><br>
            <div class="container" data-aos="fade-up">
                @foreach ($categories as $category)
                <div class="row gy-4 portfolio-container">
                  <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                      <a href="/" data-gallery="portfolio-gallery-app" ><img class="card-img-top" src="storage/{{ $category->image }}" alt=""></a>
                      <div class="portfolio-info">
                        <h4>{{ $category->name }}</h4>
                      </div>
                    </div>
                  </div>
                <!-- End Category Item -->
                @endforeach
                </div>
            </div>
          </section>
        <!-- End Category Section --> -

@endsection
