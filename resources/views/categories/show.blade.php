@extends('layouts.DashAdmin_nav')
@section('title' , 'Categories')
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
            <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Show</span>
        </li>
    </ul>
</div>

<div class="card bg-white border-0 rounded-10 mb-4">
    <div class="card-body p-4">
        <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-bold fs-18 mb-0 text-center">Category : {{ $category->name }} </h4>
            <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">


        <a href="{{ route('categories.index') }}"
            class="btn btn-primary text-white fw-semibold py-2 px-3 w-sm-100 mt-3 mt-sm-0">
            <span class="py-1 d-block">
                {{-- <i class="ri-add-line"></i> --}}
                <i class="flaticon-chevron-1"></i>
                Go Back
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
                <span class="ms-4">ID</span>
        </div>
        {{-- <th scope="col">ID</th> --}}
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Delete Product</th>
    </tr>
    </thead>




    <tbody>
        @forelse  ($products as $product )
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td><img src="{{ asset('images/' . json_decode($product->images)[0]) }}"  class="wh-44 rounded"  alt="product"></td>

            <td>

                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete" />
                </form>
            </td>



            </th>
        </tr>

        @empty
        <tr>
            <td colspan="9" align="center"><h5>No Product Here !</h5></td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection

