<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\ControlTypeFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\ControlType;

/**
 * @resource ControlType
 * 
 * Control types are stored in the tbl_control_types table. Each question has one control_type and each control type has many control type attributes.
 */

class ControlTypesController extends Controller
{
    /**
     * Display a listing of ControlTypes.
     * 
     * Returns a list of existing control types with the following data:
     *  - uuid
     *  - control_type (which matches an HTML tag's type attribute)
     *  - control_type (which matches an HTML tag)
     *  - user_created
     *  - user_updated
     *  - user_deleted
     *  - created_at
     *  - updated_at
     *  - deleted_at
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ControlType::all()); 
    }

    /**
     * Show the form for creating a new ControlType.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a new ControlType in storage.
     *
     * @param  \Illuminate\Http\ControlTypeFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ControlTypeFormRequest $request)
    {
        $data = [
            'control_type' => $request->get('control_type'),
            'control_tag' => $request->get('control_tag'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controltype = ControlType::create($data);
        
        return response()->json(['msg'=>'New controltype created successfully'],201);
    }

    /**
     * Display the ControlType.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $controltype = ControlType::find($id);
        
        return response()->json($controltype);
    }
    
    /**
     * Display a list of ControlTypeAttributes for the ControlType.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function attributes($id)
    {
        $attributes = ControlType::find($id)->attributes()->get();
        
        return response()->json($attributes);
    }

    /**
     * Show the form for editing the sControlType.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the sControlType in storage.
     *
     * @param  \Illuminate\Http\ControlTypeFormRequest  $request
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ControlTypeFormRequest $request, $id)
    {
        $controltype = ControlType::find($id);
        
        $data = [
            'control_type' => $request->get('control_type'),
            'control_tag' => $request->get('control_tag'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controltype->update($data);
        
        return response()->json(['msg'=>'ControlType updated successfully'],201);
    }

    /**
     * Remove the ControlType from storage.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $controltype = ControlType::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $controltype->update($data);
        $controltype->delete($data);
        
        return response()->json(['msg'=>'ControlType deleted success'],201);
    }
}
