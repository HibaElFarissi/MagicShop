{{-- @extends('layouts.base') --}}
{{-- @extends('layouts.Dashboard_nav') --}}
@extends('layouts.DashAdmin_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' Faq')

@php
    $route = route('faqs.store');
    if ($isUpdate) {
        $route = route('faqs.update', $faq);
    }
    @endphp




@section('content')
@include('layouts.errors-notif')

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
                <label for="questions" class="form-label">Questions</label>
                <input type="text" name="questions" id="questions" class="form-control">
            </div>

            <div class="form-group">
                <label for="answers" class="form-label">Answers</label>
                <input type="text" name="answers" id="answers" class="form-control">
            </div>
            <br><br>


            <div class="form-group">
                <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>


        </form>
    </div>
@endsection
