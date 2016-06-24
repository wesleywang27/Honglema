<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>滴滴打网红后台系统</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/css/cms_style.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/js/jquery.js"></script>
    <script src="/js/verificationNumbers.js"></script>
    <script src="/js/Particleground.js"></script>
    <script>
        $(document).ready(function() {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
            createCode();
            validate();
        });
    </script>
</head>
<body>
<dl class="admin_login">
    <dt>
        <strong>滴滴打网红后台系统</strong>
        <em>Management System</em>
    </dt>
    <form action="/didi/login" method="post" name="loginForm">
        <dd class="user_icon">
            <input type="text" placeholder="请输入账号(花名全拼)" class="login_txtbx" name="name" required/>
        </dd>
        <dd class="pwd_icon">
            <input type="password" placeholder="请输入密码" class="login_txtbx" name="password" required/>
        </dd>
        <dd class="val_icon">
            <div class="checkcode">
                <input type="text" id="J_codetext" placeholder="输入验证码" maxlength="4" class="login_txtbx" onblur="validate();"/>
                <canvas class="J_codeimg" id="myCanvas" onclick="createCode()"></canvas>
            </div>
            <input type="button" id="result" value="验证码核验" class="ver_btn" onClick="validate();"/>
            <input type="hidden" id="check" name="check" />
        </dd>
        <dd>
            <input type="submit" value="立即登陆" class="submit_btn"/>
        </dd>
        <!--<a href="/cms/forget" style="color: seashell;float: right;margin-right: 15px;">忘记密码</a>-->
        <br>
    </form>
    <dd>
        <p>© 2016 红了吗网络科技有限公司</p>
    </dd>
</dl>
</body>
</html>
