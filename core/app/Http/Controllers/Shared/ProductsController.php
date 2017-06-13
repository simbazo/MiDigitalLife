<?php

namespace App\Http\Controllers\Shared;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests\Shared\ProductFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Product;
use App\Models\Shared\Control;

/**
 * @resource Product
 * 
 * Products are stored in the tbl_products table. They share a many-to-many relationship with clients.
 */

class ProductsController extends Controller
{
    /**
     * Display a listing of all Products.
     * 
     * Returns a list of existing products with the following data:
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
        return response()->json(Product::all()); 
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a new Product in storage.
     *
     * @param  \Illuminate\Http\ProductFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $data = [
            'short_name' => $request->get('short_name'),
            'long_name' => $request->get('long_name', null),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $product = Product::create($data);
        
        return response()->json(['msg'=>'New product created success'], 201);
    }

    /**
     * Display the Product.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        
        return response()->json($product);
    }
    
    /**
     * Display a list of Projects that use this Product.
     * 
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function projects($id)
    {
        $projects = Product::find($id)->projects()->get();
        
        return response()->json($projects);
    }
    
    /**
     * Attach a Project to the Product.
     * 
     * @param  \Illuminate\Http\Request  $request[project_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function attachProject(Request $request, $id)
    {
        $product = Product::find($id);
        $product->projects()->attach($request->get('project_uuid'));
        
        return response()->json(['msg'=>'Project attached to product successfully'],201);
    }
    
     /**
     * Detach a Project from the Product.
     * 
     * @param  \Illuminate\Http\Request  $request[project_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function detachProject(Request $request, $id)
    {
        $product = Product::find($id);
        $product->projects()->detach($request->get('project_uuid'));
        
        return response()->json(['msg'=>'Project detached from product successfully'],201);
    }
    
    /**
     * Display a list of questions used by this Product.
     * 
     * @param  string(36) $id
     * @return \Illuminate\Http\Response
    */
    public function questions($id)
    {
        $questions = Product::find($id)->questions()->orderBy('product_question.order', 'asc')->get();
        return response()->json($questions);
    }
    
    /**
     * Attach a Question to the Product.
     * 
     * @param  \Illuminate\Http\Request  $request[question_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function attachQuestion(Request $request, $id)
    {
        $questionID = $request->get('question_uuid');
        $product = Product::find($id);
        $product->questions()->attach($questionID);
        
        //update product_question pivot table with order and grid values
        DB::table('product_question')
            ->where('product_uuid', $id)
            ->where('question_uuid', $questionID)
            ->update(['order' => $request->get('order'), 'grid' => $request->get('grid')]);
        
        return response()->json(['msg'=>'Question attached to product successfully'],201);
    }
    
     /**
     * Detach a Question from the Product.
     * 
     * @param  \Illuminate\Http\Request  $request[question_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function detachQuestion(Request $request, $id)
    {
        $product = Product::find($id);
        $product->questions()->detach($request->get('question_uuid'));
        
        return response()->json(['msg'=>'Question detached from product successfully'],201);
    }
    
    /**
     * Return the 'expoded' Product with:
     *  - Questions
     *      - Control
     *          -Attributes
     * 
     * @param  \Illuminate\Http\Request  $request[question_uuid]
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function form($id)
    {
        $product = Product::with('questions')->find($id);
        
        //$product->map(function ($product) {
            //$product['test'] = 'please ignore this';
            //foreach ($product->questions as $question) {
                //$control['controls'] = Control::with('attributes')->find($question->control_uuid);
                
            //}
            
            //return $product;
        //});
        
        $product->questions->map(function ($question) {
            $control = Control::with('attributes')->find($question->control_uuid);
            $question['control'] = $control;
            return $question;
        });
        
        return response()->json($product);
    }

    /**
     * Update the Product in storage.
     *
     * @param  \Illuminate\Http\ProductFormRequest  $request
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {
        $product = Product::find($id);
        
        $data = [
            'short_name' => $request->get('short_name'),
            'long_name' => $request->get('long_name', null),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $product->update($data);
        
        return response()->json(['msg'=>'Product updated success'],201);
    }

    /**
     * Remove the Product from storage.
     * 
     * Products use soft deletes.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $product->update($data);
        $product->delete($data);
        
        return response()->json(['msg'=>'Product deleted success'],201);
    }
}
