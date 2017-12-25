@extends('admin.layout.layout')

@section('header')

@endsection

@section('main')
    <section class="panel">
        <header class="panel-heading">
            <h5>温馨提示！！！</h5>
        </header>
        <div class="panel-body" style="padding-bottom: 50px">
            <h4 class="text-center">错误了！！！<strong class="text-danger">{{ $message }}</strong></h4>

            <p class="text-center" style="line-height: 45px"><strong id="wait">{{$sencods}}</strong>&nbsp;&nbsp;秒后，页面会自动跳转
            </p>

            <div class="text-center" style="margin-top: 20px">
                <a class="btn btn-xs btn-success" href="{{ $jumpUrl }}">返回上一页</a>
                <a class="btn btn-xs btn-warning" id="href" href="{{ $jumpUrl }}">立即跳转</a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <script>
        (function () {
            var wait = document.getElementById('wait'),
                    href = document.getElementById('href').href;
            var interval = setInterval(function () {
                var time = --wait.innerHTML;
                if (time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                }
                ;
            }, 1000);
        })();
    </script>
@endsection