@extends('layouts.DashAdmin_nav')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>



<h1 style="font-weight: bold"> Create an Article </h1>
<br>

<br>
    <form class="row g-3 needs-validation" action="{{ route('Articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Title</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('title') is-invalid @enderror" name="title"
                    id="validationCustom10" value="{{ old('title') }}" required>

            </div>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Slug</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('slug') is-invalid @enderror" name="slug"
                    id="validationCustom10" value="{{ old('slug') }}" required>

            </div>
            @error('slug')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div id="summernote"></div> --}}
        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="text" class="form-control py-3 @error('text') is-invalid @enderror"
                id="summernote" placeholder="Notes" required>{{ old('text') }}</textarea>

            </div>
            @error('text')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>


        <br><br>

        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">File Upload photo </label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="file-upload" class="@error('photo') is-invalid @enderror" type="file" name="photo">

                    </div>
                    @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Categories</label>
                <div class="form-group position-relative">
                    <select name="Categorie_id" id="Categorie_id" class="form-select form-control h-58" aria-label="Default select example">
                             @foreach ($Categories as $Categorie)
                             <option  value="{{$Categorie->id}}">{{ $Categorie->name}}</option>
                             @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
    <script>
        $('#summernote').summernote({
          placeholder: 'Enter here You Article',
          tabsize: 2,
          height: 100
        });
      </script>
@endsection
