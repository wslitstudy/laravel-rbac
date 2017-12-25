<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ManageRequest extends FormRequest
{

    private $createRules = [
        'name' => 'required',
        'password' => 'required|min:6|max:16',
        'password_confirmation' => 'required|same:password',
        'groupIds' => 'required'
    ];

    private $updateRules = [
        'name' => 'required',
        'password' => 'nullable|min:6|max:16',
        'password_confirmation' => 'required_with:password|same:password',
        'groupIds' => 'required'
    ];

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if ($this->getMethod() == 'POST') {
            return $this->createRules;
        } elseif ($this->getMethod() == 'PUT') {
            return $this->updateRules;
        }
    }

    public function messages()
    {
        return [
            'name.required' => '用户名不能为空',
            'password.required' => '密码不能为空',
            'password.min' => '密码长度不能少于6位',
            'password.max' => '密码长度不能大于16位',
            'password_confirmation.required' => '确定密码不能为空',
            'password_confirmation.same' => '两次密码输入不一致',
            'password_confirmation.required_with' => '确定密码不能为空',
            'groupIds.required' => '请选择分组'
        ];
    }

}
