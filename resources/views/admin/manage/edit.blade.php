@extends('admin.layout.layout')

@section('header')

@endsection

@section('main')
    <section class="panel">
        @if(isset($info))
            <header class="panel-heading">
                <h4>编辑用户</h4>
            </header>
            <div class="panel-body" style="padding-bottom: 50px">
                <form class="form-horizontal" onsubmit="return false" role="form">
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">用户名</label>

                        <div class="col-sm-5">
                            <input type="text" value="{{ $info->getName() }}" name="name" class="form-control"
                                   placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">登录密码</label>

                        <div class="col-sm-5">
                            <input type="password" name="password" class="form-control" placeholder="登录密码">
                        </div>
                        <div class="class-sm-5">
                            <span class="help-block">如果不填写就不会修改</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">确认密码</label>

                        <div class="col-sm-5">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="确认密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">选择分组</label>

                        <div class="col-sm-8">
                            @foreach($groups as $group)
                                <label class="checkbox checkbox-custom pull-left">
                                    <input type="checkbox" name="groupIds[]" @if(in_array($group->getId(),$groupIds)) checked @endif  value="{{ $group->getId() }}">
                                    <i class="checkbox @if(in_array($group->getId(),$groupIds)) checked @endif "></i> {{ $group->getName() }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" data-url="{{ url('admin/manage',[$info->getId()]) }}"
                                    onclick="main.ajaxPosts(this)" class="btn btn-primary">确定修改
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @else
            <header class="panel-heading">
                <h4>添加用户</h4>
            </header>
            <div class="panel-body" style="padding-bottom: 50px">
                <form class="form-horizontal" onsubmit="return false" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">用户名</label>

                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control"
                                   placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">登录密码</label>

                        <div class="col-sm-5">
                            <input type="password" name="password" class="form-control" placeholder="登录密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">确认密码</label>

                        <div class="col-sm-5">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="确认密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">选择分组</label>

                        <div class="col-sm-8">
                            @foreach($groups as $group)
                                <label class="checkbox checkbox-custom pull-left">
                                    <input type="checkbox" name="groupIds[]" value="{{ $group->getId() }}">
                                    <i class="checkbox "></i> {{ $group->getName() }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" onclick="main.ajaxPosts(this)" data-url="{{ url('admin/manage') }}"
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
    <script src="{{ asset('admin/vendor/fuelux/checkbox.js') }}"></script>
@endsection
