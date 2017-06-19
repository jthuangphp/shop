@extends('admin.layouts.login_sign')

@section('content')

<div class="tpl-login-content">
    <div class="tpl-login-logo">

    </div>



    <form class="am-form tpl-form-line-form" method="get" action="/">
        <?php echo csrf_field(); ?>
        <div class="am-form-group">
            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入账号">

        </div>

        <div class="am-form-group">
            <input type="password" class="tpl-form-input" id="user-name" placeholder="请输入密码">

        </div>
        <div class="am-form-group tpl-login-remember-me">
            <input id="remember-me" type="checkbox">
            <label for="remember-me">

                记住密码
            </label>

        </div>






        <div class="am-form-group">

            <button type="button" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

        </div>
    </form>
</div>

@endsection