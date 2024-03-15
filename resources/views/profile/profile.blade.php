{{-- @extends('layouts.DashProfile') --}}
@extends('layouts.DashTry')
@section('content')
    
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Profile</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Profile</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-xxl-4 col-sm-12">
            <div class="welcome-farol card bg-primary border-0 rounded-0 rounded-top-3 position-relative">
                <div class="card-body p-4 pb-5 my-2">
                    <div class="mw-350">
                        <h3 class="text-white fw-semibold fs-20 mb-2">Welcome to Farol Dashboard !</h3>
                        <p class="text-white fs-15">You have done 68% 😎 more sales today. Check your new badge in your
                            profile.</p>
                    </div>
                </div>
                <img src="Backend/images/welcome-shape.png" class="position-absolute bottom-0 end-0"
                    style="right: 10px !important; bottom: 10px !important;" alt="welcome-shape">
            </div>
            <div class="stats-box style-eight bg-white card border-0 rounded-0 rounded-bottom-3 mb-4">
                <div class="card-body p-4 pt-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="profile-img">
                            <img src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}"
                                class="rounded-circle  border-2 border-white wh-57 mb-4" alt="{{ auth()->user()->photo }}">
                            <h4 class="fs-16 fw-semibold mb-1">{{ auth()->user()->name }}</h4>
                            <span class="fs-14">{{ auth()->user()->Experience }}</span>
                        </div>
                        <div class="text-end">
                            <div id="impression_share"></div>
                            <span class="fs-14 fw-semibold mt-minus d-block">Impression Share</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-0">Personal Information</h4>
                        <div class="dropdown action-opt">

                        </div>
                    </div>
                    <h4 class="fs-15 fw-semibold">About Me:</h4>
                    <p class="mb-4">{{ auth()->user()->About_Me }}</p>
                    <ul class="ps-0 mb-0 list-unstyled">
                        <li class="border-bottom border-color-gray mb-3 pb-3">
                            <span class="fw-semibold text-dark w-130 d-inline-block">Full Name :</span>
                            <span>{{ auth()->user()->name }}</span>
                        </li>
                        <li class="border-bottom border-color-gray mb-3 pb-3">
                            <span class="fw-semibold text-dark w-130 d-inline-block">Mobile :</span>
                            {{ auth()->user()->Mobile }}
                        </li>
                        <li class="border-bottom border-color-gray mb-3 pb-3">
                            <span class="fw-semibold text-dark w-130 d-inline-block">Email :</span>

                            <span class="__cf_email__"
                                data-cfemail="c4a5aaa0b6a1b3a6b1b6aab784a2a5b6aba8eaa7aba9">{{ auth()->user()->email }}</span>
                        </li>

                        <li>
                            <span class="fw-semibold text-dark w-130 d-inline-block">Experience :</span>
                            <span>{{ auth()->user()->Experience }}</span>
                        </li>
                    </ul>
                </div>
            </div>
          
            <div class="col-xxl-8 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-xl-6 col-md-6 col-lg-12 col-xxxl-6">
                        <div class="stats-box style-four card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="icon transition">
                                            <i class="flaticon-donut-chart"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                        <span class="fs-15">Completed Projects</span>
                                        <div class="d-flex align-items-center justify-content-between mt-1 up-down">
                                            <h3 class="body-font fw-bold fs-3 mb-0">24k</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-md-6 col-lg-12 col-xxxl-6">
                        <div class="stats-box style-four card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="icon transition">
                                            <i class="flaticon-goal"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                        <span class="fs-15">Pending Projects</span>
                                        <div class="d-flex align-items-center justify-content-between mt-1 up-down">
                                            <h3 class="body-font fw-bold fs-3 mb-0">155k</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-md-6 col-lg-12 col-xxxl-6">
                        <div class="stats-box style-four card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="icon transition">
                                            <i class="flaticon-award"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                        <span class="fs-15">Total Revenue</span>
                                        <div class="d-flex align-items-center justify-content-between mt-1 up-down">
                                            <h3 class="body-font fw-bold fs-3 mb-0">16.2M</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endsection
