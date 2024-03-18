@extends('layouts.DashAdmin_nav')
@section('title', ($isUpdate ? 'Update' : 'Create') . ' Informations')
@php
    $route = route('infos.store');
    if ($isUpdate) {
        $route = route('infos.update', $info);
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
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter Your Title" name="title"
            value="{{ old('title' ,$info->title) }}">
    </div>
    <br>

    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" placeholder="Enter Your Location" name="adresse"
            value="{{ old('adresse', $info->adresse) }}">
    </div>
    <br>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email"  placeholder="Enter Email Address "
            value="{{ old('email', $info->email) }}">
    </div>
    <br>



    <div class="mb-3">
        <label for="phoneNumber" class="form-label">phoneNumber</label>
        <input type="text" class="form-control" id="phoneNumber" placeholder="Enter Phone Number" name="phoneNumber"
            value="{{ old('phoneNumber', $info->phoneNumber) }}">
    </div>
    <br>


    <div class="mb-3">
        <label for="LinkIframeMap" class="form-label">Link Iframe Map </label>
        <input type="text" class="form-control" id="LinkIframeMap" placeholder="Your Location" name="LinkIframeMap"
            value="{{ old('LinkIframeMap', $info->LinkIframeMap) }}">
    </div>
    <br>

    <div class="mb-3">
        <label for="instagram" class="form-label">Instagram </label>
        <input type="text" class="form-control" id="instagram" placeholder="Enter Instagram" name="instagram"
            value="{{ old('instagram', $info->instagram) }}">
    </div>
    <br>

    <div class="mb-3">
        <label for="facebook" class="form-label">Facebook </label>
        <input type="text" class="form-control" id="facebook" placeholder="Enter Facebook" name="facebook"
            value="{{ old('facebook', $info->facebook) }}">
    </div>
    <br>
    <div class="mb-3">
        <label for="twitter" class="form-label">Twitter </label>
        <input type="text" class="form-control" id="twitter" placeholder="Enter Twitter " name="twitter"
            value="{{ old('twitter', $info->twitter) }}">
    </div>
    <br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
    </div>
    <br>
    <br>
    <br>
    <br>
    </form>
</div>
@endsection

