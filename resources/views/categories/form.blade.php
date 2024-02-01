{{-- @extends('layouts.base') --}}
@extends('layouts.Dashboard_nav')
@section('title' , ($isUpdate?'Update':'Create') . ' Category')
@include('layouts.errors-notif')

@php
    $route = route('categories.store');
    if($isUpdate){
        $route =  route('categories.update', $category);
    }

@endphp


@section('content')
<br>
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


        <div class="form-group">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" name="image" type="file" id="formFile">

            @if ($category->image)
                <img width="100px" src="/storage/{{ $category->image }}" alt="">
            @endif

        </div>



        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-success w-100" value="{{ $isUpdate? 'Edit': 'Create' }}">
        </div>
        <br>
        <br>
        <br>

    </form>
</div>
@endsection



