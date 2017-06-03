<?php

namespace App\Http\Controllers\Shared;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests\Shared\ProductFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Product;
use App\Models\Shared\ControlType;

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
     * Display a list of Clients that use this Product.
     * 
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function clients($id)
    {
        $clients = Product::find($id)->clients()->get();
        
        return response()->json($clients);
    }
    
    /**
     * Display a list of questions used by this Product.
     * 
     * @param  string(36) $id
     * @return \Illuminate\Http\Response
    */
    public function questions($id)
    {
        $output = array();
        
        $items = Product::find($id)->questions()->orderBy('product_question.order', 'asc')->get();
        
        foreach($items as $item) {
            $controlType = ControlType::find($item->control_type_id)->with('attributes')->get()->toArray();
            $item = $item->toArray();
            array_push($item, $controlType);
            array_push($output, $item);
        }
        
        return response()->json($output);
    }
    
    public function edit($id)
    {
        //
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
