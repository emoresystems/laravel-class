@extends('layouts.front')

@section('content')

<h1>create form</h1>

<form action="/store" method="POST">
@csrf 
    <label for="title">Enter Post Title</label>
    <input type="text" name="title" id="title">

    <br><br><br>

    <label for="location">Enter location</label>
    <input type="text" name="location" id="location">

    <br><br>

    <button type="submit">Create event</button>
</form>
@endsection