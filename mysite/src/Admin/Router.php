<?php
$admin_router = new \Owl\Mvc\Router([
    'namespace' => '\Admin\Controller',
]);

$admin_router->middleware(function($request,$reponse){
    $white_list = [
        '/admin/login'
    ];

    $url = $request->getRequestPath();
    foreach ($white_list as $white) {
        if ($url === $white) {
            return true;
        }
    }

    //验证权限

});

return $admin_router;