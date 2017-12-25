<?php
namespace App\Http\Controllers\Admin;

use App\Exceptions\AdminExption;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupRequest;
use App\Lib\Entity\ManageGroup;
use App\Lib\Entity\ManageMenu;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    /**
     * @power 权限管理|分组管理
     * @rank 2
     */
    public function index()
    {
        return $this->adminRender('admin.group.index', [
            'list' => ManageGroup::paginate(15)
        ]);
    }

    /**
     * @power 权限管理|分组管理@添加分组
     */
    public function create()
    {
        return $this->adminRender('admin.group.edit', [
            'auths' => ManageMenu::all()
        ]);
    }

    /**
     * @power 权限管理|分组管理@编辑分组
     */
    public function edit($id)
    {
        $info = ManageGroup::find($id);
        if (!$info) {
            $this->adminError('对象不存在');
        }
        if ($info->isDefault()) {
            $this->adminError('默认分组不能编辑');
        }

        return $this->adminRender('admin.group.edit', [
            'auths' => ManageMenu::all(),
            'info' => $info,
            'authIds' => $info->getAuthIds() != 'all' ? explode(',', $info->getAuthIds()) : []
        ]);
    }

    /**
     * @power 权限管理|分组管理@添加分组
     */
    public function store(GroupRequest $request)
    {
        if (\App\Lib\Model\Rbac\Group\Service::checkName($request->input('name'))) {
            throw new AdminExption('分组名称已存在');
        }

        $result = \App\Lib\Model\Rbac\Group\Service::addGroup([
            'group_name' => $request->input('name'),
            'auth_ids' => implode(',', $request->input('authIds'))
        ]);

        if ($result) {
            return response()->json(['toUrl' => url('admin/group')]);
        }

        throw new AdminExption('保存失败');
    }

    /**
     * @power 权限管理|分组管理@编辑分组
     */
    public function update(GroupRequest $request, $id)
    {
        $entity = $this->checkInfo($id);

        if (\App\Lib\Model\Rbac\Group\Service::checkName($request->input('name'), $id)) {
            throw new AdminExption('分组名称已存在');
        }

        $result = \App\Lib\Model\Rbac\Group\Service::updateGroup([
            'group_name' => $request->input('name'),
            'auth_ids' => implode(',', $request->input('authIds'))
        ], $entity);

        if ($result) {
            return response()->json(['toUrl' => url('admin/group')]);
        }

        throw new AdminExption('保存失败');
    }

    /**
     * @power 权限管理|分组管理@删除分组
     */
    public function destroy($id)
    {
        $entity = $this->checkInfo($id);

        $userIds = \App\Lib\Entity\ManageUserGroup::getUsersByGroupId($id);

        if (count($userIds) > 0) {
            throw new AdminExption('该分组下面还存在用户，不能删除');
        }

        if (!$entity->delete()) {
            throw new AdminExption('删除失败');
        }

        return response()->json(['message' => 'success']);
    }

    /**
     * @power 权限管理|分组管理@强制删除分组
     */
    public function force($id)
    {
        $entity = $this->checkInfo($id);

        DB::beginTransaction();

        try {
            $userIds = \App\Lib\Entity\ManageUserGroup::getUsersByGroupId($id);

            \App\Lib\Entity\ManageUserGroup::deleteBygroupId($id);

            if (!$entity->delete()) {
                throw new \Exception('删除失败');
            }

            if (!\App\Lib\Entity\ManageUser::destroy($userIds)) {
                throw new \Exception('删除失败');
            }

            DB::commit();
            return response()->json(['message' => 'success']);

        } catch (\Exception $e) {
            DB::rollBack();
            throw new AdminExption($e->getMessage());
        }

    }

    private function checkInfo($id)
    {
        $entity = ManageGroup::find($id);
        if (!$entity) {
            throw new AdminExption('对象不存在');
        }
        if ($entity->isDefault()) {
            throw new AdminExption('默认用户不能编辑');
        }

        return $entity;
    }
}