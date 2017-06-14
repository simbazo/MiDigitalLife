<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Requests\Shared\AnswerFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Shared\Answer;

/**
 * @resource Answer
 * 
 * Answer are stored in the tbl_controls table. Each answer has one question and belongs to one event.
 */

class AnswersController extends Controller
{
    /**
     * Display a list of Answers.
     * 
     * Returns a list of existing answers with the following data:
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
        return response()->json(Answer::with('event', 'question')->get());
    }

    /**
     * Store a new Answer in storage.
     *
     * @param  \Illuminate\Http\AnswerFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnswerFormRequest $request)
    {
        $data = [
            'event_uuid' => $request->get('event_uuid'),
            'question_uuid' => $request->get('question_uuid'),
            'answer' => $request->get('answer'),
            'user_created'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $answer = Answer::create($data);
        
        return response()->json(['msg'=>'New answer created successfully'],201);
    }

    /**
     * Display the Answer.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $answer = Answer::with('event', 'question')->find($id);
        
        return response()->json($answer);
    }
     
    /**
     * Update the Answer in storage.
     *
     * @param  \Illuminate\Http\AnswerFormRequest  $request
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnswerFormRequest $request, $id)
    {
        $answer = Answer::find($id);
        
        $data = [
            'event-uuid' => $request->get('event_uuid'),
            'question_uuid' => $request->get('question_uuid'),
            'answer' => $request->get('answer'),
            'user_updated'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $answer->update($data);
        
        return response()->json(['msg'=>'Answer updated successfully'],201);
    }

    /**
     * Remove the Answer from storage.
     *
     * @param  string(32)  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = Answer::find($id);
        
        $data = [
            'user_deleted'=> '524385af-9fce-4d75-b7a1-09119117491f' //auth()->user()->uuid
        ];
        
        $answer->update($data);
        $answer->delete($data);
        
        return response()->json(['msg'=>'Answer deleted successfully'],201);
    }
}
