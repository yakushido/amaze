<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
        if( request('priceB') != null ){
            return [
                'menu_input' => 'required',
                'priceA' => 'required|integer',
                'priceB' => 'integer',
                'category_select' => 'required',
            ];
        }
        elseif( request('priceB') === null ){
            return [
                'menu_input' => 'required',
                'priceA' => 'required|integer',
                'category_select' => 'required',
            ];
        }
    }

    public function messages()
    {
        return [
            'menu_input.required' => 'メニュー名を入力してください',
            'priceA.required' => '価格を入力してください',
            'category_select.required' => 'カテゴリーを選択してください',
            'priceA.integer' => '数字で入力してください',
            'priceB.integer' => '数字で入力してください',
        ];
    }
}
