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
                        <h3 class="text-white fw-semibold fs-20 mb-2">Welcome to your profile Here !</h3>
                        <p class="text-white fs-15">You can manage your account details and feel free to change anything you want. <br>Happy browsing .</p>
                    </div>
                </div>
                <img src="Backend/images/welcome-shape.png" class="position-absolute bottom-0 end-0"
                    style="right: 10px !important; bottom: 10px !important;" alt="welcome-shape">
            </div>
            <div class="stats-box style-eight bg-white card border-0 rounded-0 rounded-bottom-3 mb-4">
                <div class="card-body p-4 pt-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="profile-img">
                            @if(auth()->user()->photo === null)
                            <img src="{{ asset('BackEnd/images/userAuto.jpeg') }}" class="rounded-circle wh-54" alt="">
                            @else
                                <img src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}" class="rounded-circle wh-54" alt="admin">
                            @endif
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

                    <ul class="ps-0 mb-0 list-unstyled">
                        <li class="border-bottom border-color-gray mb-3 pb-3">
                            <span class="fw-semibold text-dark w-130 d-inline-block">Full Name :</span>
                            <span>{{ auth()->user()->name }}</span>
                        </li>

                        <li class="border-bottom border-color-gray mb-3 pb-3">
                            <span class="fw-semibold text-dark w-130 d-inline-block">Email :</span>

                            <span class="__cf_email__"
                                data-cfemail="c4a5aaa0b6a1b3a6b1b6aab784a2a5b6aba8eaa7aba9">{{ auth()->user()->email }}</span>
                        </li>

                        <li class="border-bottom border-color-gray mb-3 pb-3">
                            <span class="fw-semibold text-dark w-130 d-inline-block">Facebook :</span>
                            <span>{{ auth()->user()->Facebook }}</span>
                        </li>

                        <li class="border-bottom border-color-gray mb-3 pb-3">
                            <span class="fw-semibold text-dark w-130 d-inline-block">Instagram :</span>
                            <span>{{ auth()->user()->instagram }}</span>
                        </li>

                        <li class="border-bottom border-color-gray mb-3 pb-3">
                            <span class="fw-semibold text-dark w-130 d-inline-block">Twitter :</span>
                            <span>{{ auth()->user()->Twitter }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            
        @endsection
