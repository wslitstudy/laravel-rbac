<?php
namespace App\Lib\Model\Rbac\Power;

use App\Exceptions\AdminExption;
use App\Lib\Entity\ManageMenu;
use App\Lib\Entity\ManagePower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

class Service
{
    /**
     * 添加菜单
     */
    public static function addMenu($data)
    {
        $entity = new ManageMenu();
        $entity->path = $data['power'];
        $entity->level = $data['level'];
        $entity->sort = $data['sort'];
        $entity->parent_id = $data['parent_id'] ?? 0;
        if ($entity->save()) {
            return $entity->id;
        }
        return false;
    }


    /**
     * 添加 power
     */
    public static function addPower($path, $method, $meunId)
    {
        $entity = new ManagePower();
        $entity->path = $path;
        $entity->method = $method;
        $entity->menu_id = $meunId;

        return $entity->save();
    }

    /**
     * 获取请求route
     */
    public static function getRoutePath()
    {
        $actions = Route::currentRouteAction();
        $arr = explode('@', $actions);

        $namespace = explode('\\', $arr[0]);
        $controller = $namespace[count($namespace) - 1];

        $route = substr($controller, 0, strlen($controller) - 10);
        $path = '/admin/' . strtolower($route) . '/' . strtolower($arr[1]);

        return trim($path);
    }

    /**
     * 获取菜单
     */
    public function getMenus()
    {
        $session = new \App\Lib\Model\Rbac\Users\Service();

        $cacheKey = 'user:menu:' . $session->getManageId();

        $leftMenus = Cache::store('file')->get($cacheKey, false);

        if (!$leftMenus) {
            $menuIds = $session->getMenus();

            if (in_array('all', $menuIds)) {
                return $this->getAllMenus();
            }

            $leftMenus = $this->getAllMenus($menuIds);

            Cache::store('file')->put($cacheKey, json_encode($leftMenus));
        }

        return $leftMenus;
    }


    public function getAllMenus($menuIds = [])
    {
        $query = \App\Lib\Entity\ManageMenu::whereIn('manage_menu.level', [1, 2]);
        if ($menuIds) {
            $query->whereIn('manage_menu.id', $menuIds);
        }
        return $query->select('manage_power.path as url', 'manage_menu.*')
            ->leftJoin('manage_power', 'manage_power.menu_id', '=', 'manage_menu.id')
            ->orderBy('manage_menu.sort','asc')
            ->get();
    }

}