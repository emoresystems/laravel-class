@extends('layouts.front')

@section('content')

<div class="container">
    <h1>Events Page</h1>

   <div class="parent d-flex m-5 flex-wrap justify-content-between ">
   @foreach ( $events as $event)
    <div class="card bg-danger text-white p-5" style="width: 250px; ">
        <p class="id">{{ $event->id }}</p>
        <h1>{{ $event->title }}</h1>
        <p>{{ $event->location }}</p>
    </div>
    @endforeach
   </div>


</div>
@endsection