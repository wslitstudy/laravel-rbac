<!doctype html>
<html class="signin no-js" lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendor/offline/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendor/pace/theme.css') }}">

    <link rel="stylesheet" href="{{ asset('/admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/admin/css/skins/palette.1.css') }}" id="skin">
    <link rel="stylesheet" href="{{ asset('/admin/css/fonts/style.1.css') }}" id="font">
    <link rel="stylesheet" href="{{ asset('/admin/css/jquery.confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/css/main.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="bg-color center-wrapper" style="background: #ededed">
<div style="margin-top: 140px">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <section class="col-md-8 col-md-offset-2 panel panel-primary" style="padding: 0">
                <header class="panel-heading">
                    <h3 class="text-center" style="color: #fff">登录后台系统</h3>
                </header>
                <div class="bg-white user pd-md" style="padding: 20px 15px">
                    <form role="form" action="" style="margin-top: 15px">
                        <div class="form-group">
                            <input type="text" id="username" class="form-control" placeholder="用户名">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" class="form-control" placeholder="登录密码">
                        </div>
                        <div class="form-group clearfix" style="margin-top: 25px">
                            <a type="button" onclick="login()" class="btn btn-purple pull-right ">登 录</a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <p class="text-center">©2017 渝ICP备16002511号-1</p>
</div>
</body>
<script src="{{ asset('/admin/vendor/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('/admin/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('/admin/vendor/pace/pace.min.js') }}"></script>
<script src="{{ asset('/admin/js/jquery.confirm.js') }}"></script>
<script src="{{ asset('/admin/js/main.js') }}"></script>
<script>
    function login() {
        var username = $("#username").val();
        if (username == '') {
            main.waringAlert('请填写登录用户名');
            return false;
        }
        var password = $("#password").val();
        if (password == '') {
            main.waringAlert('请填写登录密码');
            return false;
        }
        main.ajaxPost({username: username, password: password});
    }
</script>
</html>

