<?php

namespace App\Http\Controllers\Editor;

use Illuminate\Http\Request;
use App\Http\Requests\Editor\AttributeFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Editor\Attribute;

class AttributesController extends Controller
{
    /**
     * Display a list of Attributes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Attribute::all()); 
    }

    /**
     * Store a newly created Attribute in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeFormRequest $request)
    {
        $data = [
            'attribute' => $request->get('attribute'),
            'value' => $request->get('value'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $attribute = Attribute::create($data);
        
        return response()->json(['msg'=>'New Attribute created successfully'],201);
    }

    /**
     * Display the Attribute.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attribute = Attribute::find($id);
        
        return response()->json($attribute);
    }
    
     /**
     * Display the Controls that use this Attribute.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function controls($id)
    {
        $controls = Attribute::find($id)->controls()->get();
        
        return response()->json($controls);
    }

    /**
     * Update the Attribute in storage.
     *
     * @param  \Illuminate\Http\AttributeFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeFormRequest $request, $id)
    {
        $attribute = Attribute::find($id);
        
        $data = [
            'attribute' => $request->get('attribute'),
            'value' => $request->get('value'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $attribute->update($data);
        
        return response()->json(['msg'=>'Attribute updated successfully'],201);
    }

    /**
     * Remove the Attribute from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attribute = Attribute::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $attribute->update($data);
        $attribute->delete($data);
        
        return response()->json(['msg'=>'Attribute deleted success'],201);
    }
}
