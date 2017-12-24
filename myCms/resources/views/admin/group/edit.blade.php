@extends('admin.layout.layout')

@section('header')

@endsection

@section('main')
    <section class="panel">
        @if(isset($info))
            <header class="panel-heading">
                <h4>编辑分组</h4>
            </header>
            <div class="panel-body" style="padding-bottom: 50px">
                <form class="form-horizontal" onsubmit="return false" role="form">
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label class="col-sm-1 control-label">名称</label>

                        <div class="col-sm-5">
                            <input type="text" value="{{ $info->getName() }}" name="name" class="form-control"
                                   placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">选择权限</label>

                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label><input onclick="selectAll(this)" @if($info->getAuthIds() == 'all') checked @endif  id="select-all" type="checkbox">全部选择</label>
                            </div>
                            <table id="auths" class="table table-bordered  no-margin">
                                @foreach($auths as $auth)
                                    @if($auth->getLevel() == 1)
                                        <tbody>
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;" rowspan="{{ $auth->getChildTotal() }}">
                                                <label style="font-weight: normal;">
                                                    <input onclick="selectChilds(this)" @if(in_array($auth->getId(),$authIds) || $info->getAuthIds() == 'all') checked @endif name="authIds[]" value="{{$auth->getId()}}" type="checkbox">{{ $auth->getShrotName() }}
                                                </label>
                                            </td>
                                        </tr>
                                        @foreach($auths as $child)
                                            @if($child->getParentId() == $auth->getId())
                                                <tr>
                                                    <td class="text-center">
                                                        <label style="font-weight: normal;">
                                                            <input name="authIds[]" @if(in_array($child->getId(),$authIds) || $info->getAuthIds() == 'all') checked @endif value="{{$child->getId()}}" onclick="selectActions(this)"
                                                                   type="checkbox">{{ $child->getShrotName() }}
                                                        </label>
                                                    </td>
                                                    <td class="text-center">
                                                        @foreach($auths as $childs)
                                                            @if($childs->getParentId() == $child->getId())
                                                                <label style="font-weight: normal;margin-left: 10px">
                                                                    <input name="authIds[]" @if(in_array($childs->getId(),$authIds) || $info->getAuthIds() == 'all') checked @endif  value="{{$childs->getId()}}" onclick="selectAction(this)"
                                                                           type="checkbox">{{ $childs->getShrotName() }}
                                                                </label>
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button type="submit" data-url="{{ url('admin/group',[$info->getId()]) }}"
                                    onclick="main.ajaxPosts(this)" class="btn btn-primary">确定修改
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @else
            <header class="panel-heading">
                <h4>添加分组</h4>
            </header>
            <div class="panel-body" style="padding-bottom: 50px">
                <form class="form-horizontal" onsubmit="return false" role="form">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">名称</label>

                        <div class="col-sm-3">
                            <input type="text" name="name" class="form-control"
                                   placeholder="请输入分组名称">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">选择权限</label>

                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label><input onclick="selectAll(this)"  id="select-all" type="checkbox">全部选择</label>
                            </div>
                            <table id="auths" class="table table-bordered  no-margin">
                                @foreach($auths as $auth)
                                    @if($auth->getLevel() == 1)
                                        <tbody>
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;" rowspan="{{ $auth->getChildTotal() }}">
                                                <label style="font-weight: normal;">
                                                    <input onclick="selectChilds(this)" name="authIds[]" value="{{$auth->getId()}}" type="checkbox">{{ $auth->getShrotName() }}
                                                </label>
                                            </td>
                                        </tr>
                                        @foreach($auths as $child)
                                            @if($child->getParentId() == $auth->getId())
                                                <tr>
                                                    <td class="text-center">
                                                        <label style="font-weight: normal;">
                                                            <input name="authIds[]" value="{{$child->getId()}}" onclick="selectActions(this)"
                                                                   type="checkbox">{{ $child->getShrotName() }}
                                                        </label>
                                                    </td>
                                                    <td class="text-center">
                                                        @foreach($auths as $childs)
                                                            @if($childs->getParentId() == $child->getId())
                                                                <label style="font-weight: normal;margin-left: 10px">
                                                                    <input name="authIds[]" value="{{$childs->getId()}}" onclick="selectAction(this)"
                                                                           type="checkbox">{{ $childs->getShrotName() }}
                                                                </label>
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button type="submit" onclick="main.ajaxPosts(this)" data-url="{{ url('admin/group') }}"
                                    class="btn btn-primary">提交
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @endif
    </section>
@endsection

@section('footer')
    <script>
        function selectAll(event) {
            if ($(event).is(':checked')) {
                $("#auths").find('input').prop('checked', true);
            } else {
                $("#auths").find('input').prop('checked', false);
            }
        }
        function selectChilds(event) {
            if ($(event).is(':checked')) {
                $(event).parents('tr').siblings('tr').find('input').prop('checked', true);
            } else {
                if ($("#select-all").is(':checked')) {
                    $("#select-all").prop('checked', false);
                }
                $(event).parents('tr').siblings('tr').find('input').prop('checked', false);
            }
        }

        function selectActions(event) {
            var parentsNode = $(event).parents('tbody').find('tr:first input');
            if ($(event).is(':checked')) {
                $(event).parents('td').siblings('td').find('input').prop('checked', true);
                if (!parentsNode.is(':checked')) {
                    parentsNode.prop('checked', true);
                }
            } else {
                $(event).parents('td').siblings('td').find('input').prop('checked', false);
                var total = 0;
                $(event).parents('tbody').find('tr').each(function () {
                    if ($(this).find('input').is(':checked')) {
                        total++;
                    }
                })
                if (total <= 1) {
                    parentsNode.prop('checked', false);
                }
            }
        }

        function selectAction(event) {
            var parent = $(event).parents('td').prev('td').find('input');
            var parentsNode = $(event).parents('tbody').find('tr:first input');
            var siblings = $(event).parents('label').siblings('label');
            if ($(event).is(':checked')) {
                if (!parent.is(':checked')) {
                    parent.prop('checked', true);
                }
                if (!parentsNode.is(':checked')) {
                    parentsNode.prop('checked', true);
                }
            } else {
                var total = 0;
                siblings.each(function () {
                    if ($(this).find('input').is(':checked')) {
                        total++;
                    }
                })
                if(total < 1){
                    parent.prop('checked', false);
                }

                var totals = 0;
                $(event).parents('tbody').find('tr').each(function () {
                    if ($(this).find('input').is(':checked')) {
                        totals++;
                    }
                })
                if (totals <= 1) {
                    parentsNode.prop('checked', false);
                }
            }

        }
    </script>
@endsection
