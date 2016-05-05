<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>红了吗网红供应链合作报名</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/weui.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/admin.css">

    <script src="/js/jquery.min.js"></script>
    <script src="/js/handlebars.min.js"></script>
    <script src="/js/amazeui.widgets.helper.js"></script>
</head>
<body>
<header data-am-widget="header" class="am-header am-header-default" style="background-color: #DD514C">
    <div class="am-header-left am-header-nav">
        <a href="#">
            <span class="am-header-nav-title" style="margin-right: 5px">返回</span>
        </a>
    </div>
    <h1 class="am-header-title" style="margin: 0px">
        红了吗网红供应链合作报名
    </h1>
</header>

<div class="am-intro-default am-padding-sm">
    <blockquote>
        <p>我们目前正在运营一个由薛蛮子和徐小平投资了2千万的国内最大的网红项目，旗下有5万多优质网红，以视频互动的红人，微信微博的大咖，
            以及知名的影视名星为主，我们正在寻找品牌营销的合作以及供应链产品的合作，目前茵曼，裂帛，骆驼等都已经参与到这个体系中来，淘宝， 京东， 聚美等平台也都已经参与战略合作。欢迎您报名参加！请加飞电微信
            13067923360
        </p>
    </blockquote>
        <span class="am-intro-title">
        </span>
</div>
<div class="am-g">
    <div class="am-u-sm-12 am-padding-top-lg">
        <a href="factory_index" class="am-btn am-btn-primary am-btn-block am-round">我有工厂</a>
    </div>
    <div class="am-u-sm-12 am-padding-top-lg">
        <a href="brand_index" class="am-btn am-btn-success am-btn-block am-round">我是品牌商</a>
    </div>
    <div class="am-u-sm-12 am-padding-top-lg">
        <a href="designer_index" class="am-btn am-btn-danger am-btn-block am-round">我是设计师</a>
    </div>
    <div class="am-u-sm-12 am-padding-top-lg">
        <a href="stall_index" class="am-btn am-btn-warning am-btn-block am-round">我有档口</a>
    </div>
</div>
<div class="qrcode am-g am-text-center am-padding-top">
    <div class="am-u-sm-12">
        <div class="am-thumbnail">
            <img src="/images/fdcode.jpg">

            <p>负责人飞电微信</p>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" charset="utf-8">
    wx.config(<?php echo $js->config(array('chooseImage', 'uploadImage','previewImage')) ?>);
</script>
<script>
    wx.ready(function () {
        wx.onMenuShareAppMessage({
            title : "红了吗网红供应链合作报名",
            desc : "我们目前正在运营一个由薛蛮子和徐小平投资了2千万的国内最大的网红项目，旗下有5万多优质网红...",
            link : "http://m.honglema.com/",
            imgUrl : "/images/fdcode.jpg",
            success : function(res) {
                // 分享成功
            },
            cancel : function(res) {
                //分享取消
            }
        });

        wx.onMenuShareTimeline({
            title : "红了吗网红供应链合作报名",
            link : "http://m.honglema.com/",
            imgUrl : "/images/fdcode.jpg",
            success : function(res) {
                // 分享成功
            },
            cancel : function(res) {
                //分享取消
            }
        });
    })

    wx.error(function (res) {
        //alert(res.errMsg);
    });

</script>


<script src="/js/amazeui.min.js"></script>
</body>
</html>