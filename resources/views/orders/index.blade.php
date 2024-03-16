
{{--
<h1>List of Orders</h1>
<ul>
    @foreach ($orders as $order)
        <li>{{ $order->id }} - {{ $order->shipping_address }} - {{ $order->total_cost }}</li>
    @endforeach

</ul> --}}

{{-- @extends('layouts.DashProfile') --}}
{{-- @extends('layouts.DashTry') --}}
@extends('layouts.DashAdmin_nav')
@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">My Orders</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">My Orders</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-semibold fs-18 border-bottom pb-20 mb-20">My Orders</h4>

                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                <h4 class="fw-bold fs-18 mb-0 text-center">Recent Orders</h4>
                                <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">
                                    <form class="src-form position-relative">
                                        <input type="text" class="form-control h-40 bg-body-bg border-0 text-dark"
                                            placeholder="Search here..">
                                        <button type="submit"
                                            class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0 pe-3">
                                            <i data-feather="search"
                                                style="stroke: #757FEF; width: 20px; height: 20px;"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="default-table-area recent-orders">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-primary">Order ID </th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Size</th>
                                                <th scope="col">color</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">quantity</th>
                                                <th scope="col">Date</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @forelse ($OrderItems as $item )
                                          <tr>
                                            <td class="fs-15 fw-semibold">#{{ $item->id }}</td>
                                            <td>
                                                 <a href="#" class="d-flex align-items-center">
                                                        <img src="{{ asset('images/' . json_decode($item->product->images)[0]) }}" class="wh-55 rounded-3" width="60" height="50" alt="Product Image">
                                                    <h6 class="fw-semibold">{{ $item->product->name}}</h6>
                                                </a>
                                            </td>
                                            <td>{{$item->order->Full_Name}}</td>
                                            <td>{{$item->size}}</td>
                                            <td>{{$item->color}}</td>
                                            <td>${{$item->order->total_cost}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->updated_at->format('d-m-y')}}</td>


                                        </tr>
                                          @empty
                                              <h4>No Data Found!</h4>
                                          @endforelse

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

