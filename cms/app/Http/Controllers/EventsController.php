<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index')->with('events', Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create the event
        $event = Event::create([
            'title' => $request->title,
            'content' => $request->content,
            'held_on' => $request->held_on,
            'user_id' => auth()->user()->id
        ]);

        //flash message
        session()->flash('success', 'Event created successfully.');

        return redirect(route('events.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.create')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $data = $request->only(['title', 'content', 'held_on']);

        //update attribute
        $event->update($data);

        //flash message
        session()->flash('success', 'Event updated successfully.');

        //redirect
        return redirect(route('events.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Cannot use route modal binding (do not care about trashed data) because the event is not in the database
    public function destroy(Event $event)
    {
        $event->delete();
  
        session()->flash('success', 'Event deleted successfully.');

        return redirect(route('events.index'));
    }

}
