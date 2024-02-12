{{-- @extends('layouts.base') --}}
{{-- @extends('layouts.Dashboard_nav') --}}
@extends('layouts.DashAdmin_nav')
@section('title' , ($isUpdate?'Update':'Create') . ' Category')

@php
    $route = route('categories.store');
    if($isUpdate){
        $route =  route('categories.update', $category);
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
          <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name)}}">
        </div>
        <br>


        {{-- <div class="form-group">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" name="image" type="file" id="formFile">

            @if ($category->image)
                <img width="100px" src="/storage/{{ $category->image }}" alt="">
            @endif

        </div> --}}

    <div class="form-group">
        <label for="formFile" class="form-label">File Upload</label>
        <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
            <div class="product-upload">
                <label for="file-upload" class="file-upload mb-0">
                    <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                    <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                </label>
                <input name="image" id="file-upload" type="file">
            </div>
        </div>
    @if ($category->image)
        <img width="100px" src="/storage/{{ $category->image }}" alt="">
    @endif
    </div>




        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate? 'Edit': 'Create' }}">
        </div>
        <br>
        <br>
        <br>

    </form>
</div>
@endsection



