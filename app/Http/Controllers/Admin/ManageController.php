<?php
namespace App\Http\Controllers\Admin;

use App\Exceptions\AdminExption;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ManageRequest;
use App\Lib\Entity\ManageGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageController extends Controller
{
    /**
     * @power 权限管理|用户管理
     * @rank 1
     */
    public function index(Request $request)
    {
        $entity = \App\Lib\Entity\ManageUser::select('*');
        if ($keyword = $request->input('keyword')) {
            $entity->where('name', $keyword);
        }
        return $this->adminRender('admin.manage.index', [
            'list' => $entity->paginate(15)
        ]);
    }

    /**
     * @power 权限管理|用户管理@添加用户
     */
    public function create()
    {
        return $this->adminRender('admin.manage.edit', [
            'groups' => ManageGroup::select('id', 'group_name')->get()
        ]);
    }

    /**
     * @power 权限管理|用户管理@编辑用户
     */
    public function edit($id)
    {
        $entity = \App\Lib\Entity\ManageUser::find($id);
        if (!$entity) {
            return $this->adminError('用户对象不存在');
        }
        if ($entity->isDefault()) {
            return $this->adminError('默认用户不能编辑');
        }

        return $this->adminRender('admin.manage.edit', [
            'info' => $entity,
            'groupIds' => \App\Lib\Entity\ManageUserGroup::getGroupsByUserId($id),
            'groups' => ManageGroup::select('id', 'group_name')->get()
        ]);
    }

    /**
     * @power 权限管理|用户管理@添加用户
     */
    public function store(ManageRequest $request)
    {
        $service = new \App\Lib\Model\Rbac\Users\Service();
        if ($service->checkName($request->input('name'))) {
            throw new AdminExption('用户名已被注册,请重新填写');
        }

        $groupIds = $request->input('groupIds');

        DB::beginTransaction();
        try {
            $entity = new \App\Lib\Entity\ManageUser();
            $entity->name = $request->input('name');
            $entity->password_salt = $service->getPasswordSalt();
            $entity->password = $service->getPassword($request->input('password'), $entity->getPasswordSalt());

            if (!$entity->save()) {
                throw new \Exception('保存失败');
            }

            foreach ($groupIds as $groupId) {
                $result = \App\Lib\Entity\ManageUserGroup::addInfo($entity->getId(), $groupId);
                if (!$result) {
                    throw new \Exception('保存失败');
                }
            }

            DB::commit();

            return response()->json(['toUrl' => url('/admin/manage')]);
        } catch (AdminExption $e) {
            DB::rollBack();

            throw new AdminExption($e->getMessage());
        }
    }

    /**
     * @power 权限管理|用户管理@编辑用户
     */
    public function update(ManageRequest $request, $id)
    {
        $entity = $this->checkInfo($id);

        $service = new \App\Lib\Model\Rbac\Users\Service();
        if ($service->checkName($request->input('name'), $id)) {
            throw new AdminExption('用户名已被注册,请重新填写');
        }

        $groupIds = $request->input('groupIds');

        DB::beginTransaction();
        try {
            $entity->name = $request->input('name');
            if ($password = $request->input('password')) {
                $entity->password = $service->getPassword($password, $entity->getPasswordSalt());
            }

            if ($entity->save() === false) {
                throw new AdminExption('保存失败');
            }

            foreach ($groupIds as $groupId) {
                $result = \App\Lib\Entity\ManageUserGroup::addInfo($entity->getId(), $groupId);
                if (!$result) {
                    throw new \Exception('保存失败');
                }
            }

            DB::commit();

            return response()->json(['toUrl' => url('/admin/manage')]);
        } catch (AdminExption $e) {
            DB::rollBack();

            throw new AdminExption($e->getMessage());
        }

    }

    /**
     * @power 权限管理|用户管理@禁用用户
     */
    public function destroy($id)
    {
        $entity = $this->checkInfo($id);

        $entity->forbidden_time = time();

        if (!$entity->save()) {
            throw new AdminExption('禁用失败');
        }

        return response()->json(['message' => 'success']);
    }

    /**
     * @power 权限管理|用户管理@解禁用户
     * @method DELETE
     */
    public function unforbidden($id)
    {
        $entity = $this->checkInfo($id);

        $entity->forbidden_time = 0;

        if (!$entity->save()) {
            throw new AdminExption('解禁失败');
        }
        return response()->json(['message' => 'success']);
    }

    private function checkInfo($id)
    {
        $entity = \App\Lib\Entity\ManageUser::find($id);
        if (!$entity) {
            throw new AdminExption('对象不存在');
        }
        if ($entity->isDefault()) {
            throw new AdminExption('默认用户不能编辑');
        }

        return $entity;
    }
}