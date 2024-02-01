{{-- @extends('layouts.base') --}}
@extends('layouts.Dashboard_nav')
@section('title' , 'Products')
@section('content')
@include('sweetalert::alert')
@include('layouts.errors-notif')
<br>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Product List </h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Image</th>
                {{-- <th>Color</th> --}}
                {{-- <th>Size</th> --}}
                <th>Status</th>

               <th  style="padding-left: 50px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- Ila kant 3amra dir Forelse  --}}
            @forelse  ($products as $product )
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td align="center">
                    {{-- Category BelongsTo Relationship --}}
                    @if ($product->category )
                    <a href="{{ route('categories.show', $product->category_id) }}" class="btn btn-link">
                        <span class="badge bg-warning text-dark">
                            {{ $product->category->name }}
                        </span>
                    </a>
                    @endif
                </td>

                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }} MAD</td>
                <td><img width="100px" src="storage/{{ $product->image }}" alt=""></th>
                {{-- <td>{{ $product->color }}</td> --}}
                {{-- <td>{{$product->size }}</td> --}}

                {{-- <td class="badge bg-info text-dark">
                        {{ $product->status }}
                </td> --}}
                <td align="center">
                    {{-- Category BelongsTo Relationship --}}
                    @if ($product->status)
                    <a href="#" class="btn btn-link">
                        <span class="badge bg-info text-dark">
                            {{ $product->status }}
                        </span>
                    </a>
                    @endif
                </td>

                <th>
                    <div class="btn-group gap-2">
                        <a href="{{ route('products.edit', $product) }}"  class="btn btn-success">Update</a>

                        <form action="{{ route('products.destroy', $product) }}" method="POST">
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
                <td colspan="9" align="center"><h5>No Products. </h5></td>
            </tr>
            @endforelse

        </tbody>
    </table>
    {{$products->links()}}
</div>


@endsection
