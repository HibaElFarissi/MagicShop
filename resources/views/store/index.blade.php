{{-- @extends('layouts.navhome') --}}
@extends('layouts.base')
@section('title', 'Products')
@section('content')
@include('sweetalert::alert')


    {{-- Slider --}}
    {{-- <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/banner-fashion.svg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="custom-carousel-content">
                        </div>
                    </div>
                </div>
                </div>


                <div class="carousel-item">
                    <img src="assets/img/banner-fashion.svg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="custom-carousel-content">
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section> --}}

    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">New promotions</h4>
                                    <h2 class="animated fw-900">Fashion Trending</h2>
                                    <h1 class="animated fw-900 text-brand">On All Products</h1>
                                    <p class="animated">Save more with coupons & up to 70% off</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="/shop"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="frontEnd/imgs/slider/slider-1.png" alt=" image de slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Hot promotions</h4>
                                    <h2 class="animated fw-900">Fashion Trending</h2>
                                    <h1 class="animated fw-900 text-brand">Great Collection</h1>
                                    <p class="animated">Save more with coupons & up to 20% off</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="/shop"> Discover Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="frontEnd/imgs/slider/slider-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>


    <br><br>
    {{-- cards of shopping --}}

    <section class="featured section-padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="frontEnd/imgs/theme/icons/feature-1.png" alt="">
                        <h4 class="bg-1">Free Shopping</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="frontEnd/imgs/theme/icons/feature-2.png" alt="">
                        <h4 class="bg-3">Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="frontEnd/imgs/theme/icons/feature-3.png" alt="">
                        <h4 class="bg-2">Save Money</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="frontEnd/imgs/theme/icons/feature-4.png" alt="">
                        <h4 class="bg-4">Promotions</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="frontEnd/imgs/theme/icons/feature-5.png" alt="">
                        <h4 class="bg-5">Happy Sell</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="frontEnd/imgs/theme/icons/feature-6.png" alt="">
                        <h4 class="bg-6">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of cards --}}


    {{-- Ctegories  Card --}}
    <section class="popular-categories section-padding mt-15 mb-25">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Popular</span> Categories</h4>

                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">

                        @foreach ($categories as $category)
                            <div class="card-1">
                                <figure class=" img-hover-scale overflow-hidden">
                                    <a href="{{ route('MoreCategory') }}"><img src="storage/{{ $category->image }}" alt="Category-image"></a>
                                </figure>
                                <h5><a href="{{ route('MoreCategory') }}">{{ $category->name }}</a></h5>
                            </div>
                        @endforeach

                    </div>
                </div>
        </div>
    </section>


    {{-- cards shopping --}}

    <section class="product-tabs section-padding position-relative wow fadeIn animated">
        <div class="bg-square"></div>
        <div class="container">
            <div class="tab-header">

                {{-- <marquee  direction="right"><h2>All <span>Products</span></h2></marquee> --}}
                <h2 class="section-title "><span>All</span> Products</h2>
                <a href="{{ route('shop') }}" class="view-more d-none d-md-flex">View More
                <i class="fi-rs-angle-double-small-right"></i></a>
            </div>
            <br>

            <!--End nav-tabs-->
            <div class="tab-content wow fadeIn animated" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="storage/{{ $product->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            {{-- <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">{{ $product->status}}</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('shop') }}">Clothing</a>
                                        </div>
                                        <h2><a href="product-details.html"> {{ $product->name }}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>${{ $product->price }} </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i
                                                    class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
    </div>
</section>




    {{-- <img src="/assets/img/banner-iphone.svg" alt="Xiaomi Smartphones" class="w-full h-auto object-cover object-center rounded-lg"> --}}
    <section class="banner-2 section-padding pb-0">
        <div class="container">
            <div class="banner-img banner-big wow fadeIn animated f-none">
                <img src="frontEnd/imgs/banner/banner-4.png" alt="">
                <div class="banner-text d-md-block d-none">
                    <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                    <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                    <a href="{{ route('shop') }}" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    {{-- New arrival --}}

    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
            <marquee  class="section-title mb-20" direction="center"><h1>All The <span>New Products</span></h1></marquee>
            <br>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                    @foreach ($products as $product)
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="storage/{{ $product->image }}" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                {{-- <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a> --}}
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">{{ $product->status}}</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">{{ $product->name }}</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                    <span>-50%</span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>${{ $product->price }} </span>
                                <span class="old-price">$245.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <br><br>

    {{-- small banner --}}

    <section class="banners mb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow fadeIn animated">
                        <img src="frontEnd/imgs/banner/banner-1.png" alt="">
                        <div class="banner-text">
                            <span>Smart Offer</span>
                            <h4>Save 20% on <br>Woman Bag</h4>
                            <a href="{{ route('shop') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow fadeIn animated">
                        <img src="frontEnd/imgs/banner/banner-2.png" alt="">
                        <div class="banner-text">
                            <span>Sale off</span>
                            <h4>Great Summer <br>Collection</h4>
                            <a href="{{ route('shop') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-flex">
                    <div class="banner-img wow fadeIn animated  mb-sm-0">
                        <img src="frontEnd/imgs/banner/banner-3.png" alt="">
                        <div class="banner-text">
                            <span>New Arrivals</span>
                            <h4>Shop Today’s <br>Deals & Offers</h4>
                            <a href="{{ route('shop') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Brands --}}
    <section class="section-padding">
        <div class="container">
            <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
            <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="frontEnd/imgs/banner/brand-1.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="frontEnd/imgs/banner/brand-2.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="frontEnd/imgs/banner/brand-3.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="frontEnd/imgs/banner/brand-4.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="frontEnd/imgs/banner/brand-5.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="frontEnd/imgs/banner/brand-6.png" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="frontEnd/imgs/banner/brand-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-e180f630-013d-456d-9e9c-159256b03185" data-elfsight-app-lazy></div>

@endsection
