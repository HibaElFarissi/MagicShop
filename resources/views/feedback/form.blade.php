{{-- @extends('layouts.base') --}}
@extends('layouts.Dashboard_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' Feedback')
@include('layouts.errors-notif')

@php
    $route = route('feedback.store');
    if ($isUpdate) {
        $route = route('feedback.update', $feedback);
    }
@endphp



@section('content')

    <div class="container my-5">
        <h1>@yield('title')</h1>
        <br>
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        {{-- <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            @if ($isUpdate)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control"
                value="{{ old('name', $feedback->name) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" name="image" type="file" id="formFile"
                value="{{ old('image', $feedback->image) }}">

                {{-- Afficher old image :  --}}
                @if ($feedback->image)
                    <img width="100px" src="/storage/{{ $feedback->image }}" alt="">
                @endif

            </div>
            <br>

            <div class="form-group">
                <label for="job" class="form-label">Job</label>
                <input type="text" name="job" id="job" class="form-control"
                value="{{ old('job', $feedback->job) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="feedback" class="form-label">Feedback</label>
                <input type="text" name="feedback" id="feedback" class="form-control"
                value="{{ old('feedback', $feedback->feedback) }}">
            </div>
            <br><br>


            <div class="form-group">
                <input type="submit" class="btn btn-success w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>

        </form>
    </div>
@endsection
