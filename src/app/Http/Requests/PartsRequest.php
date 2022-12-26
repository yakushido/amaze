<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartsRequest extends FormRequest
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
            'part_input' => 'required|string'
        ];
    }
    
    public function messages()
    {
        return [
            'part_input.required' => 'パーツ名を入力してください',
        ];
    }
}
