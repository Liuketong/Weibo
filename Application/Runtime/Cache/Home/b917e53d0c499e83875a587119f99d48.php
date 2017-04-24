<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微博系统--登录首页</title>
    <script type="text/javascript" src="/weibo/Public/Home/js/jquery.js"></script>
    <script type="text/javascript" src="/weibo/Public/Home/js/login.js"></script>
    <script type="text/javascript" src="/weibo/Public/Home/js/jquery.ui.js"></script>
    <link rel="stylesheet" href="/weibo/Public/Home/css/jquery.ui.css"/>
    <link rel="stylesheet" href="/weibo/Public/Home/css/login.css"/>
    <script type="text/javascript">
        var ThinkPHP = {
            'IMG' : '/weibo/Public/<?php echo MODULE_NAME;?>/img',
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

<div id="register">
    <form>
        <p>
            <label for="user">账号：</label>
            <input type="text" name="user" class="text" id="user" placeholder="呢称，不小于两位！"/>
            <span class="star">*</span>
        </p>
        <p>
            <label for="pass">密码：</label>
            <input type="text" name="user" class="text" id="pass" placeholder="密码，不小于两位！"/>
            <span class="star">*</span>
        </p>
        <p>
            <label for="email">邮箱：</label>
            <input type="text" name="user" class="text" id="email" placeholder="电子邮箱，用于找回密码！"/>
            <span class="star">*</span>
        </p>
    </form>
</div>

</body>
</html>