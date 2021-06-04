<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'unique:users', 'email'],
            'name' => ['required', 'unique:users', 'min:3', 'max: 30'],
            'password' => ['required'],
            'password_confirm' => ['required', 'same:password'],
            'device_name' => ['nullable','alpha_dash']
        ];
    }
}
