<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\AdminExption;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Login;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    /**
     * 登录处理
     */
    public function store(Login $request)
    {
        $service = new \App\Lib\Model\Rbac\Users\Service();

        if ($service->doLogin($request->input('username'), $request->input('password'))) {

            return response()->json([
                'toUrl' => '/admins'
            ]);
        }
    }
}