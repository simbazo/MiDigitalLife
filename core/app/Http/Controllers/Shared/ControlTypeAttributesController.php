<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\ControlTypeAttributeFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\ControlTypeAttribute;

class ControlTypeAttributesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ControlTypeAttribute::all()); 
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
    public function store(ControlTypeAttributeFormRequest $request)
    {
        $data = [
            'attribute_name' => $request->get('attribute'),
            'attribute_value' => $request->get('value'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controltypeattribute = ControlTypeAttribute::create($data);
        
        return response()->json(['msg'=>'New controltypeattribute created successfully'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $controltypeattribute = ControlTypeAttribute::find($id);
        
        return response()->json($controltypeattribute);
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
    public function update(ControlTypeAttributeFormRequest $request, $id)
    {
        $controltypeattribute = ControlTypeAttribute::find($id);
        
        $data = [
            'attribute_name' => $request->get('attribute'),
            'attribute_value' => $request->get('value'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controltypeattribute->update($data);
        
        return response()->json(['msg'=>'ControlTypeAttribute updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $controltypeattribute = ControlTypeAttribute::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controltypeattribute->update($data);
        $controltypeattribute->delete($data);
        
        return response()->json(['msg'=>'ControlTypeAttribute deleted success'],201);
    }
}
