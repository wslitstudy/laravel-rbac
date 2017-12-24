@extends('admin.layout.layout')

@section('header')

@endsection

@section('main')
    <section class="panel">
        <header class="panel-heading">
            <h4>用户列表</h4>
        </header>
        <div class="panel-body" style="padding-bottom: 50px">
            <form class="form-horizontal" action="">
                <div class="form-group">
                    <div class="col-xs-3">
                        <input type="text" value="{{ request()->get('keyword') ?? '' }}" name="keyword" class="form-control" placeholder="请输入用户名搜索">
                    </div>
                    <button type="submit" class="btn btn-color">搜索</button>
                    <a type="button" href="/admin/manage/create" class="btn btn-info">添加用户</a>
                </div>
            </form>
            <table class="table table-bordered table-striped no-margin">
                <thead>
                 <tr>
                    <th class="text-center">创建时间</th>
                    <th class="text-center">用户名</th>
                    <th class="text-center">状态</th>
                    <th class="text-center">用户分组</th>
                    <th class="text-center">操作</th>
                </tr>
                </thead>
                <tbody>
                @if($list)
                    @foreach($list as $entity)
                        <tr>
                            <td class="text-center">{{ $entity->getCreateTime() }}</td>
                            <td class="text-center">{{ $entity->getName() }}</td>
                            <td class="text-center">
                                @if($entity->isForbiddened())
                                    <a class="btn btn-xs btn-danger">已禁用</a>
                                    <span>禁用时间：{{ $entity->getForbiddenTime() }}</span>
                                    @else
                                    <a class="btn btn-xs btn-success">正常</a>
                                @endif
                            </td>
                            <td class="text-center">
                                {{ $entity->getGroupName() }}
                            </td>
                            <td class="text-center">
                                @if($entity->isDefault())
                                    <a class="btn btn-xs btn-danger">系统默认用户，不能修改</a>
                                @else
                                    <a href="/admin/manage/{{ $entity->getId() }}/edit" class="btn btn-xs btn-info">编辑</a>
                                    @if($entity->isForbiddened())
                                        <a data-url="{{ url('admin/manage/unforbidden',[$entity->getId()]) }}" onclick="main.ajaxDelete(this)" data-msg="确定要解禁此用户吗？" class="btn btn-xs btn-success">解禁</a>
                                        @else
                                        <a data-url="{{ url('admin/manage',[$entity->getId()]) }}" onclick="main.ajaxDelete(this)" data-msg="确定要禁用此用户吗？" class="btn btn-xs btn-danger">禁用</a>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center">
                       <td colspan="5">暂无数据</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <div class="page">
                {{ $list->links() }}
            </div>
        </div>
    </section>
@endsection

@section('footer')
@endsection