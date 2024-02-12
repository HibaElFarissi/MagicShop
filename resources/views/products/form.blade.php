{{-- @extends('layouts.base') --}}
{{-- @extends('layouts.Dashboard_nav') --}}
@extends('layouts.DashAdmin_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' Product')
@php
    $route = route('products.store');
    if ($isUpdate) {
        $route = route('products.update', $product);
    }
@endphp



@section('content')
@include('layouts.errors-notif')

         <div class="container">
        <h1>@yield('title')</h1>
        <br>
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($isUpdate)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name', $product->name) }}">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control"
                    value="{{ old('quantity', $product->quantity) }}">
            </div>
            <br>


            <div class="form-group">
                <label for="formFile" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input class="form-control" name="image" id="file-upload" type="file">
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.5" name="price" id="price" class="form-control"
                    value="{{ old('price', $product->price) }}">
            </div>
            <br>




            <div class="form-group">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-select form-control h-58" aria-label="Default select example" value="{{ old('category', $product->category) }}">
                    <option value="1" selected disabled class="text-dark">Choose Your Category</option>

                    @foreach ($categories as $category)
                        <option @selected(old('category_id', $product->category_id) === $category->id) class="text-dark" value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>

            <br>



            <div class="form-group mb-4">
                <label for="category_id" class="form-label">Status</label>
                <div class="form-group position-relative">
                    <select class="form-select form-control h-58" name="condition" aria-label="Default select example"
                         value="{{ old('condition', $product->condition) }}">
                        <option disabled selected class="text-dark">Choose Status</option>
                        <option @selected(old('condition', $product->condition)) value="1" class="text-dark">In Stock</option>
                        <option @selected(old('condition', $product->condition)) value="2" class="text-dark">Out of Stock</option>
                    </select>
                </div>
            </div>

            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>
            <br>
            <br>
            <br>

        </form>
    </div> 


@endsection
