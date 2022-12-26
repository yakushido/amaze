<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_input' => 'required|string|max:255',
            'picture' => 'required|file|mimes:jpg,png,jpeg',
        ];
    }
    
    public function messages()
    {
        return [
            'category_input.required' => 'カテゴリー名を入力してください',
            'category_input.max' => '最大255文字です',
            'picture.required' => '写真を選択してください',
            'picture.mimes' => 'ファイル形式がjpg,png,jpeg以外は添付できません',
        ];
    }
}
