@extends('layouts.DashAdmin_nav')
@section('title', 'Brands')
@section('content')
    @include('sweetalert::alert')
    @include('layouts.errors-notif')

    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"></h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/admin/dashboard" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Brands</span>
            </li>
        </ul>
    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-bold fs-18 mb-0 text-center">Brands</h4>
                <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">


            <a href="{{ route('Brands.create') }}"
                class="btn btn-primary text-white fw-semibold py-2 px-3 w-sm-100 mt-3 mt-sm-0">
                <span class="py-1 d-block">
                    <i class="ri-add-line"></i>
                    Create New
                </span>
            </a>
        </div>
    </div>

    <div class="default-table-area recent-orders">
        <div class="table-responsive">
            <table class="table align-middle">
            <thead>
            <tr>
            <th scope="col" class="text-primary">
                <div class="form-check p-0 d-flex align-items-center">
                    <span class="ms-4">Brand</span>
            </div>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Status</th>
            {{-- <th scope="col">Images</th> --}}
        </tr>
        </thead>


    {{-- <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Images</th>

            </tr>
        </thead> --}}
        <tbody>
            @foreach ($brands as $brand)
            <tr>

                <td>
                    <div class="form-check p-0 d-flex align-items-center">
                        <a href="#" class="d-flex align-items-center ms-4">
                            <img src="{{ asset('storage/' . $brand->image) }}"  class="wh-44 rounded"  alt="{{ $brand->image }}">
                        </a>
                    </div>
                </td>

                <td>{{$brand->id}}</td>
                <td>{{$brand->name}}</td>
                <td>{{$brand->slug}}</td>
                <td>{{$brand->status}}</td>
                {{-- <td><img class="" src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->image }}"></td> --}}

            </tr>
            @endforeach
        </tbody>
    </table>



@endsection
