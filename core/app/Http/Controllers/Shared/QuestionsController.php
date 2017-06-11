<?php

namespace App\Http\Controllers\Shared;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests\Shared\QuestionFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Question;

/**
 * @resource Question
 * 
 * Questions are stored in the tbl_Questions table. They share a many-to-many relationship with products, allowing many products to share questions.
 */

class QuestionsController extends Controller
{
    /**
     * Display a listing of all Questions.
     * 
     * Returns a list of existing questions with the following data:
     *  - uuid
     *  - question
     *  - data_type_uuid
     *  - control_type_uuid
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
        return response()->json(Question::with('datatype', 'controltype')->get());
    }

    /**
     * Show the form for creating a new Question.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a new Question in storage.
     *
     * @param  \Illuminate\Http\QuestionFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionFormRequest $request)
    {
        $data = [
            'question' => $request->get('question'),
            'data_type_id' => $request->get('data_type_id'),
            'control_type_id' => $request->get('control_type_id'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $question = Question::create($data);
        
        return response()->json(['msg'=>'New question created successfully'],201);
    }

    /**
     * Display a Question.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::with('datatype', 'controltype')->find($id);
        
        return response()->json($question);
    }
    
    public function products($id)
    {
        $products = Question::find($id)->products()->get();
        
        return response()->json($products);
    }
    
    public function controls($id)
    {
        $controls = DB::table('control_attributes')
            //->join('contacts', 'users.id', '=', 'contacts.user_id')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('control_attributes.*')
            ->get();
        
        return response()->json($controls);
    }

    /**
     * Show the form for editing the Question.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the Question in storage.
     *
     * @param  \Illuminate\Http\QuestionFormRequest  $request
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionFormRequest $request, $id)
    {
        $question = Question::find($id);
        
        $data = [
            'question' => $request->get('question'),
            'data_type_id' => $request->get('data_type_id'),
            'control_type_id' => $request->get('control_type_id'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $question->update($data);
        
        return response()->json(['msg'=>'Question updated successfully'],201);
    }

    /**
     * Remove the Question from storage.
     * 
     * Questions use soft deletes
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $question->update($data);
        $question->delete($data); 
        
        return response()->json(['msg'=>'Question deleted success'],201);
    }
}
