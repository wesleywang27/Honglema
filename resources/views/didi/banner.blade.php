<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>滴滴打网红后台系统</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/css/cms_style.css" />
    <link rel="stylesheet"  href="/css/zoom.css" media="all" />

    <link rel="stylesheet" type="text/css" href="/css/pie-graph.css">
    <link rel="stylesheet" type="text/css" href="/css/horizontal-bar.css">
    
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
    <h1><a href="#"><img src="/images/didi_logo.png"/></a></h1>
    <ul class="rt_nav">
        <li><a href="/didi/index" class="website_icon">站点首页</a></li>
        <li><a href="#" class="admin_icon">{{ $_SESSION['name'] }}</a></li>
        <li><a href="#" class="set_icon">修改密码</a></li>
        <li><a href="/didi/logout" class="quit_icon">安全退出</a></li>
    </ul>
</header>

<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
    <h2><a href="#"><b>首页</b></a></h2>
    <ul>
        <li>
            <dl>
                <dt>平台信息审核</dt>
                <dd><a href="#">商家注册审核</a></dd>
                <dd><a href="#">红人注册审核</a></dd>
                <dd><a href="#">商家活动审核</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>平台信息管理</dt>
                <dd><a href="/didi/MerchantList">商家信息管理</a></dd>
                <dd><a href="#">红人信息管理</a></dd>
                <dd><a href="#">商家活动管理</a></dd>
                <dd><a href="#">收费标准管理</a></dd>
                <dd><a href="#">热门广场管理</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>平台信息统计</dt>
                <dd><a href="#">推广效果统计</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>后台信息管理</dt>
                <dd><a href="#">后台用户列表</a></dd>
                <dd><a href="#">添加后台用户</a></dd>
                <dd><a href="#">操作日志列表</a></dd>
            </dl>
        </li>
        <li>
            <p class="btm_infor">©红了吗网络科技有限公司</p>
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