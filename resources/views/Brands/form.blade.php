@extends('layouts.DashAdmin_nav')

{{-- @section('title', ($isUpdate ? 'Update' : 'Create') . ' Brand') --}}
{{-- @php
    $route = route('Brands.store');
    if ($isUpdate) {
        $route = route('Brands.update', $brand);
    }
@endphp --}}

@section('content')
@include('layouts.errors-notif')

    <div class="container">
    <h1>@yield('title')</h1>
    <br>
    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if ($isUpdate)
            @method('PUT')
        @endif

    <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Type the name of brand"
            value="{{ old('name', $brand->name) }}">
    </div>
    <br>

    <div class="form-group">
        <label for="name" class="form-label">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" placeholder="Type the slug of brand"
            value="{{ old('slug', $brand->slug) }}">
    </div>
    <br>


    <div class="form-group">
        <label for="name" class="form-label">Status</label>
        <input type="text" name="status" id="status" class="form-control" placeholder="Type the status of brand"
            value="{{ old('status', $brand->status) }}">
    </div>
    <br>


    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
    </div>

      {{-- <button>ENVOYER</button> --}}
      <br>
      <div class="form-group">
          <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
      </div>
      <br>
      <br>
      <br>

    </form>

@endsection
