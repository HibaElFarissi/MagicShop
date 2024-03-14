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
                <input type="text" name="name" id="name" class="form-control" placeholder="Type the name of product"
                    value="{{ old('name', $product->name) }}">
            </div>

                <div class="form-group">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="slug..." name="slug"
                    value="{{ old('slug', $product->slug) }}">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" id="description" class="form-control" placeholder="type the description here">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control"
                    value="{{ old('quantity', $product->quantity) }}">
            </div>
            <br>


                <div class="form-group">
                    <label for="brand_id" class="form-label">Brand</label>
                    <select name="brand_id" id="brand_id" class="form-select form-control h-58" aria-label="Default select example">
                        <option value="1" selected disabled class="text-dark">Choose Your brand</option>

                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach

                    </select>
                </div>


            <div class="form-group">
                <label for="color" class="form-label">Color</label>
                <select name="colors[]" id="color" class="form-select form-control h-58" aria-label="Default select example" multiple='multiple'>
                    <option value="1" selected disabled class="text-dark">Choose Your color</option>

                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach

                </select>
            </div>
            
            {{-- tag:  --}}
            <div class="form-group">
                <label for="tags" class="form-label">Tag</label>
                <select name="tags[]" id="tags" class="form-select form-control h-58" aria-label="Default select example" multiple='multiple'>
                    <option value="1" selected disabled class="text-dark">Choose Your Tag</option>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="color" class="form-label">Size</label>
                <select name="sizes[]" id="color" class="form-select form-control h-58" aria-label="Default select example"  multiple='multiple'>
                    <option value="" selected disabled class="text-dark">Choose Your Size</option>

                    @foreach ($sizes as $Size)
                        <option value="{{ $Size->id }}">{{ $Size->name }}</option>
                    @endforeach

                </select>
            </div>
            <br>

        <div class="mb-3">
            <input type="file" multiple name="images[]">
        </div>

        
            {{-- <div class="form-group">
                <label for="formFile" class="form-label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input class="form-control" name="image" id="file-upload" type="file"
                        value="{{ old('image', $product->image) }}">
                        <input type="file" multiple name="images[]">
                    </div>
                </div>
            </div> --}}
            <br>

            {{-- <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" placeholder="price" name="price">
            </div> --}}

            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.5" name="price" id="price" class="form-control" placeholder="the new price"
                    value="{{ old('price', $product->price) }}">
            </div>
            <br>


            <div class="form-group">
                <label for="old_price" class="form-label">Old Price</label>
                <input type="number" class="form-control" id="old_price" placeholder=" the old price" name="old_price"
                 value="{{ old('old_price', $product->old_price) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="sold" class="form-label">sold</label>
                <input type="text" class="form-control" id="sold" placeholder="The sold" name="sold"
                value="{{ old('sold', $product->sold) }}">
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


            <div class="form-group">
                <label for="status" class="form-label">status</label>
                <input type="text" class="form-control" id="status" placeholder="status" name="status"
                    value="{{ old('status', $product->status) }}">
            </div>

            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>
            <br>
            <br>
            <br>

        </form>


{{--
<body class="container">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" placeholder="name" name="name">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="" selected disabled>Choose Your Category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="brand_id" class="form-label">brand</label>
                <select name="brand_id" id="brand_id" class="form-select">
                    <option value="" selected disabled>Choose Your brand</option>

                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="color" class="form-label">color</label>
                <select name="colors[]" id="color" class="form-select" multiple='multiple'>
                    <option value="" selected disabled>Choose Your color</option>

                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="color" class="form-label">Size</label>
                <select name="sizes[]" id="color" class="form-select" multiple='multiple'>
                    <option value="" selected disabled>Choose Your Size</option>

                    @foreach ($sizes as $Size)
                        <option value="{{ $Size->id }}">{{ $Size->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>

        </div>

        <div class="mb-3">
          <input type="file" multiple name="images[]">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" placeholder="price" name="price">
        </div>
        <div class="mb-3">
            <label for="old_price" class="form-label">old price</label>
            <input type="text" class="form-control" id="old_price" placeholder="old price" name="old_price">
        </div>
        <div class="mb-3">
            <label for="sold" class="form-label">sold</label>
            <input type="text" class="form-control" id="sold" placeholder="sold" name="sold">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <input type="text" class="form-control" id="status" placeholder="status" name="status">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>

        <button>ENVOYER</button>
    </form>
    </div> --}}


@endsection
