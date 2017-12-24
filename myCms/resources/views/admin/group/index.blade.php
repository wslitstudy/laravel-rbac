@extends('admin.layout.layout')

@section('header')

@endsection

@section('main')
    <section class="panel">
        <header class="panel-heading">
            <h4>分组列表</h4>
        </header>
        <div class="panel-body" style="padding-bottom: 50px">
            <div class="row clearfix " style="margin-bottom: 15px">
                <a type="button" href="/admin/group/create" class="btn btn-info">添加分组</a>
            </div>
            <table class="table table-bordered table-striped no-margin">
                <thead>
                <tr>
                    <th class="text-center">创建时间</th>
                    <th class="text-center">名称</th>
                    <th class="text-center">用户</th>
                    <th class="text-center">操作</th>
                </tr>
                </thead>
                <tbody>
                @if($list)
                    @foreach($list as $entity)
                        <tr>
                            <td class="text-center">
                                {{ $entity->getCreateTime() }}
                            </td>
                            <td class="text-center">
                                {{ $entity->getName() }}
                            </td>
                            <td class="text-center">用户</td>
                            <td class="text-center">
                                @if($entity->isDefault())
                                    <a class="btn btn-xs btn-danger">系统默认分组，不能修改</a>
                                @else
                                    <a href="/admin/group/{{ $entity->getId() }}/edit" class="btn btn-xs btn-info">编辑</a>
                                    <a data-url="{{ url('admin/group',[$entity->getId()]) }}" onclick="main.ajaxDelete(this)" data-msg="确定要删除此分组吗？" class="btn btn-xs btn-danger">删除</a>
                                    <a data-url="{{ url('admin/group/force',[$entity->getId()]) }}" onclick="main.ajaxDelete(this)" data-msg="确定要删除此分组和分组下面的用户吗？" class="btn btn-xs btn-danger">强制删除</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr class="text-center">
                        <td colspan="4">暂无数据</td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>
    </section>

@endsection

@section('footer')
@endsection