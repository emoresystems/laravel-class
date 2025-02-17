@extends('layouts.front')

@section('content')

<h1>edit event</h1>
<form action="{{ route('events.update', $event->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Enter Post Title</label>
    <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}">

    <br><br><br>

    <label for="location">Enter location</label>
    <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}">

    <br><br>

    <button type="submit">Create event</button>

</form>

@endsection