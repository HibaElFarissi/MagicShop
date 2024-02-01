{{-- @extends('layouts.base') --}}
@extends('layouts.Dashboard_nav')
@section('title' , 'Categories')
@section('content')
@include('sweetalert::alert')
@include('layouts.errors-notif')
<br>
    <div class="d-flex justify-content-between align-items-center">
        <h1>Category : {{ $category->name }} </h1>
        <a href="{{ route('categories.index') }}" class="btn btn-info "> Go Back</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
               <th>Delete Product</th>
            </tr>
        </thead>

        <tbody>
            {{-- Ila kant 3amra dir Forelse  --}}
            @forelse  ($products as $product )
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    @if ($product->image)
                        <img width="100px" src="/storage/{{ $product->image }}" alt="">
                    @endif
                 </td>

                 <th>


                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete" />
                    </form>

                </th>
            </tr>
            {{-- ila kant empty kteb message  --}}
            @empty
            <tr>
                <td colspan="9" align="center"><h5>No Product Here !!. </h5></td>
            </tr>
            @endforelse

        </tbody>
    </table>

    {{-- {{$products->links()}} --}}

@endsection


