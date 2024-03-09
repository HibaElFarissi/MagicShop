@extends('layouts.DashAdmin_nav')
@section('title', 'Create Size')
@section('content')
    @include('sweetalert::alert')
    @include('layouts.errors-notif')


    <div class="container">
        <h1>@yield('title')</h1>
    <br>

    <form action="{{route('sizes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">status</label>
        <input type="text" class="form-control" id="status" placeholder="status" name="status">
      </div>
      {{-- <button>ENVOYER</button> --}}
      <div class="form-group">
        <input type="submit" class="btn btn-primary w-100" value="Create">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
</div>
@endsection
