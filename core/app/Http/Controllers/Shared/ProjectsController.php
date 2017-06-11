<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\ProjectFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Project;

/**
 * @resource Project
 *
 * Projects are stored in the tbl_Projects table. They represent projects used by clients.
 */

class ProjectsController extends Controller
{
    /**
     * Display a list of all Projects.
     *
     * Returns a list of existing projects with the following data:
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
        return response()->json(Project::all()); 
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
     * Store a newly created Project in storage.
     *
     * @param  \Illuminate\Http\ProjectFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectFormRequest $request)
    {
        $data = [
            'short_name' => $request->get('short_name'),
            'long_name' => $request->get('long_name', null),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $project = Project::create($data);
        
        return response()->json(['msg'=>'New project created successfully'],201);
    }

    /**
     * Display the Project.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);        
        return response()->json($project);
    }
    
    /**
     * Display the Project Clients.
     * 
     * @param  string(36)  $id     *
     * @return \Illuminate\Http\Response
     */
    public function clients($id)
    {
        $clients = Project::find($id)->clients()->get();        
        return response()->json($clients);
    }
    
    /**
     * Attach a Client to the Project.
     * 
     * @param  \Illuminate\Http\Request  $request[client_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function attachClient(Request $request, $id)
    {
        $project = Project::find($id);
        $project->clients()->attach($request->get('client_uuid'));
        
        return response()->json(['msg'=>'Client attached to project successfully'],201);
    }
    
     /**
     * Detach a Client from the Project.
     * 
     * @param  \Illuminate\Http\Request  $request[client_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function detachClient(Request $request, $id)
    {
        $project = Project::find($id);
        $project->clients()->detach($request->get('client_uuid'));
        
        return response()->json(['msg'=>'Client detached from project successfully'],201);
    }
    
    /**
     * Display the Project Products.
     * 
     * @param  string(36)  $id     *
     * @return \Illuminate\Http\Response
     */
    public function products($id)
    {
        $products = Project::find($id)->products()->get();        
        return response()->json($products);
    }
    
    /**
     * Attach a Product to the Project.
     * 
     * @param  \Illuminate\Http\Request  $request[product_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function attachProduct(Request $request, $id)
    {
        $project = Project::find($id);
        $project->products()->attach($request->get('product_uuid'));
        
        return response()->json(['msg'=>'Product attached to project successfully'],201);
    }
    
     /**
     * Detach a Product from the Project.
     * 
     * @param  \Illuminate\Http\Request  $request[product_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function detachProduct(Request $request, $id)
    {
        $project = Project::find($id);
        $project->products()->detach($request->get('product_uuid'));
        
        return response()->json(['msg'=>'Product detached from project successfully'],201);
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
     * Update an existing Project in storage.
     *
     * @param  \Illuminate\Http\ProjectFormRequest  $request
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectFormRequest $request, $id)
    {
        $project = Project::find($id);
        
        $data = [
            'short_name' => $request->get('short_name'),
            'long_name' => $request->get('long_name', null),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $project->update($data);
        
        return response()->json(['msg'=>'Project updated successfully'],201);
    }

    /**
     * Remove the Project from storage.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $project->update($data);
        $project->delete($data);
        
        return response()->json(['msg'=>'Project deleted successfully'],201);
    }
}
