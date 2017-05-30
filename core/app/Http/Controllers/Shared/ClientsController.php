<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\ClientFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Client;

/**
 * @resource Client
 *
 * Clients are stored in the tbl_Clients table. They represent clients of miDigitalLife
 */

class ClientsController extends Controller
{
    /**
     * Display a list of all Clients.
     *
     * Returns a list of existing clients with the following data:
     *  - uuid
     *  - short_name
     *  - long_name
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
        return response()->json(Client::all()); 
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
     * Store a newly created Client in storage.
     *
     * @param  \Illuminate\Http\ClientFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientFormRequest $request)
    {
        $data = [
            'short_name' => $request->get('short_name'),
            'long_name' => $request->get('long_name', null),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $client = Client::create($data);
        
        return response()->json(['msg'=>'New client created success'],201);
    }

    /**
     * Display the Client.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        
        return response()->json($client);
    }
    
    /**
     * Display the Client Products.
     * 
     * @param  string(36)  $id     *
     * @return \Illuminate\Http\Response
     */
    public function products($id)
    {
        $products = Client::find($id)->products()->get();
        
        return response()->json($products);
    }

    /**
     * Show the form for editing the Client.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //implement
    }

    /**
     * Update an existing Client in storage.
     *
     * @param  \Illuminate\Http\ClientFormRequest  $request
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientFormRequest $request, $id)
    {
        $client = Client::find($id);
        
        $data = [
            'short_name' => $request->get('short_name'),
            'long_name' => $request->get('long_name', null),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $client->update($data);
        
        return response()->json(['msg'=>'Client updated success'],201);
    }

    /**
     * Remove the Client from storage.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $client->update($data);
        $client->delete($data);
        
        return response()->json(['msg'=>'Client deleted success'],201);
    }
}