@extends('layouts.base')

@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                </div>
            </div>
        </div>

        <div class="container custom">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single-header mb-50">
                        {{-- <h1 class="font-xxl text-brand">Our Shop</h1> --}}
                    </div>
                </div>
            </div>
        </div>


        <div class="cover">
            <form  class="flex-form" method="get" action="/search_Article">
              <label for="from">
              </label>
              <input type="search" name="search" placeholder="Search here..." value="{{isset($search)? $search : ''}}">
              <input type="submit" value="Search">
            </form>
        </div>

        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">



                        <section class="product-tabs section-padding position-relative wow fadeIn animated">
                            <div class="bg-square"></div>
                            <div class="container">
                                <div class="tab-header">

                                    {{-- <marquee  direction="right"><h2>All <span>Products</span></h2></marquee> --}}
                                    <h2 class="section-title mb-20"><span>All</span> Products</h2>
                                </div>

                                <!--End nav-tabs-->
                                <div class="tab-content wow fadeIn animated" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel"
                                        aria-labelledby="tab-one">
                                        <div class="row product-grid-4">
                                            @forelse ($products as $product)
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                                    <div class="product-cart-wrap mb-30">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="{{ route('products.show', $product) }}">
                                                                    <img class="default-img"
                                                                    src="{{ asset('images/' . json_decode($product->images)[0]) }}"  alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a href="{{ route('products.show',$product) }}" aria-label="Quick view" class="action-btn hover-up"><i
                                                                        class="fi-rs-eye"></i></a>
                                                                {{-- <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                                    href="wishlist.php"><i class="fi-rs-heart"></i></a> --}}
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
                                                                
                                                            </div>
                                                            <div
                                                                class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">{{ $product->status }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product-category">
                                                                <a href="shop.html">{{ $product->category->name }}</a>
                                                            </div>
                                                            <h2><a href="{{ route('products.show', $product) }}"> {{ $product->name }}</a>
                                                            </h2>
                                                            <div class="rating-result" title="90%">
                                                                <span>
                                                                    <span>{{ $product->sold }}%</span>
                                                                </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>${{ $product->price }} </span>
                                                                <span class="old-price">${{ $product->old_price }}</span>
                                                            </div>
                                                            <div class="product-action-1 show">
                                                                <a aria-label="Add To Cart" class="action-btn hover-up"
                                                                    href="/cart"><i
                                                                        class="fi-rs-shopping-bag-add"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @empty
                                                <h4>No Products !!</h4>
                                            @endforelse

                                        </div>
                                    </div>
                                    
                                </div>
                                <!--Widget Tags-->
                        </section>

                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                {{-- <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul> --}}
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-mg-6"></div>
                            <div class="col-lg-12 col-mg-6"></div>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">

                                @forelse ($last_categories as $last )
                                    <li><a href="{{ route('shop') }}">{{ $last->name }}</a></li>
                                @empty
                                <p>no categories yet.</
                                @endforelse

                            </ul>
                        </div>
                        <!-- Fillter By Price -->

                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="single-post clearfix">
                                @forelse ($new_products as $new )
                                <div class="image">
                                    <img  src="{{ asset('images/' . json_decode($new->images)[0]) }}"  alt="new product">
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="{{ route('products.show', $new) }}">{{ $new->name }}</a></h5>
                                    <p class="price mb-0 mt-5">${{ $new->price }}</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:90%"></div>
                                    </div>
                                </div>
                            </div>

                            @empty
                                <p>No Product found !</p>
                            @endforelse
                        </div>
                       

                        
                        {{-- <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none">
                            <img src="frontEnd/imgs/banner/banner-11.jpg" alt="">
                            <div class="banner-text">
                                <span>Women Zone</span>
                                <h4>Save 17% on <br>Office Dress</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div> --}}
                       
                    </div>
                    {{-- <div class="sidebar-widget widget_tags mb-50"> --}}
                        {{-- <div class="widget-header position-relative mb-20 pb-10"> --}}
                            <h5 class="widget-title">Popular tags </h5>
                        </div>
                        <div class="tagcloud">
                            @forelse ( $Tags as $Tag )
                                <a class=" text-black tag-cloud-link" href="{{ route('blog-details') }}">{{ $Tag->name }}</a>
                            @empty
                                <h4>no tag here !!</h4>
                            @endforelse
                        </div>
                   
                </div>
                
            </div>
        </section>
    </main>
@endsection
