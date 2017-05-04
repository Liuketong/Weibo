<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微博系统--登录首页</title>
    <script type="text/javascript" src="/Weibo/Public/Home/js/jquery.js"></script>
    <script type="text/javascript" src="/Weibo/Public/Home/js/login.js"></script>
    <script type="text/javascript" src="/Weibo/Public/Home/js/jquery.ui.js"></script>
    <script type="text/javascript" src="/Weibo/Public/Home/js/jquery.form.js"></script>
    <script type="text/javascript" src="/Weibo/Public/Home/js/jquery.validate.js"></script>
    <link rel="stylesheet" href="/Weibo/Public/Home/css/jquery.ui.css"/>
    <link rel="stylesheet" href="/Weibo/Public/Home/css/login.css"/>
    <script type="text/javascript">
        var ThinkPHP = {
            'MODULE' : '/Weibo/Home',
            'IMG' : '/Weibo/Public/<?php echo MODULE_NAME;?>/img'
        };
    </script>
</head>
<body>

<div id="header"></div>

<div id="main">
    <form id="login">
        <div class="top">
            <input type="text" name="user" class="text" placeholder="用户名">
            <input type="password" name="password" class="password" placeholder="密码">
            <input type="submit" name="submit" value="登录" class="submit">
        </div>
        <div class="bottom">
            <a href="javascript:void(0)" id="reg_link">注册新用户</a>
            <a href="javascript:void(0)">忘记密码</a>
        </div>
    </form>
</div>

<div id="footer">
    @2009-2016 俱乐部. Powered by ThinkPHP.
</div>


<form id="register">
    <ol class="register_errors"></ol>
    <p>
        <label for="username">账号：</label>
        <input type="text" name="username" class="text" id="username" placeholder="呢称，不小于两位！"/>
        <span class="star">*</span>
    </p>
    <p>
        <label for="password">密码：</label>
        <input type="text" name="password" class="text" id="password" placeholder="密码，不小于两位！"/>
        <span class="star">*</span>
    </p>
    <p>
        <label for="repassword">确认：</label>
        <input type="text" name="repassword" class="text" id="repassword" placeholder="密码和密码确认必须一致！"/>
        <span class="star">*</span>
    </p>
    <p>
        <label for="email">邮箱：</label>
        <input type="text" name="email" class="text" id="email" placeholder="电子邮箱，用于找回密码！"/>
        <span class="star">*</span>
    </p>
</form>


</body>
</html>