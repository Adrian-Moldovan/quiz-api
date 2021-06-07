<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionPostRequest extends FormRequest
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
            'question' => ['required', 'unique:questions', 'min:3', 'max:255'],
            'answers' => ['required', 'array', 'min:4', 'max:4'],
            'answers.*.text' => ['required', 'min: 3', 'max: 255'],
            'answers.*.right' => ['required', 'regex: /^0|1$/']
        ];
    }
}
