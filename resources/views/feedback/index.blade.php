
{{-- @extends('layouts.base') --}}
{{-- @extends('layouts.Dashboard_nav') --}}
@extends('layouts.DashAdmin_nav')
@section('title' , 'Feedbacks')
@section('content')
@include('layouts.errors-notif')
@include('sweetalert::alert')
<br>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Feedback List </h1>
        <a href="{{ route('feedback.create') }}" class="btn btn-primary">Create Feedback</a>
    </div>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Job</th>
                <th>Feedback</th>
                <th>Image</th>
               <th  style="padding-left: 50px;">Actions</th>
            </tr>
        </thead>

        <tbody>
            {{-- Ila kant 3amra dir Forelse  --}}
            @forelse ($feedbacks as $feedback )
            <tr>
                <td>{{ $feedback->id }}</td>
                <td>{{ $feedback->name }}</td>
                <td>{{ $feedback->job }}</td>
                <td>{{ $feedback->feedback}}</td>
                <td><img width="100px" src="storage/{{ $feedback->image }}" alt=""></th>

                <th>
                    <div class="btn-group gap-2">
                        <a href="{{ route('feedback.edit', $feedback) }}"  class="btn btn-success">Update</a>

                        <form action="{{ route('feedback.destroy', $feedback) }}" method="POST">
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
                <td colspan="9" align="center"><h5>No Feedback. </h5></td>
            </tr>
            @endforelse

        </tbody>
    </table>
    {{$feedbacks->links()}}
</div>


@endsection

