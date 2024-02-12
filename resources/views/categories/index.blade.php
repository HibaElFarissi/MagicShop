{{--
@extends('layouts.DashAdmin_nav')
@section('title' , 'Categories')
@section('content')
@include('sweetalert::alert')
@include('layouts.errors-notif')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Categories </h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
               <th  style="padding-left: 80px;">Actions</th>
            </tr>
        </thead>

        <tbody>
             Ila kant 3amra dir Forelse
            @forelse  ($categories as $category )
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td><img width="100px" src="storage/{{ $category->image }}" alt=""></th>
                 <th>
                    <div class="btn-group gap-2">
                        <a href="{{ route('categories.show', $category) }}"  class="btn btn-secondary text-white">Show</a>
                        <a href="{{ route('categories.edit', $category) }}"  class="btn btn-success">Update</a>

                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete" />
                        </form>
                    </div>
                </th>
            </tr>
            @empty
            <tr>
                <td colspan="9" align="center"><h5>No Category. </h5></td>
            </tr>
            @endforelse

        </tbody>
    </table>

    {{$categories->links()}}
</div>

@endsection --}}


@extends('layouts.DashAdmin_nav')
@section('title', 'Categories')
@section('content')
    @include('sweetalert::alert')
    @include('layouts.errors-notif')

    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"></h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Categories</span>
            </li>
        </ul>
    </div>
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-bold fs-18 mb-0 text-center">Categories</h4>
                <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">
                {{-- <form class="src-form position-relative">
                <input type="text" class="form-control h-40 bg-body-bg border-0 text-dark" placeholder="Search here..">
                <button type="submit" class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0 pe-3">
                <i data-feather="search" style="stroke: #ff014fff; width: 20px; height: 20px;"></i>
                </button>
                </form> --}}

            <a href="{{ route('categories.create') }}"
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
                <span class="ms-4">Category</span>
        </div>

        {{-- <th scope="col">Image</th> --}}
        <th scope="col">name</th>
        <th scope="col">Actions</th>

    </tr>
    </thead>
    <tbody>
        @forelse  ($categories as $category )
        <tr>
            <td>
                <div class="form-check p-0 d-flex align-items-center">
                    <a href="#" class="d-flex align-items-center ms-4">
                        <img src="storage/{{ $category->image }}" class="wh-44 rounded"  alt="Category_image">
                        {{-- <h6>{{ $product->name }}</h6> --}}
                    </a>
                </div>
            </td>

            <td>{{ $category->name }}</td>

        <td>
            <div class="dropdown action-opt">
                <button class="btn bg p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i data-feather="more-horizontal"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">

                <li>
                <a class="dropdown-item" href="{{ route('categories.edit', $category) }}">
                <i data-feather="edit-3"></i>
                Rename
                </a>
                </li>


                {{-- <a class="dropdown-item" href="{{ route('products.destroy', $product) }}">
                <i data-feather="trash-2"></i>Remove</a>
                </li> --}}

                <li>
                <form class="dropdown-item"  action="{{ route('categories.destroy', $category) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <i data-feather="trash-2"></i>
                    {{-- <input type="submit"  value="Delete" /> --}}
                    <input type="submit" value="Delete" style="background-color: transparent; border: none; color: inherit; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.1)'" onmouseout="this.style.backgroundColor='transparent'" />
                </form>
                </li>

                </ul>
                </div>
            </tr>
        {{-- ila kant empty kteb message --}}
    @empty
        <tr>
            <td colspan="9" align="center">
                <h5>There is no Category here !! </h5>
            </td>
        </tr>
    @endforelse

    </td>

    </tr>
    </tbody>
    </table>
    {{$categories->links()}}
</div>


    <div class="d-sm-flex justify-content-between align-items-center text-center">
    <span class="fs-14">Showing 1 To 8 Of 20 Entries</span>
    <nav aria-label="Page navigation example">
    <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
    {{-- <li class="page-item">
    <a class="page-link icon" href="products.html" aria-label="Previous">
    <i data-feather="arrow-left"></i>
    </a>
    </li> --}}

    {{-- <li class="page-item">
    <a class="page-link icon" href="products.html" aria-label="Next">
    <i data-feather="arrow-right"></i>
    </a>
    </li> --}}
    </ul>
    </nav>
    </div>
    </div>
    </div>
    </div>

    <div class="flex-grow-1"></div>

@endsection



