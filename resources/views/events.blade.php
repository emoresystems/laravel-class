@extends('layouts.front')

@section('content')

<div class="container mt-4">
    <h1 class="text-center mb-4">Events Page</h1>

    <!-- receive session message -->
    @if (session('success'))
    <div>
        {{ session('success') }}
    </div>
    @endif
    <a href="/CreateEvent">
        <button class="btn btn-danger mb-5">Create an event</button>
    </a>

    <div class="row">
        @foreach ($events as $event)
        <div class="col-md-4 mb-4">
            <div class="card bg-danger text-white shadow rounded border-0 p-4 h-100">
                <h5 class="card-title fw-bold">{{ $event->title }}</h5>
                <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                <p class="small">Event ID: {{ $event->id }}</p>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection