<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\ClientFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Client;

/**
 * @resource Client
 *
 * Clients are stored in the tbl_Clients table. They represent clients of miDigitalLife.
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
     *  - email
     *  - phone
     *  - fax
     *  - country_id
     *  - province
     *  - city
     *  - address_line1
     *  - address_line2
     *  - post_code
     *  - contact_person_fname
     *  - contact_person_lname
     *  - contact_person_email
     *  - contact_person_cell
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
            'email' => $request->get('email ', null),
            'phone' => $request->get('phone', null),
            'fax' => $request->get('fax', null),
            'country_id' => $request->get('country_id'),
            'province' => $request->get('province', null),
            'city' => $request->get('city', null),
            'address_line1' => $request->get('address_line1', null),
            'address_line2' => $request->get('address_line2', null),
            'post_code' => $request->get('post_code'),
            'contact_person_fname' => $request->get('contact_person_fname', null),
            'contact_person_lname' => $request->get('contact_person_lname', null),
            'contact_person_email' => $request->get('contact_person_email', null),
            'contact_person_cell' => $request->get('contact_person_cell', null),
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
    public function projects($id)
    {
        $projects = Client::find($id)->projects()->get();        
        return response()->json($projects);
    }
    
    /**
     * Attach a Project to the Client.
     * 
     * @param  \Illuminate\Http\Request  $request[project_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function attachProject(Request $request, $id)
    {
        $client = Client::find($id);
        $client->projects()->attach($request->get('project_uuid'));
        
        return response()->json(['msg'=>'Project attached to client successfully'],201);
    }
    
     /**
     * Detach a Project from the Client.
     * 
     * @param  \Illuminate\Http\Request  $request[project_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function detachProject(Request $request, $id)
    {
        $client = Client::find($id);
        $client->projects()->detach($request->get('project_uuid'));
        
        return response()->json(['msg'=>'Project detached from client successfully'],201);
    }
    
    /**
     * Display the Client Users.
     * 
     * @param  string(36)  $id     *
     * @return \Illuminate\Http\Response
     */
    public function users($id)
    {
        $users = Client::find($id)->users()->get();        
        return response()->json($users);
        //return "A list of users that belong to this client.";
    }
    
    /**
     * Attach a User to the Client.
     * 
     * @param  \Illuminate\Http\Request  $request[user_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function attachUser(Request $request, $id)
    {
        $client = Client::find($id);
        $client->users()->attach($request->get('user_uuid'));
        
        return response()->json(['msg'=>'User attached to client successfully'],201);
    }
    
     /**
     * Detach a User from the Client.
     * 
     * @param  \Illuminate\Http\Request  $request[user_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function detachUser(Request $request, $id)
    {
        $client = Client::find($id);
        $client->users()->detach($request->get('user_uuid'));
        
        return response()->json(['msg'=>'User detached from client successfully'],201);
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
            'email' => $request->get('email ', null),
            'phone' => $request->get('phone', null),
            'fax' => $request->get('fax', null),
            'country_id' => $request->get('country_id'),
            'province' => $request->get('province', null),
            'city' => $request->get('city', null),
            'address_line1' => $request->get('address_line1', null),
            'address_line2' => $request->get('address_line2', null),
            'post_code' => $request->get('post_code'),
            'contact_person_fname' => $request->get('contact_person_fname', null),
            'contact_person_lname' => $request->get('contact_person_lname', null),
            'contact_person_email' => $request->get('contact_person_email', null),
            'contact_person_cell' => $request->get('contact_person_cell', null),
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
