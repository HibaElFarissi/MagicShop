{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <h1>Wishlist</h1>

    @foreach ($wishlistItems as $item)
        <div>
            <p>{{ $item->product->name }}</p>
            <p>{{ $item->product->price }}</p>
            <p>{{ $item->product->description }}</p>
            <p>{{ $item->product->slug }}</p>
           <p>
            <form method="POST" action="{{ route('wishlist.remove', $item) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Remove from Wishlist</button>
            </form>
        </p>

        </div>
    @endforeach
{{-- @endsection --}}
