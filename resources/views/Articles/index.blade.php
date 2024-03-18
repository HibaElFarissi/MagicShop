@extends('layouts.DashAdmin_nav')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Blogs</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Blogs</span>
            </li>
        </ul>
    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4 pb-0">
            <div class="border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">News & Blog</h4>
            </div>
            <div class="row justify-content-center">
                @forelse ($Articles as $Article)
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <a href="{{ route('Articles.show', $Article) }}">
                                <img src="{{ asset('storage/' . $Article->photo) }}" class="rounded-2"
                                    alt="{{ $Article->photo }}">
                            </a>
                            <div class="card-body position-relative blog-content m-0 p-3">
                                <span class="blog-date two d-inline-block w-auto h-auto lh-1">{{$Article->Categorie->name}}</span>
                                <h4 class="lh-base fs-16 fw-semibold mb-3 mt-4">
                                    <a href="'Articles.show',$Article.html"
                                        class="text-decoration-none text-dark">{{ $Article->title }}</a>
                                </h4>
                                <ul class="ps-0 mb-0 list-unstyled d-flex gap-3">
                                    <li>
                                        {{-- <i class="ri-user-line text-danger"></i> --}}
                                        <a  class="text-decoration-none text-gray-light ms-1" href="{{ route('Articles.edit', $Article->id) }}">
                                            <button class="btn btn-info btn-sm px-3">edit</button>
                                        </a>
                                    </li>
                                    <li>

                                        {{-- <i class="ri-calendar-line text-danger"></i> --}}

                                            <form action="{{ route('Articles.destroy', $Article) }}" method="POST" class="text-decoration-none text-gray-light ms-1">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Remove" class="btn btn-danger btn-sm px-3">
                                            </form>

                                    </li>
                                </ul>





                            </div>
                        </div>
                    </div>
                @empty
                    <h3>No Data Found!</h3>
                @endforelse


            </div>
        </div>
    </div>
@endsection
