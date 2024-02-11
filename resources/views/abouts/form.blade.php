{{-- @extends('layouts.base') --}}
@extends('layouts.Dashboard_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' About')
{{-- @section('title', 'About') --}}
@include('layouts.errors-notif')
@php
    $route = route('abouts.store');
    if ($isUpdate) {
        $route = route('abouts.update');
    }
@endphp

@section('content')
    <br>
    <div class="container my-5">
        <h1>@yield('title')</h1>
        <br>
        <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($isUpdate)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="Title_Globale" class="form-label">Title Globale</label>
                <input type="text" name="Title_Globale" id="Title_Globale" class="form-control"
                    value="{{ old('Title_Globale') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="description_Globale" class="form-label">Description Globale</label>
                <textarea name="description_Globale" id="description_Globale" class="form-control" rows="4">{{ old('description_Globale') }}</textarea>
            </div>
            <br>

            <div class="form-group">
                <label for="Title1" class="form-label">Title1</label>
                <input type="text" name="Title1" id="Title1" class="form-control"
                    value="{{ old('Title1') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="description1" class="form-label">Description1</label>
                <textarea name="description1" id="description1" class="form-control" rows="4">{{ old('description1') }}</textarea>
            </div>
            <br>

            <div class="form-group">
                <label for="Mini_Title1" class="form-label">Mini Title1</label>
                <input type="text" name="Mini_Title1" id="Mini_Title1" class="form-control"
                    value="{{ old('Mini_Title1') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="Slug1" class="form-label">Slug1</label>
                <input type="text" name="Slug1" id="Slug1" class="form-control"
                    value="{{ old('Slug1') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="Mini_Title2" class="form-label">Mini Title2</label>
                <input type="text" name="Mini_Title2" id="Mini_Title2" class="form-control"
                    value="{{ old('Mini_Title2') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="Slug2" class="form-label">Slug2</label>
                <input type="text" name="Slug2" id="Slug2" class="form-control"
                    value="{{ old('Slug2') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="Title2" class="form-label">Title2</label>
                <input type="text" name="Title2" id="Title2" class="form-control"
                    value="{{ old('Title2') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="description2" class="form-label">Description2</label>
                <textarea name="description2" id="description2" class="form-control" rows="4">{{ old('description2') }}</textarea>
            </div>
            <br>

            <div class="form-group">
                <label for="image1" class="form-label">Image1</label>
                <input type="file" name="image1" id="image1" class="form-control">
            </div>
            <br>

            <div class="form-group">
                <label for="image2" class="form-label">Image2</label>
                <input type="file" name="image2" id="image2" class="form-control">
            </div>
            <br>

            {{-- <div class="form-group">
                <label for="image3" class="form-label">Image3</label>
                <input type="file" name="image3" id="image3" class="form-control">
            </div>
            <br> --}}

            <div class="form-group">
                <label for="TitleQuotes" class="form-label">Title Quotes</label>
                <input type="text" name="TitleQuotes" id="TitleQuotes" class="form-control"
                    value="{{ old('TitleQuotes') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="SlugQuotes" class="form-label">Slug Quotes</label>
                <input type="text" name="SlugQuotes" id="SlugQuotes" class="form-control"
                    value="{{ old('SlugQuotes') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="TitleCategory" class="form-label">Title Category</label>
                <input type="text" name="TitleCategory" id="TitleCategory" class="form-control"
                    value="{{ old('TitleCategory') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="SlugCategory" class="form-label">Slug Category</label>
                <input type="text" name="SlugCategory" id="SlugCategory" class="form-control"
                    value="{{ old('SlugCategory') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="TitleFaq" class="form-label">Title FAQ</label>
                <input type="text" name="TitleFaq" id="TitleFaq" class="form-control"
                    value="{{ old('TitleFaq') }}">
            </div>
            <br>

            <div class="form-group">
                <label for="SlugFaq" class="form-label">Slug FAQ</label>
                <input type="text" name="SlugFaq" id="SlugFaq" class="form-control"
                    value="{{ old('SlugFaq') }}">
            </div>
            <br>






            <br>
            <div class="form-group">
                {{-- <input type="submit" class="btn btn-success w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}"> --}}
                <input type="submit" class="btn btn-success w-100" value="save">
            </div>
            <br>
            <br>
            <br>

        </form>
    </div>
@endsection