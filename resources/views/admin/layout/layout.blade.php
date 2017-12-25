<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>后台管理</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/offline/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/pace/theme.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/panel.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/skins/palette.1.css') }}" id="skin">
    <link rel="stylesheet" href="{{ asset('admin/css/fonts/style.1.css') }}" id="font">
    <link rel="stylesheet" href="{{ asset('/admin/css/jquery.confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('admin/vendor/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/modernizr.js') }}"></script>
    @yield('header')
</head>

<body>
<div class="app">

    @include('admin.layout.header')

    <section class="layout" style="padding-top: 50px">

        @include('admin.layout.left')

        <section class="main-content" >

            <div class="content-wrap ">
                @yield('main')
            </div>

            <div class="site-overlay"></div>
        </section>

    </section>
</div>

<script src="{{ asset('admin/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.easing.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.placeholder.js') }}"></script>
<script src="{{ asset('admin/vendor/fastclick.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin/vendor/offline/offline.min.js') }}"></script>
<script src="{{ asset('admin/vendor/pace/pace.min.js') }}"></script>
<script src="{{ asset('admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('/admin/js/jquery.confirm.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
<script src="{{ asset('admin/js/panel.js') }}"></script>

@yield('footer')
</body>
</html>