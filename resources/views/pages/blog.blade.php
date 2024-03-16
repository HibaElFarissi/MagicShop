@extends('layouts.base')
@section('title', 'Blog')

@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <span></span> blog
            </div>
        </div>
    </div>
<section class="mt-50 mb-50">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-9">
                <div class="single-header mb-50">
                    <h1 class="font-xxl text-brand">Our Blog</h1>
                    <div class="entry-meta meta-1 font-xs mt-15 mb-15">

                    </div>
                </div>
                <div class="loop-grid pr-30">
                    <div class="row">
                        <div class="col-12">
                            <article class="first-post mb-30 wow fadeIn animated hover-up">
                                <div class="img-hover-slide position-relative overflow-hidden">
                                    <span class="top-right-icon bg-dark"><i class="fi-rs-bookmark"></i></span>
                                    <div class="post-thumb img-hover-scale">
                                        @foreach ($Articles as $Article)

                                        <h2 class="post-title mb-20">
                                         <a href="">{{ $Article->title }}</a>
                                        </h2>
                                        <a href="{{ route('Articles.show',$Article) }}">
                                            <img src="storage/{{ $Article->photo }}"  alt="Blog_Image">
                                        </a>

                                    </div>
                                </div>
                                <div class="entry-content">

                                    {{-- <h2 class="post-title mb-20"> --}}
                                    <p class="post-exerpt font-medium text-muted mb-30">{{ $Article->slug }}</p><br>
                                    <div class="mb-20 entry-meta meta-2">
                                        <div class="font-xs ">
                                            <span class="post-by">By <a href="{{ route('blog-details') }}">{{ $Article->user->name }}</a></span><br><br>
                                            <span class="post-on">Create: {{ $Article->created_at }} EST</span>
                                            <p class="font-xs mt-5">Update: {{ $Article->updated_at }} EST</p>
                                        </div>
                                        <a href="{{ route('blog-details') }}" class="btn btn-sm">Read more<i class="fi-rs-arrow-right ml-10"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </article>
                        </div>

                        @foreach ($All_Articles as $item)
                        <div class="col-lg-6">
                            <article class="wow fadeIn animated hover-up mb-30">
                                <div class="post-thumb img-hover-scale">
                                    <a href="{{ route('blog-details') }}">
                                        <img src="storage/{{ $Article->photo }}" alt="">
                                    </a>
                                    <div class="entry-meta">
                                        <a class="entry-meta meta-2" href="{{ route('blog-details') }}">{{ $item->categorie->name }}</a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <h3 class="post-title mb-15">
                                        <a href="{{ route('blog-details') }}">{{ $item->title }}</a></h3>
                                    <p class="post-exerpt mb-30">{{ $item->slug }}</p>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"> <i class="fi-rs-clock"></i> Create:  {{ $item->created_at }}</span>
                                        </div>
                                        <a href="{{ route('Articles.show',$Article) }}" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        @endforeach




                    </div>
                </div>
                <!--post-grid-->
                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                    <nav aria-label="Page navigation example">
                        {{-- <ul class="pagination justify-content-start">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">16</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                        </ul> --}}
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 primary-sidebar sticky-sidebar">
                <div class="widget-area">
                    <div class="sidebar-widget widget_search mb-50">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" placeholder="Search…">
                                <button type="submit"> <i class="fi-rs-search"></i> </button>
                            </form>
                        </div>
                    </div>
                    <!--Widget categories-->
                    <div class="sidebar-widget widget_categories mb-40">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title">Categories</h5>
                        </div>
                        <div class="post-block-list post-module-1 post-module-5">
                            <ul>
                                @forelse ($last_categories as $last)
                                            <li class="cat-item cat-item-2"><a href="/">{{ $last->name }}</a>100%</li>
                                        @empty
                                            <p>No Category found !</p>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <!--Widget latest posts style 1-->
                    @foreach ($Articles as $Article)
                    <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title">Trending Now</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 sm-grid-content mb-30">
                                <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                    <a href="{{ route('Articles.show',$Article) }}">
                                        <img src="storage/{{ $Article->photo }}" alt="">
                                    </a>
                                </div>

                                <div class="post-content media-body">
                                    <h4 class="post-title mb-10 text-limit-2-row">{{ $Article->title }}</h4>
                                    <div class="entry-meta meta-13 font-xxs color-grey">
                                        <span class="post-on mr-10"> Create: {{ $Article->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @foreach ($All_Articles as $item)
                            <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                    <a href="{{ route('Articles.show',$Article) }}">
                                        <img src="storage/{{ $item->photo }}" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-10 text-limit-2-row">{{ $item->title }}</h6>
                                    <div class="entry-meta meta-13 font-xxs color-grey">
                                        <span class="post-on mr-10">Create: {{ $item->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Widget ads-->
                    @foreach ($banners as $banner)
                        <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none animated">
                            {{-- <img src="frontEnd/imgs/banner/banner-11.jpg" alt=""> --}}
                            <img src="storage/{{ $banner->image8 }}" alt="Banner-image">
                            <div class="banner-text">
                                <span>{{ $banner->Title5 }}</span>
                                <h4>{{ $banner->Slug5 }}</h4>
                                <a href="{{ route('shop') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                    <!--Widget Tags-->
                    <div class="sidebar-widget widget_tags mb-50">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title">Popular tags </h5>
                        </div>
                        <div class="tagcloud">
                            @forelse ( $Tags as $Tag )
                                <a class=" text-black tag-cloud-link" href="{{ route('Articles.show',$Article) }}">{{ $Tag->name }}</a>
                            @empty
                                <h4>no tag here !!</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

@endsection
