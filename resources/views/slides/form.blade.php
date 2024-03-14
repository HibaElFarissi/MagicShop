@extends('layouts.DashAdmin_nav')

@section('title', ($isUpdate ? 'Update' : 'Create').' Slide')
@php
    $route = route('slides.store');
        if ($isUpdate) {
            $route = route('slides.update', $slide);
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

            <br>
            <br>
            <br>

            {{-- <div class="mb-3">
                <input type="file" multiple name="images[]">
            </div> --}}

            <div class="form-group">
                <label for="images" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="images" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input  name="images[]" multiple id="images" type="file">
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="form-group">
                <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            </form>
        </div>
@endsection
