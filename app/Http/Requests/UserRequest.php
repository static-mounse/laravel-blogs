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
            'name' => 'required',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => '用户名不能为空',
            'name.min' => '用户名最小为三个字符',
            'password.required' => '密码不能为空',
            'password.min' => '密码不能小于3个字符'
        ];
    }
}
