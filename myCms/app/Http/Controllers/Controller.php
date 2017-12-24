<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function adminError($message, $sencods = 5, $jumpUrl = '')
    {
        $data = [
            'message' => $message,
            'sencods' => $sencods,
            'jumpUrl' => $jumpUrl ?: 'javascript:history.back(-1)'
        ];

        return $this->adminRender('admin._error', $data);
    }

    public function adminRender($path, $data = [])
    {
        $data = array_merge($this->baseParams(), $data);
        return view($path, $data);
    }

    private function baseParams()
    {
        $service = new \App\Lib\Model\Rbac\Power\Service();
        $menus = $service->getMenus();
        $session = new \App\Lib\Model\Rbac\Users\Service();
        return [
            'userInfo' => $session->getManageInfo(),
            'menus' => $menus
        ];
    }
}
