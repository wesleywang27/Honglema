<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>红了吗后台管理系统</title>
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
        });
    </script>
</head>
<body>
<dl class="admin_login">
    <dt>
        <strong>红了吗后台管理系统</strong>
        <em>Management System</em>
    </dt>
    <form action="/cms/login.php" method="post" name="loginForm">
        <dd class="user_icon">
            <input type="text" placeholder="账号" class="login_txtbx" name="name" required/>
        </dd>
        <dd class="pwd_icon">
            <input type="password" placeholder="密码" class="login_txtbx" name="password" required/>
        </dd>
        <dd>
            <input type="submit" value="立即登陆" class="submit_btn"/>
        </dd>
    </form>
    <dd>
        <p>© 2016 红了吗网络科技有限公司</p>
    </dd>
</dl>
</body>
</html>
