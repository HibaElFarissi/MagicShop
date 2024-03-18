@extends('layouts.base')

@section('content')
    <!-- ======= About Section ======= -->

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> About
                </div>
            </div>
        </div>

        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    @forelse ( $abouts as $about )
                        <h3>{{ $about->Title_Globale }}</h3>
                        <p>"{{ $about->description_Globale}}"</p>


                    {{-- <h2>About</h2> --}}
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="storage/{{ $about->image1 }}" class="img-fluid" alt="">
                        {{-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> --}}
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="100">
                        <h3>{{ $about->Title1 }}</h3>
                        <p class="fst-italic">{{ $about->description1 }}</p>
                        <ul>
                            <li>
                                <i class="bx bx-store-alt"></i>
                                <div>
                                    <h5>{{ $about->Mini_Title1 }}</h5>
                                    <p>{{ $about->Slug1 }}</p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>{{ $about->Mini_Title2}}</h5>
                                    <p>{{ $about->Slug2 }}</p>
                                </div>
                            </li>
                        </ul>
                        @empty
                        <h4>No Data Found !</h4>
                        @endforelse

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Articles</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="163" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @forelse ($feedbacks as $feedback)
                        <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="storage/{{ $feedback->image }}" class="testimonial-img"
                                alt="">
                            <h3>{{ $feedback->name }}</h3>
                            <h4>{{ $feedback->job }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                "{{ $feedback->feedback }}"
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    @empty
                        <h4 class="text-white">There is no feedback</h4>
                    @endforelse


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        {{-- about us  --}}
        <section class="section-padding">
            <div class="container pt-25">
                <div class="row">
                    @forelse ($abouts as $about )
                        <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                            <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Company</h6>
                            <h1 class="font-heading mb-40">{{ $about->Title2 }}</h1>
                            <p>{{ $about->description2 }}</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="storage/{{ $about->image2 }}" alt="">
                        </div>
                    @empty
                        <h4>No Data found ! </h4>
                    @endforelse

                </div>
            </div>
        </section>
        <section id="testimonials" class="section-padding">
            <div class="container pt-25">
                <div class="row mb-50">
                    @forelse ($abouts as $about )
                        <div class="col-lg-12 col-md-12 text-center">
                            <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated">some facts</h6>
                            <h2 class="mb-15 text-grey-1 wow fadeIn animated">
                                {{ $about->TitleFacts }}
                            </h2>
                            <p class="w-50 m-auto text-grey-3 wow fadeIn animated">{{ $about->SlugFacts }}</p>
                        </div>
                    @empty
                        <h1>No Data found!</h1>
                    @endforelse
                </div>
                {{-- Foreach of the  Quotes  --}}
                <div class="row align-items-center">
                    @forelse ($Quotes as $Quote )
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="storage/{{ $Quote->image }}"  alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">{{ $Quote->title }}</h5>
                                <p class="font-sm text-grey-5"></p>
                                <p class="text-grey-3">"{{ $Quote->description }}"</p>
                            </div>
                        </div>
                    </div>

                    @empty
                    <h4>No Data Found!</h4>
                    @endforelse
                </div>

                <div class="row mt-30">
                    <div class="col-12 text-center">
                        <p class="wow fadeIn animated">
                            <a href="{{ route('blog') }}"
                                class="btn btn-brand text-black btn-shadow-brand hover-up btn-lg">View More</a>
                            <a></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero  Card -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                @forelse ( $abouts as $about )
                        <div class="section-title">
                            <h3>{{ $about->TitleCategory }}</h3>
                            <p>{{ $about->SlugCategory }}</p>
                        </div>
                @empty
                    <h4>No data found!</h4>
                @endforelse

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @forelse ($last_categories as $item )
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="storage/{{ $item->image }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 class="text-center">{{ $item->name }}</h4>
                            {{-- <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a> --}}
                        </div>
                    </div>
                        @empty
                        <h4>There is no Categories found ! </h4>
                        @endforelse
                </div>
        </section>
        <!-- End Category Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">


                    @forelse ( $abouts as $about )
                        <div class="section-title">
                            <h3>{{ $about->TitleFaq }}</h3>
                            <p>{{ $about->SlugFaq }}</p>
                        </div>
                    @empty
                        <h4>No Data found !</h4>
                    @endforelse

                    <br>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">

                            @forelse ($Faqs as $Faq)
                                <li>
                                    <div data-bs-toggle="collapse" href="#faq{{ $loop->index }}"
                                        class="collapsed question">
                                        {{ $Faq->questions }}
                                        <i class="bi bi-chevron-down icon-show"></i>
                                        <i class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="faq{{ $loop->index }}" class="collapse" data-bs-parent=".faq-list">
                                        <p>{{ $Faq->answers }}</p>
                                    </div>
                                </li>
                            @empty
                                <h4>There are no questions or answers found!</h4>
                            @endforelse

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        {{-- Brands / Clients --}}

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
                        <h4>No brand here !</h4>
                        @endforelse

                    </div>
                </div>
            </div>
        </section>
    </main>


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
