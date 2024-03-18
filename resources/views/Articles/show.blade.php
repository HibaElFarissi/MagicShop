@extends('layouts.base')
@section('title', 'Article')

@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <span></span> Blog
                <span></span> blog-Details
            </div>
        </div>
    </div>

     <main class="main">

    <section class="mt-50 mb-50">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single-page pr-30">
                        <div class="single-header style-2">
                            <h1 class="mb-30">{{ $Article->title }}</h1>

                            <div class="single-header-meta">
                                <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                    <span class="post-by">By <a href="#">{{   $Article->user->name  }}</a></span>
                                    <span class="post-on has-dot">{{ $Article->created_at->format('Y-m-d') }}</span>
                                </div>

                            </div>
                        </div>
                        <figure class="single-thumbnail">
                            <img src="{{  asset('storage/'. $Article->photo ) }}"  alt="Blog_Image">

                        </figure>
                        <div class="single-content">
                            <p class="post-exerpt font-medium text-muted mb-30">{{ $Article->slug }}</p><br>
                            <p>{!! $Article->text !!}</p>


                        </div>


                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <!--Widget categories-->
                        <div class="sidebar-widget widget_categories mb-40">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Categories</h5>
                            </div>
                            <div class="post-block-list post-module-1 post-module-5">
                                <ul>
                                    @forelse ($categories as $category)
                                                <li class="cat-item cat-item-2"><a href="{{ route('product-category',$category) }}">{{ $category->name }}</a>100%</li>
                                            @empty
                                                <p>No Category found !</p>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <!--Widget latest posts style 1-->
                        <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Trending Now</h5>
                            </div>
                            <div class="row">
                                @foreach ($Post as $item)
                                    <div class="col-12 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="{{ route('Articles.show', $item) }}">
                                                <img src="{{  asset('storage/'. $item->photo ) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h4 class="post-title mb-10 text-limit-2-row">{{ $item->title }}</h4>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">Create: {{ $item->created_at->format('d-m') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- Aricles side --}}

                            </div>
                        </div>

                        <!--Widget ads-->
                        @foreach ($banners as $banner)
                        <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none animated">
                            <img src="{{ asset('storage/' . $banner->image8) }}" alt="Banner-image"> <!-- Corrected image path -->
                            <div class="banner-text">
                                <span>{{ $banner->Title5 }}</span>
                                <h4>{{ $banner->Slug5 }}</h4>
                                <a href="{{ route('shop') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
