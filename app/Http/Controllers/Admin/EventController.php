<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Tag;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();

        return view("admin.events.index", compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tags = Tag::all();

        return view("admin.events.create", compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $validati = $request->validated();

        $newEvent = new Event();
        $newEvent->fill($validati);
        $newEvent->save();

        if($request->tags){
            $newEvent->tags()->attach($request->tags);
        }


        return redirect()->route("admin.events.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dettaglio = Event::find($id);

       return view("admin.events.show", compact("dettaglio"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $event)
    {
        return view("admin.events.edit", compact("event"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $data= $request->all();

        $event->name = $data["name"];
        $event->description = $data['description'];
        $event->location = $data['location'];
        $event->date = $data['date'];
        $event->update();

        return redirect()->route('admin.events.show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(event $event)
    {
        
        $event->delete();

        return redirect()->route('admin.events.index'); 
        
    }
}
