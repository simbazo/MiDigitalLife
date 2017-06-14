<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\ControlFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Control;

/**
 * @resource Control
 * 
 * Controls are stored in the tbl_controls table. Each question has one control and each control may have many attributes.
 */

class ControlsController extends Controller
{
    /**
     * Display a listing of Controls.
     * 
     * Returns a list of existing controls with the following data:
     *  - uuid
     *  - name must be unique for specificity (eg, 'button primary save')
     *  - type (which matches an HTML5 input tag's type attribute)
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
        //return response()->json(Control::with('attributes')->get());
        return response()->json(Control::with('attributes')->get());
    }

    /**
     * Store a new Control in storage.
     *
     * @param  \Illuminate\Http\ControlFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ControlFormRequest $request)
    {
        $data = [
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $control = Control::create($data);
        
        return response()->json(['msg'=>'New control created successfully'],201);
    }

    /**
     * Display the Control.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $control = Control::with('attributes')->find($id);
        
        return response()->json($control);
    }
    
    /**
     * Display a list of Attributes for the Control.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function attributes($id)
    {
        $attributes = Control::find($id)->attributes()->get();
        
        return response()->json($attributes);
    }
    
    /**
     * Attach a Attribute to the Control.
     * 
     * @param  \Illuminate\Http\Request  $request[attribute_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function attachAttribute(Request $request, $id)
    {
        $control = Control::find($id);
        $control->attributes()->attach($request->get('attribute_uuid'));
        
        return response()->json(['msg'=>'Attribute attached to control successfully'],201);
    }
    
     /**
     * Detach a Attribute from the Control.
     * 
     * @param  \Illuminate\Http\Request  $request[attribute_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function detachAttribute(Request $request, $id)
    {
        $control = Control::find($id);
        $control->attributes()->detach($request->get('attribute_uuid'));
        
        return response()->json(['msg'=>'Attribute detached from control successfully'],201);
    }

    /**
     * Update the Control in storage.
     *
     * @param  \Illuminate\Http\ControlFormRequest  $request
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ControlFormRequest $request, $id)
    {
        $control = Control::find($id);
        
        $data = [
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $control->update($data);
        
        return response()->json(['msg'=>'Control updated successfully'],201);
    }

    /**
     * Remove the Control from storage.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $control = Control::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $control->update($data);
        $control->delete($data);
        
        return response()->json(['msg'=>'Control deleted success'],201);
    }
}
