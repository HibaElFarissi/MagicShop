@extends('layouts.DashAdmin_nav')
@section('title', 'Create Color')
@section('content')
    @include('sweetalert::alert')
    @include('layouts.errors-notif')


    <div class="container">
        <h1>@yield('title')</h1>
    <br>

<form action="{{route('Color.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

    <br>

    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
      </div>

      <div class="mb-3">
        <label for="code" class="form-label">code Color</label>
        <input type="color" class="form-control" id="code" placeholder="code" name="code">
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
    </form>
</div>
@endsection

