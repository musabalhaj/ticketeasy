<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Event\CreateEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 1) {
            return view('Admin/Event.index')
            ->with('Events', Event::all())
            ->with('Users', User::where('role',2)->get());
        }
        else{
            return view('Admin/Event.organizerEvent')
            ->with('Events', Event::where('organizer_id',auth()->user()->id)->get());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request ,Event $Event)
    {
        
        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        // uplode the Event image
        request()->image->move(public_path('storage/Events'),$imageName);

        $Event->create([
            'title'=>$request->title,
            'description'=>$request->description,
            'tickets'=>$request->tickets,
            'price'=>$request->price,
            'date'=>$request->date,
            'location'=>$request->location,
            'image'=>$imageName,
            'organizer_id'=>auth()->user()->id
        ]);

        session()->flash('success','Added Successfully');
        
        return redirect(route('Event.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $Event)
    {
        return view('Admin/Event.show')->with('Event',$Event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $Event)
    {
        return view('Admin/Event.edit')->with('Event',$Event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $Event)
    {
        //check if the user want to update event image
        if ($request->hasFile('image')) {
            
            //check if image exist in the events folder.
            if (file_exists(public_path('storage/Events/'.$Event->image))) {

                unlink('storage/Events/'.$Event->image);  //delete event old image
            } 
            
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            
            //uplode the event new image
            request()->image->move(public_path('storage/Events'),$imageName); 
            
            //update the event data
            $Event->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'tickets'=>$request->tickets,
                'price'=>$request->price,
                'date'=>$request->date,
                'location'=>$request->location,
                'image'=>$imageName
            ]);
        }
        // if the user donnot want to update event image
        else{
            //update the event data
            $Event->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'tickets'=>$request->tickets,
                'price'=>$request->price,
                'date'=>$request->date,
                'location'=>$request->location,
            ]);
        }

        session()->flash('success','Updated Successfully');
        
        return redirect(route('Event.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $Event)
    {
        //check if image exist in the events folder.
        if (file_exists(public_path('storage/Events/'.$Event->image))) {

            unlink('storage/Events/'.$Event->image);

        }
        //delete event data
        $Event->delete();

        session()->flash('success','Deleted Successfully');
        
        return redirect(route('Event.index'));
    }
}
