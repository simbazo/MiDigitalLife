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
     *  - control_uuid
     *      - control
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
        //return response()->json(Question::with('control')->get());
        return response()->json(Question::with('control')->get());
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
            'short_question' => $request->get('short_question'),
            'long_question' => $request->get('long_question'),
            'control_uuid' => $request->get('control_uuid'),
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
        $question = Question::with('control')->find($id);
        //$question = Question::find($id);
        
        return response()->json($question);
    }
    
    /**
     * Display a list of Products that have this Question.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function products($id)
    {
        $products = Question::find($id)->products()->get();
        
        return response()->json($products);
    }
    
    /**
     * Display the Control that is used to answer this Question.
     *
     * @param  string(36)  $id
     * @return \Illuminate\Http\Response
     */
    public function control($id)
    {
        $control = Question::find($id)->control()->get();        
        return response()->json($control);
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
            'short_question' => $request->get('short_question'),
            'long_question' => $request->get('long_question'),
            'control_uuid' => $request->get('control_uuid'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $question->update($data);
        
        return response()->json(['msg'=>'Question updated successfully'],201);
    }

    /**
     * Remove the Question from storage.
     * 
     * Questions use soft deletes.
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
