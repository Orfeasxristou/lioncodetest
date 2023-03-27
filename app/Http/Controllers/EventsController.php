<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\User;
use App\Models\topics;
use App\Models\lessons;
use App\Models\instructors;
use App\Models\event_user;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Http\Resources\eventResource;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $users=User::first();
       return eventResource::collection(

        Events::where('user_id',$users->id)->get()

       ); 
        // $users=User::find(4);
        //  // $lessons=lessons::find(45556);

        //  // return $topics=topics::where('topic_id',$->event_id)->get();

        // return Events::where('user_id',$users->id)->get();
    
        
        
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Events $events)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsRequest $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        //
    }
}
