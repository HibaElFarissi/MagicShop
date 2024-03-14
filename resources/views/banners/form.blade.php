@extends('layouts.DashAdmin_nav')

@section('title', ($isUpdate ? 'Update' : 'Create').' Banner')
@php
    $route = route('banners.store');
        if ($isUpdate) {
            $route = route('banners.update', $banner);
        }
@endphp

@section('content')
@include('layouts.errors-notif')

    <div class="container">
        <h1>@yield('title')</h1>
        <br>
        <br>
        <br>
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($isUpdate)
                @method('PUT')
            @endif

            <div class="form-group">
                <h4>Banner image 1:</h4>
                <label for="image1" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="image1" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="image1" id="image1" type="file">
                    </div>
                </div>

            </div>
            <br>

            <div class="form-group">
                <h4>Banner Image 2:</h4>
                <label for="image2" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="image2" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="image2" id="image2" type="file">
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <h4>Banner Image 3:</h4>
                <label for="image3" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="image3" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="image3" id="image3" type="file">
                    </div>
                </div>
            </div>
            <br>

            <h4>Banner 4</h4>
            <div class="form-group">
                <label for="Title1" class="form-label">Title </label>
                <input type="text" name="Title1" id="Title1" class="form-control"
                    value="{{ old('Title1',  $banner->Title1) }}">
            </div>
            <br>
            <div class="form-group">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="Slug1" id="Slug1" class="form-control"
                    value="{{ old('Slug1',  $banner->Slug1) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="image4" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="image4" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="image4" id="image4" type="file">
                    </div>
                </div>
            </div>
            <br>

            <h4>Banner 5</h4>
            <div class="form-group">
                <label for="Title2" class="form-label">Title</label>
                <input type="text" name="Title2" id="Title2" class="form-control"
                    value="{{ old('Title2',  $banner->Title2) }}">
            </div>
            <br>
            <div class="form-group">
                <label for="slug2" class="form-label">Slug</label>
                <input type="text" name="Slug2" id="Slug2" class="form-control"
                    value="{{ old('Slug2',  $banner->Slug2) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="image5" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="image5" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="image5" id="image5" type="file">
                    </div>
                </div>
            </div>
            <br>

            <h4>Banner 6</h4>
            <div class="form-group">
                <label for="Title3" class="form-label">Title</label>
                <input type="text" name="Title3" id="Title3" class="form-control"
                    value="{{ old('Title3',  $banner->Title3) }}">
            </div>
            <br>
            <div class="form-group">
                <label for="slug3" class="form-label">Slug</label>
                <input type="text" name="Slug3" id="Slug3" class="form-control"
                    value="{{ old('Slug3',  $banner->Slug3) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="image6" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="image6" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="image6" id="image6" type="file">
                    </div>
                </div>
            </div>
            <br>

            <h4>Banner 7</h4>
            <div class="form-group">
                <label for="Title4" class="form-label">Title</label>
                <input type="text" name="Title4" id="Title4" class="form-control"
                    value="{{ old('Title4',  $banner->Title4) }}">
            </div>
            <br>
            <div class="form-group">
                <label for="slug4" class="form-label">Slug</label>
                <input type="text" name="Slug4" id="Slug4" class="form-control"
                    value="{{ old('Slug4',  $banner->Slug4) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="image7" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="image7" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="image7" id="image7" type="file">
                    </div>
                </div>
            </div>
            <br>


            <h4>Banner 8</h4>
            <div class="form-group">
                <label for="Title5" class="form-label">Title</label>
                <input type="text" name="Title5" id="Title5" class="form-control"
                    value="{{ old('Title5',  $banner->Title5) }}">
            </div>
            <br>
            <div class="form-group">
                <label for="Slug5" class="form-label">Slug</label>
                <input type="text" name="Slug5" id="Slug5" class="form-control"
                    value="{{ old('Slug5',  $banner->Slug5) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="image8" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="image8" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="image8" id="image8" type="file">
                    </div>
                </div>
            </div>
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
