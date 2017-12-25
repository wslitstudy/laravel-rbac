<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return $this->adminRender('admin.index');
    }

    public function error()
    {
        $message = '没有权限,请联系管理员';
        return $this->adminError($message);
    }

    public function logout()
    {
        $session = new \App\Lib\Model\Rbac\Users\Service();

        $session->logout();

        return redirect('/admin/login');
    }

}