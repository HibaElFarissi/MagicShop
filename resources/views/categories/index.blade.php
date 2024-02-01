{{-- @extends('layouts.base') --}}
@extends('layouts.Dashboard_nav')
@section('title' , 'Categories')
@section('content')
@include('sweetalert::alert')
@include('layouts.errors-notif')
<br>

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Categories </h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
               <th  style="padding-left: 80px;">Actions</th>
            </tr>
        </thead>

        <tbody>
            {{-- Ila kant 3amra dir Forelse  --}}
            @forelse  ($categories as $category )
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td><img width="100px" src="storage/{{ $category->image }}" alt=""></th>
                 <th>
                    <div class="btn-group gap-2">
                        <a href="{{ route('categories.show', $category) }}"  class="btn btn-secondary text-white">Show</a>
                        <a href="{{ route('categories.edit', $category) }}"  class="btn btn-success">Update</a>

                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete" />
                        </form>
                    </div>
                </th>
            </tr>
            {{-- ila kant empty kteb message  --}}
            @empty
            <tr>
                <td colspan="9" align="center"><h5>No Category. </h5></td>
            </tr>
            @endforelse

        </tbody>
    </table>


    {{$categories->links()}}
</div>


@endsection


