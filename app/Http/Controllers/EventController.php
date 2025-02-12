<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::all();

        return view('events', compact('events'));
    }


    public function create()
    {
        return view('createForm');
    }


    public function store(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:25',
        ]);

        Event::create($request->all());

        return redirect('/events')->with('success', 'Event has been created successfully');
    }

}
