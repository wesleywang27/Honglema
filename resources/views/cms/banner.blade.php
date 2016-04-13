<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>红了吗后台管理系统</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/css/cms_style.css" />
    <!--[if lt IE 9]>
    <script src="/js/html5.js"></script>
    <![endif]-->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        (function($){
            $(window).load(function(){

                $("a[rel='load-content']").click(function(e){
                    e.preventDefault();
                    var url=$(this).attr("href");
                    $.get(url,function(data){
                        $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
                        //scroll-to appended content
                        $(".content").mCustomScrollbar("scrollTo","h2:last");
                    });
                });

                $(".content").delegate("a[href='top']","click",function(e){
                    e.preventDefault();
                    $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
                });

            });
        })(jQuery);
    </script>
</head>
<body>
<!--header-->
<header>
    <h1><img src="/images/admin_logo.png"/></h1>
    <ul class="rt_nav">
        <li><a href="/cms/index" class="website_icon">站点首页</a></li>
        <li><a href="#" class="admin_icon">
                <?php
                echo $_SESSION['username']; // 显示用户名
                ?>
            </a>
        </li>
        <li><a href="#" class="set_icon">账号设置</a></li>
        <li><a href="{{ url('/cms/logout') }}" class="quit_icon">安全退出</a></li>
    </ul>
</header>

<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
    <h2><a href="/cms/index">首页</a></h2>
    <ul>
        <li>
            <dl>
                <dt>商家信息管理</dt>
                <dd><a href="#">工厂信息列表</a></dd>
                <dd><a href="#">品牌商信息列表</a></dd>
                <dd><a href="#">设计师信息列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>红人信息管理</dt>
                <dd><a href="#">红人信息列表</a></dd>
                <dd><a href="#">添加红人信息</a></dd>
                <dd><a href="#">查看红人信息</a></dd>
                <dd><a href="#">修改红人信息</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>后台用户管理</dt>
                <dd><a href="#">管理员列表</a></dd>
                <dd><a href="#">添加管理员</a></dd>
            </dl>
        </li>
        <li>
            <p class="btm_infor">© 红了吗 版权所有</p>
        </li>
    </ul>
</aside>

<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <section>
            @yield('content')
        </section>
    </div>
</section>
</body>
</html>