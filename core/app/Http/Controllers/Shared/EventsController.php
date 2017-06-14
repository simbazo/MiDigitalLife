<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\EventFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Event;

class EventsController extends Controller
{
    /**
     * Display a list of Events.
     * - order by created_at desc
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Event::orderBy('created_at', 'desc')->get()); 
    }

    /**
     * Store a newly created Event in storage.
     *
     * @param  \Illuminate\Http\EventFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        $data = [
            'product_uuid' => $request->get('product_uuid'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $event = Event::create($data);
        
        return response()->json(['msg'=>'New event created successfully'], 201);
    }

    /**
     * Display the Event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        
        return response()->json($event);
    }
    
    /**
     * Display the Product for this Event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product($id)
    {
        $product = Event::find($id)->product()->get();
        return response()->json($product);
    }
    
    /**
     * Display the answers for this Event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function answers($id)
    {
        $answers = Event::find($id)->answers()->get();
        return response()->json($answers);
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
            'product_id' => $request->get('product_uuid'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $event->update($data);
        
        return response()->json(['msg'=>'Event updated successfully'],201);
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
