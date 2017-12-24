<?php
namespace App\Lib\Entity;

use Illuminate\Database\Eloquent\Model;

class ManageMenu extends Model
{

    protected $table = 'manage_menu';

    public $timestamps = false;

    /**
     * 获取id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 获取路径
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * 获取等级
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * 获取父级
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * 获取名称
     */
    public function getShrotName()
    {
        if ($this->getLevel() == 1) {
            return $this->getPath();
        } elseif ($this->getLevel() == 2) {
            return substr($this->getPath(), strpos($this->getPath(), '|') + 1);
        } elseif ($this->getLevel() == 3) {
            return substr($this->getPath(), strpos($this->getPath(), '@') + 1);
        }
    }

    /**
     *获取下级总数
     */
    public function getChildTotal()
    {
        if ($this->getLevel() == 1) {
            return self::where('parent_id', $this->getId())->where('level', 2)->count() + 1;
        }
        return 1;
    }

    /**
     * 检测名称是否存在
     */
    public static function checkPath($path)
    {
        $menu = self::where('path', $path)->first();
        if ($menu) {
            return $menu->id;
        }
        return false;
    }

    /**
     * 获取当前路径
     */
    public function getCurrutPath()
    {
        $sevice = new \App\Lib\Model\Rbac\Power\Service();
        return substr($sevice->getRoutePath(), 0, strrpos($sevice->getRoutePath(), '/'));
    }

    /**
     * 获取请求路径
     */
    public function getUrl()
    {
        if ($this->url) {
            return substr($this->url, 0, strrpos($this->url, '/'));
        }
        return '';
    }
}