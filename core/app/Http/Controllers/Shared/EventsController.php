<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\EventFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Product;
use App\Models\Shared\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Event::all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        $data = [
            'product_id' => $request->get('product_id'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $event = Event::create($data);
        
        return response()->json(['msg'=>'New event created success'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        
        return response()->json($event);
    }
    
    public function showAnswers($id)
    {
        return '[{"response":"show a list of answers for this event"}]';
        
        $event = Event::find($id);
        
        return response()->json($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, $id)
    {
        $event = Event::find($id);
        
        $data = [
            'product_id' => $request->get('product_id'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $event->update($data);
        
        return response()->json(['msg'=>'Event updated success'],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $event->update($data);
        $event->delete($data);
        
        return response()->json(['msg'=>'Event deleted success'],201);
    }
}
