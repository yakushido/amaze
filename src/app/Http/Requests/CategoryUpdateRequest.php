<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'category_update' => 'required|string|max:255',
            'picture_update' => 'required|file|mimes:jpg,png,jpeg',
        ];
    }
    
    public function messages()
    {
        return [
            'category_update.required' => 'カテゴリー名を入力してください',
            'category_update.max' => '最大255文字です',
            'picture_update.required' => '写真を選択してください',
            'picture_update.mimes' => 'ファイル形式がjpg,png,jpeg以外は添付できません',
        ];
    }
}
