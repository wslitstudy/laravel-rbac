<header class="header header-fixed navbar">
    <div class="brand" style="background-color: #535A7C">
        <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
        <a href="index.html" class="navbar-brand">
            <i class="fa fa-stop mg-r-sm"></i>
            <span class="heading-font">后台管理系统</span>
        </a>
    </div>

    <ul class="nav navbar-nav navbar-right off-right">
        <li class="quickmenu">
            <a href="javascript:;" data-toggle="dropdown">
                {{ $userInfo['name'] }}
                <i class="caret mg-l-xs hidden-xs no-margin"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                <li>
                    <a href="/admin/personal">个人中心</a>
                </li>
                <li>
                    <a onclick="logoutSys(this)" data-href="/admin/logout">退出</a>
                </li>
            </ul>
        </li>
    </ul>
</header>
<script>
    function logoutSys(event) {
        var url = $(event).attr('data-href');
        $.confirm({
            title: '<strong style="color: #c7254e;font-size: 16px">温馨提示</strong>',
            content: '<div class="text-center" style="border-top:1px solid #eee;padding-top: 20px">你确定要退出系统吗?</div>',
            confirmButton: '确定',
            confirmButtonClass: 'btn btn-info',
            cancelButton: '取消',
            cancelButtonClass: 'btn btn-danger',
            animation: 'scaleY',
            theme: 'material',
            confirm: function () {
                window.location.href = url;
            }
        })
    }
</script>