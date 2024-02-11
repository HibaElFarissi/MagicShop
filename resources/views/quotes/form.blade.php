{{-- @extends('layouts.base') --}}
@extends('layouts.Dashboard_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' Quotes')
@include('layouts.errors-notif')

@php
    $route = route('quotes.store');
    if ($isUpdate) {
        $route = route('quotes.update', $quotes);
    }
@endphp




@section('content')

    <div class="container my-5">
        <h1>@yield('title')</h1>
        <br>
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        {{-- <form action="{{ route('faqs.store') }}" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            @if ($isUpdate)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="title" class="form-label">Name</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <br>

            <div class="form-group">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <br>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <br><br>


            <div class="form-group">
                <input type="submit" class="btn btn-success w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>


        </form>
    </div>
@endsection
