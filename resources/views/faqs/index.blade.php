@extends('layouts.DashAdmin_nav')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">FAQ</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/admin/dashboard" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">FAQ</span>
            </li>
        </ul>
    </div>
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">Frequently Asked Questions</h4>
            </div>



        <div class="row">
            @forelse ($Faqs as $Faq)
            <div class="col-lg-6">
                <div class="accordion accordion-flush mt-4 faq-wrapper" id="accordionFlushExample">
                    <div class="accordion-item border-0 mb-5">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white p-0 fs-16 fw-semibold text-dark control"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse{{ $loop->iteration }}"
                                aria-expanded="false" aria-controls="flush-collapse{{ $loop->iteration }}">
                                {{ $Faq->questions }}
                            </button>
                        </h2>
                        <div id="flush-collapse{{ $loop->iteration }}" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body pt-4 p-0">
                                <p>{{ $Faq->answers }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <h4>There are no questions or answers here!</h4>
            @endforelse
        </div>

        {{-- Remove all  --}}
        <div>
            <form action="{{ route('faq.destroy-all') }}" method="POST" class="text-decoration-none text-gray-light ms-1">
                @csrf
                @method('DELETE')
                <input type="submit" value="Remove" class="btn btn-danger btn-sm px-3">
            </form>
        </div>


        </div>
    </div>
    </div>
@endsection
