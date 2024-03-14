@extends('layouts.DashAdmin_nav')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Articles.update', $Article->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Title</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('title') is-invalid @enderror" name="title"
                    id="validationCustom10" value="{{ old('title', $Article->title) }}" required>

            </div>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>



        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="text" class="form-control py-3 @error('text') is-invalid @enderror"
                    id="text" placeholder="Notes" required>{{ old('text', $Article->text) }}</textarea>

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
     
        $('#text').summernote({
            placeholder: 'Notes',
            tabsize: 2,
            height: 100
        });
       
    </script>
@endsection
