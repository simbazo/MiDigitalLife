<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\ControlAttributeFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\ControlAttribute;

class ControlAttributesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ControlAttribute::all()); 
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
    public function store(ControlAttributeFormRequest $request)
    {
        $data = [
            'attribute' => $request->get('attribute'),
            'value' => $request->get('value'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controlattribute = ControlAttribute::create($data);
        
        return response()->json(['msg'=>'New ControlAttribute created successfully'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $controlattribute = ControlAttribute::find($id);
        
        return response()->json($controlattribute);
    }
    
    public function controltypes($id)
    {
        $controltypes = ControlAttribute::find($id)->controltypes()->get();
        
        return response()->json($controltypes);
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
    public function update(ControlAttributeFormRequest $request, $id)
    {
        $controlattribute = ControlAttribute::find($id);
        
        $data = [
            'attribute' => $request->get('attribute'),
            'value' => $request->get('value'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controlattribute->update($data);
        
        return response()->json(['msg'=>'ControlAttribute updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $controlattribute = ControlAttribute::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controlattribute->update($data);
        $controlattribute->delete($data);
        
        return response()->json(['msg'=>'ControlAttribute deleted success'],201);
    }
}
