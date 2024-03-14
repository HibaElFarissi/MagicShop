@extends('layouts.DashAdmin_nav')

@section('content')

    <form class="row g-3 needs-validation" action="{{ route('Tags.update', $Tag->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">name</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('name') is-invalid @enderror" name="name"
                    id="validationCustom10" value="{{ old('name', $Tag->name) }}" required>

            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
   
@endsection
