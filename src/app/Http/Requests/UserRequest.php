<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'picture' => 'required|file|mimes:jpg,png,jpeg',
            'detail' => 'required|string'
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => '氏名を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'password.required' => 'パスワードを入力してください',
            'picture.required' => '写真を選択してください',
            'detail.required' => 'プロフィールを入力してください',

            'email.email' => 'メールアドレスんとして正しい形式ではありません',

            'picture.mimes' => 'ファイル形式がjpg,png,jpeg以外は添付できません',
        ];
    }
}
