<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\DataTypeFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\DataType;

class DataTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(DataType::all());
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
    public function store(DataTypeFormRequest $request)
    {
        $data = [
            'data_type' => $request->get('data_type'),
            'data_length' => $request->get('data_length'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $datatype = DataType::create($data);
        
        return response()->json(['msg'=>'New datatype created successfully'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datatype = DataType::find($id);
        
        return response()->json($datatype);
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
    public function update(DataTypeFormRequest $request, $id)
    {
        $datatype = DataType::find($id);
        
        $data = [
            'data_type' => $request->get('data_type'),
            'data_length' => $request->get('data_length'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $datatype->update($data);
        
        return response()->json(['msg'=>'DataType updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datatype = DataType::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $datatype->update($data);
        $datatype->delete($data);
        
        return response()->json(['msg'=>'DataType deleted success'],201);
    }
}
