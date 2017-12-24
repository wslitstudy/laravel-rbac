<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required',
            'authIds' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '分组名称不能为空',
            'authIds.required' => '请选择权限'
        ];
    }

}
