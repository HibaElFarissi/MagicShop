{{-- @extends('layouts.base') --}}
@extends('layouts.Dashboard_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' Product')
@include('layouts.errors-notif')
@php
    $route = route('products.store');
    if ($isUpdate) {
        $route = route('products.update', $product);
    }
@endphp



@section('content')
    <br>
    <div class="container my-5">
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

            <div class="form-group">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" name="image" type="file" id="formFile">

                @if ($product->image)
                    <img width="100px" src="/storage/{{ $product->image }}" alt="">
                @endif

            </div>

            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.5" name="price" id="price" class="form-control"
                    value="{{ old('price', $product->price) }}">
            </div>
            <br>
            <div class="form-group">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="" selected disabled>Choose Your Category</option>

                    @foreach ($categories as $category)
                        <option @selected(old('category_id', $product->category_id) === $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>

            <br>

            <div class="form-group">
                <label for="category_id" class="form-label">Status</label>
                <select class="form-select" name="condition" aria-label="Default select example"
                    value="{{ old('condition', $product->condition) }}">
                    <option disabled selected>Choose Status</option>
                    <option @selected(old('condition', $product->condition)) value="1">In Stock</option>
                    <option @selected(old('condition', $product->condition)) value="2">Out of Stock</option>
                </select>
            </div>

            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>
            <br>
            <br>
            <br>

        </form>
    </div>
@endsection
