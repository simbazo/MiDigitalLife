<?php

namespace App\Http\Requests\Shared;

use Illuminate\Foundation\Http\FormRequest;

class QuestionFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'question'=>'required',
            'data_type_id'=>'required',
            'control_type_id'=>'required',
            'user_created'=>'optional',
            'user_updated'=>'optional',
            'user_deleted'=>'optional'
        ];
    }
}
