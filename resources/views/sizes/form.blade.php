@extends('layouts.DashAdmin_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' Size')
@php
    $route = route('sizes.store');
        if ($isUpdate) {
            $route = route('sizes.update', $Size);
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

    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name"
            value="{{ old('name', $Size->name) }}">
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">status</label>
        <input type="text" class="form-control" id="status" placeholder="status" name="status"
            value="{{ old('status', $Size->status) }}">
    </div>

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
