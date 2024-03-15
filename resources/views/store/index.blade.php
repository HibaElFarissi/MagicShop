{{-- @extends('layouts.navhome') --}}
@extends('layouts.base')
@section('title', 'Products')
@section('content')
@include('sweetalert::alert')


{{-- search --}}

<div class="cover">
    <form  class="flex-form" method="get" action="/search_Home">
      <label for="from">
      </label>
      <input type="search" name="search" placeholder="Search here..." value="{{isset($search)? $search : ''}}">
      <input type="submit" value="Search">
    </form>
</div>

    {{-- Slide --}}
        <div class="intro-section pt-3 pb-3 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio mb-2 mb-lg-0">
                            <div class="intro-slider owl-carousel owl-simple owl-dark owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "responsive": {
                                        "768": {
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>
                            @forelse ($slides as $slide)
                                    @foreach(json_decode($slide->images) as $image)
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{ asset('images/' . $image) }}">
                                            <img src="{{ asset('images/' . $image) }}" alt="Slide_image">
                                    </figure>
                                </div>
                                @endforeach
                            @empty
                                <h3 class="text-center">No Image Here!</h3>
                            @endforelse
                            </div>
                            <span class="slider-loader"></span>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="intro-banners">
                            @forelse ($banners as $banner)
                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="">
                                    <img src="storage/{{ $banner->image1 }}" alt="Banner-image">
                                    {{-- <img src="slide/images/demos/demo-3/banners/banner-1.jpg" alt="Banner"> --}}
                                </a>
                            </div>

                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="">
                                    <img src="storage/{{ $banner->image2 }}" alt="Banner-image">
                                    {{-- <img src="slide/images/demos/demo-3/banners/banner-2.jpg" alt="Banner"> --}}
                                </a>
                            </div>

                            <div class="banner mb-0">
                                <a href="">
                                    <img src="storage/{{ $banner->image3 }}" alt="Banner-image">
                                    {{-- <img src="slide/images/demos/demo-3/banners/banner-3.jpg" alt="Banner"> --}}
                                </a>
                            </div>
                        </div>
                        @empty
                            <p>There is no Banner here !!</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>


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

                        @forelse($categories as $category)
                            <div class="card-1">
                                <figure class=" img-hover-scale overflow-hidden">
                                    <a href="{{ route('MoreCategory') }}"><img src="storage/{{ $category->image }}" alt="Category-image"></a>
                                </figure>
                                <h5><a href="{{ route('MoreCategory') }}">{{ $category->name }}</a></h5>
                            </div>
                        @empty
                        <h3>There is no Category here !!</h3>
                        @endforelse
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
                        @forelse ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('products.show',$product) }}">
                                                <img class="default-img" src="{{ asset('images/' . json_decode($product->images)[0]) }}"  alt="product_image">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a href="{{ route('products.show',$product) }}" aria-label="Quick view" class="action-btn hover-up" >
                                                <i class="fi-rs-eye"></i></a>
                                            {{-- <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="/checkout"><i class="fi-rs-heart"></i></a> --}}
                                                <a aria-label="Add To Wishlist" style="display: none;" 
                                                > <i class="fi-rs-heart"></i>
                                                <form id="wishlistForm_{{ $product->id }}" method="POST" action="{{ route('wishlist.add', $product) }}">
                                                    @csrf
                                                    <button type="submit" style="display: none;"></button> <!-- Hide the submit button -->
                                                </form>
                                                
                                                <a href="#" aria-label="Add To WishList" onclick="event.preventDefault(); document.getElementById('wishlistForm_{{ $product->id }}').submit();" class="action-btn hover-up" >
                                                    <i class="fi-rs-heart"></i>
                                                </a>
                                                
                                                </a>
                                            {{-- <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">{{ $product->status}}</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('shop') }}">{{  $product->category->name }}</a>
                                        </div>
                                        <h2><a href="{{ route('products.show',$product) }}"> {{ $product->name }}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>{{ $product->sold }} %</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>${{ $product->price }} </span>
                                            <span class="old-price">{{  $product->old_price }}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i
                                                    class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @empty
                        <h3>There is no Product here !!</h3>
                        @endforelse
                </div>
            </div>
    </div>
</section>




    {{-- <img src="/assets/img/banner-iphone.svg" alt="Xiaomi Smartphones" class="w-full h-auto object-cover object-center rounded-lg"> --}}
    <section class="banner-2 section-padding pb-0">
        <div class="container">
            @forelse ($banners as $banner)
            <div class="banner-img banner-big wow fadeIn animated f-none">
                {{-- <img src="frontEnd/imgs/banner/banner-4.png" alt=""> --}}
                <img src="storage/{{ $banner->image4 }}" alt="Banner-image">
                <div class="banner-text d-md-block d-none">
                    <h4 class="mb-15 mt-40 text-brand">{{ $banner->Title1 }}</h4>
                    <h1 class="fw-600 mb-20">{{ $banner->Slug1 }}</h1>
                    <a href="{{ route('shop') }}" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                </div>
            </div>
            @empty
            <h3>There is no Banner here !!</h3>
            @endforelse
        </div>
    </section>

    <br><br>
    {{-- New arrival --}}

    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>New</span>Arrivals</h3>
            <marquee  class="section-title mb-20" direction="center"><h1>All The <span>New Products</span></h1></marquee>
            <br>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                    @forelse ($products as $product)
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{ route('products.show',$product) }}">
                                    <img class="default-img" src="{{ asset('images/' . json_decode($product->images)[0]) }}" alt="image_products">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a href="{{ route('products.show',$product) }}" aria-label="Quick view"  class="action-btn small hover-up">
                                    <i class="fi-rs-eye"></i>
                                </a>

                               
                                
                                
                                    
                                {{-- <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a> --}}
                                    <a aria-label="Add To Wishlist" style="display: none;" 
                                    > <i class="fi-rs-heart"></i>
                                    <form id="wishlistForm_{{ $product->id }}" method="POST" action="{{ route('wishlist.add', $product) }}">
                                        @csrf
                                        <button type="submit" style="display: none;"></button> <!-- Hide the submit button -->
                                    </form>
                                    
                                    <a href="#" aria-label="Add To WishList" onclick="event.preventDefault(); document.getElementById('wishlistForm_{{ $product->id }}').submit();" class="action-btn hover-up" >
                                        <i class="fi-rs-heart"></i>
                                    </a>
                                    
                                    </a>
                                {{-- <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a> --}}
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">{{ $product->status}}</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="{{ route('products.show',$product) }}">{{ $product->name }}</a></h2>
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
                    @empty
                    <h3>There is no product here !!</h3>
                    @endforelse
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
                    @forelse ($banners as $banner)
                    <div class="banner-img wow fadeIn animated">
                        {{-- <img src="frontEnd/imgs/banner/banner-1.png" alt=""> --}}
                        <img src="storage/{{ $banner->image5 }}" alt="Banner-image">
                        <div class="banner-text">
                            <span>{{ $banner->Title2 }}</span>
                            <h4>{{ $banner->Slug2 }}</h4>
                            <a href="{{ route('shop') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow fadeIn animated">
                        {{-- <img src="frontEnd/imgs/banner/banner-2.png" alt=""> --}}
                        <img src="storage/{{ $banner->image6 }}" alt="Banner-image">
                        <div class="banner-text">
                            <span>{{ $banner->Title3 }}</span>
                            <h4>{{ $banner->Slug3 }}</h4>
                            <a href="{{ route('shop') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-flex">
                    <div class="banner-img wow fadeIn animated  mb-sm-0">
                        {{-- <img src="frontEnd/imgs/banner/banner-3.png" alt=""> --}}
                        <img src="storage/{{ $banner->image7 }}" alt="Banner-image">
                        <div class="banner-text">
                            <span>{{ $banner->Title4 }}</span>
                            <h4>{{ $banner->Slug4 }}</h4>
                            <a href="{{ route('shop') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h3>There is no banner here !!</h3>
        @endforelse
    </section>

    {{-- Brands --}}
    <section class="section-padding">
        <div class="container">
            <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
            <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                <div class="carausel-6-columns text-center" id="carausel-6-columns-3">

                    @forelse ($brands as $brand)
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('storage/'. $brand->image) }}" alt="brand-image">
                        </div>
                    @empty
                    <h3>There is no brand here !</h3>
                    @endforelse

                </div>
            </div>
        </div>
    </section>



    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-e180f630-013d-456d-9e9c-159256b03185" data-elfsight-app-lazy></div>

    <script>
        $(document).ready(function(){
            $('#carouselExampleControls').carousel();
        });
    </script>

@endsection
