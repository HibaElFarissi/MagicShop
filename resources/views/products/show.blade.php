@extends('layouts.base')

@section('content')
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        @foreach (json_decode($product->images) as $image)
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('images/' . $image) }}" alt="product image">
                                            </figure>
                                        @endforeach
                                    </div>


                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails pl-15 pr-15">
                                        @foreach (json_decode($product->images) as $image)
                                            <div><img src="{{ asset('images/' . $image) }}" alt="product image">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End Gallery -->

                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info">
                                    <h2 class="title-detail">{{ $product->name }}</h2>
                                    <div class="product-detail-rating">
                                        <div class="pro-details-brand">
                                            <span> Brands: <a href="shop.html">{{ $product->brand->name }}</a></span>
                                        </div>
                                        <div class="product-rate-cover text-end">
                                            {{-- @foreach ($productsWithReviewCount as $item) --}}
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating"
                                                        style="width:{{ $productsWithReviewCount}}px">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (

                                                    {{$productsWithReviewCount }}

                                                    reviews)</span>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <ins><span class="text-brand">${{ $product->price }}</span></ins>
                                            <ins><span
                                                    class="old-price font-md ml-15">${{ $product->old_price }}</span></ins>
                                            <span class="save-price  font-md color3 ml-15">{{ $product->sold }}%
                                                Off</span>
                                        </div>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                    <div class="short-desc mb-30">
                                        <p>{{ $product->slug }}</p>
                                    </div>
                                    <div class="product_sort_info font-xs mb-30">
                                        <ul>

                                            <li class="mb-10"><i class="fi-rs-crown mr-5"></i>
                                                {{ $product->category->name }}</li>
                                            <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy
                                            </li>

                                        </ul>
                                    </div>


                                    <form method="POST" action="{{ route('cart.add', $product) }}">
                                        @csrf
                                         @if (!$product->colors->isEmpty())
                                        <div class="attr-detail attr-color mb-15">
                                            <strong class="mr-10">Color</strong>
                                            <ul class="list-filter color-filter">
                                                @foreach ($product->colors as $color)
                                                    <li  name="color" ><a href="#" data-color="{{ $color->name }}">
                                                            <span name="color"
                                                                style="background-color: {{ $color->code }};"></span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        @endif


                                        @if (!$product->sizes->isEmpty())
                                        <div class="attr-detail attr-size">
                                            <strong class="mr-10">Size</strong>
                                            <ul class="list-filter size-filter font-small">
                                                @foreach ($product->sizes as $size)
                                                    <li name="size" ><a href="#" name="color" >{{ $size->name }}</a></li>
                                                @endforeach
                                            </ul>

                                        </div>
                                        @endif
                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                    <div class="detail-extralink">
                                        <div class="detail-qty border radius">
                                            <select name="quantity">
                                                @for ($i = 1; $i <= $product->quantity; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>

                                        </div>
                                         <!-- Hidden input fields for color and size -->
                                         <input type="hidden" name="color" id="selected_color">
                                         <input type="hidden" name="size" id="selected_size">

                                        <div class="product-extra-link2">

                                                <button type="submit" class="button button-add-to-cart">Add to Cart</button>
                                 </form>

                                                <a aria-label="Add To Wishlist" style="display: none;" class="action-btn hover-up"
                                                >
                                                <form id="wishlistForm_{{ $product->id }}" method="POST" action="{{ route('wishlist.add', $product) }}">
                                                    @csrf
                                                    <button type="submit" style="display: none;"></button> <!-- Hide the submit button -->
                                                </form>

                                                <a href="#" onclick="event.preventDefault(); document.getElementById('wishlistForm_{{ $product->id }}').submit();">
                                                    <i class="fi-rs-heart"></i>
                                                </a>

                                                </a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        {{-- <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li> --}}
                                   @if (!$product->tags->isEmpty())
                                        <li class="mb-5">Tags:
                                            @foreach ($product->tags as $item)
                                            <a href="#" rel="tag">{{ $item->name }}</a>
                                            @endforeach
                                        </li>
                                    @endif

                                        <li>Availability:<span class="in-stock text-success ml-5">{{ $product->status }}</span></li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description">Description</a>
                                </li>

                                <li class="nav-item">
                                    {{-- @foreach ($productsWithReviewCount as $item) --}}
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab"
                                        href="#Reviews">Reviews ({{ $productsWithReviewCount}})</a>
                                    {{-- @endforeach --}}
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div class="">
                                        <p>{{ $product->slug }} </p>
                                        <ul class="product-more-infor mt-30">
                                            @if (!$product->colors->isEmpty())
                                                <li><span>Color</span>@foreach ($product->colors as $item)
                                                    {{ $item->name }},
                                                @endforeach</li>
                                            @endif

                                            @if (!$product->sizes->isEmpty())
                                                <li><span>Size</span>@foreach ($product->sizes as $item)
                                                    {{ $item->name }},
                                                @endforeach</li>
                                            @endif
                                            <li><span>Quantity</span> x{{ $product->quantity }}</li>
                                            <li><span>Sold</span>{{ $product->sold }}%</li>
                                            <li><span>Type</span>  Cash on Delivery available</li>
                                        </ul>
                                        <hr class="wp-block-separator is-style-dots">
                                        <p>{{ $product->description }} </p>
                                        <hr>


                                    </div>
                                </div>

                                <div class="tab-pane fade" id="Reviews">
                                    <!--Comments-->
                                    <div class="comments-area">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="mb-30">Customer questions & answers</h4>
                                                <div class="comment-list">
                                                   @forelse ($Reviews as $Review)
                                                   <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb text-center">

                                                            <img src="assets/imgs/page/avatar-6.jpg"
                                                                alt="">
                                                            <h6><a href="#">{{ $Review->user->name }}</a></h6>
                                                            <p class="font-xxs">{{ $Review->updated_at->format('d-m') }}</p>
                                                        </div>
                                                        <div class="desc">

                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width:{{ $Review->rating }}9px">
                                                                </div>
                                                            </div>
                                                            <p>{{ $Review->content}}
                                                            </p>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <p class="font-xs mr-30">{{ $Review->updated_at}}</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                   @empty
                                                  <h5>no  reviews yet!</h5>
                                                   @endforelse
                                                    <!--single-comment -->

                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-4">
                                                <h4 class="mb-30">Customer reviews</h4>
                                                <div class="d-flex mb-30">
                                                    <div class="product-rate d-inline-block mr-15">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6>4.8 out of 5</h6>
                                                </div>
                                                <div class="progress">
                                                    <span>5 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>4 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>3 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>2 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                                                    </div>
                                                </div>
                                                <div class="progress mb-30">
                                                    <span>1 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
                                                    </div>
                                                </div>
                                                <a href="#" class="font-xs text-muted">How are ratings
                                                    calculated?</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!--comment form-->
                                    {{-- <div class="comment-form">
                                        <h4 class="mb-15">Add a review</h4>
                                        <div class="product-rate d-inline-block mb-30">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <form class="form-contact comment_form" action="#"
                                                    id="commentForm">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                                                    placeholder="Write Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="name"
                                                                    id="name" type="text" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="email"
                                                                    id="email" type="email"
                                                                    placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="website"
                                                                    id="website" type="text"
                                                                    placeholder="Website">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="button button-contactForm">Submit
                                                            Review</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                        <ul class="categories">
                            @forelse ($categories as $item)
                                <li><a href=" {{ route('product-category',$item) }}" >{{ $item->name }}</a></li>
                            @empty
                                <p>No Category here!</p>
                            @endforelse

                        </ul>
                    </div>

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

                </div>
            </div>
        </div>

        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
        <style>
            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rate:not(:checked)>input {
                position: absolute;
                display: none;
            }

            .rate:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rated:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rate:not(:checked)>label:before {
                content: '★ ';
            }

            .rate>input:checked~label {
                color: #ffc700;
            }

            .rate:not(:checked)>label:hover,
            .rate:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rate>input:checked+label:hover,
            .rate>input:checked+label:hover~label,
            .rate>input:checked~label:hover,
            .rate>input:checked~label:hover~label,
            .rate>label:hover~input:checked~label {
                color: #c59b08;
            }

            .star-rating-complete {
                color: #c59b08;
            }

            .rating-container .form-control:hover,
            .rating-container .form-control:focus {
                background: #fff;
                border: 1px solid #ced4da;
            }

            .rating-container textarea:focus,
            .rating-container input:focus {
                color: #000;
            }

            .rated {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rated:not(:checked)>input {
                position: absolute;
                display: none;
            }

            .rated:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ffc700;
            }

            .rated:not(:checked)>label:before {
                content: '★ ';
            }

            .rated>input:checked~label {
                color: #ffc700;
            }

            .rated:not(:checked)>label:hover,
            .rated:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rated>input:checked+label:hover,
            .rated>input:checked+label:hover~label,
            .rated>input:checked~label:hover,
            .rated>input:checked~label:hover~label,
            .rated>label:hover~input:checked~label {
                color: #c59b08;
            }
        </style>
        @if (!empty($value->star_rating))
            <div class="container">
                <div class="row">
                    <div class="col mt-4">
                        <p class="font-weight-bold ">Review</p>
                        <div class="form-group row">
                            <input type="hidden" name="booking_id" value="{{ $value->id }}">
                            <div class="col">
                                <div class="rated">
                                    @for ($i = 1; $i <= $value->star_rating; $i++)
                                        {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                        <label class="star-rating-complete" title="text">{{ $i }}
                                            stars</label>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col">
                                <p>{{ $value->comments }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col mt-4">




                        <form class="py-2 px-4" action="{{ route('reviews.store') }}" method="POST"
                            style="box-shadow: 0 0 10px 0 #ddd;" autocomplete="off">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <p class="font-weight-bold ">Review</p>
                            <div class="form-group row">
                                <div class="col">
                                    <div class="rate">
                                        <input type="radio" id="star5" class="rate" name="rating"
                                            value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" checked id="star4" class="rate" name="rating"
                                            value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" class="rate" name="rating"
                                            value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" class="rate" name="rating"
                                            value="2">
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" class="rate" name="rating"
                                            value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col">
                                    <textarea class="form-control" name="content" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                                </div>
                            </div>
                            <div class="mt-3 text-right">
                                <button class="btn btn-sm py-2 px-3 btn-info">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </section>


    <!-- Vendor JS-->
    <script src="{{ asset('frontEnd/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('frontEnd/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    {{-- <script src="{{ asset('frontEnd/js/main.js?v=3.3') }}"></script> --}}
    <script src="{{ asset('frontEnd/js/shop.js?v=3.3') }}"></script>
    <script>
        // JavaScript to capture selected color
        document.querySelectorAll('.color-filter a').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var color = link.dataset.color;
                document.getElementById('selected_color').value = color;
            });
        });

        // JavaScript to capture selected size
        document.querySelectorAll('.size-filter a').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var size = link.textContent;
                document.getElementById('selected_size').value = size;
            });
        });
    </script>
@endsection
