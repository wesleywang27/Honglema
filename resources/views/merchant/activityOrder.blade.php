<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<link rel="stylesheet" href="/css/merchant/reset.css" />
		<!--<link rel="stylesheet" href="__CSS__/test2/style.css" />-->
		<link rel="stylesheet" href="/css/merchant/styleRem.css" />
		<link rel="stylesheet" href="/css/merchant/labelCom.css"/>
		<link rel="stylesheet" href="/css/Font-Awesome/css/font-awesome.css">
    	<link rel="stylesheet" href="/css/merchant/star.css">
		<script src="/js/jquery.js"></script>
		<script src="/js/jquery-2.1.4.js"></script>
		<script src="/js/ajaxfileupload.js"></script>
		<script src="/js/merchant/js.js"></script>
		<script src="/js/merchant/majorObj.js"></script>
		<script src="/js/merchant/setinfo.js"></script>
	</head>

	<body>
		<div class="wrap" onclick="" id="main">
			<div class="contentPopup_Com" id="contentPopup" style="display: none;">
				<div class="pageBgPopup_Com"></div>
				
			</div>
			<!--标题：个人资料-->
			<header class="head_Com_Aod">
				<div>红了吗商家端</div>
				<div class="head_img"><i class="icon-plus" style="font-size:24px;" onclick="window.location.href='/Merchant/activityOrder/addOrder'"></i></div>
			</header>
			<!--内容-->
			<section class="content_Pda" id="content" >
				<div id="" class="nav">
				   <div class="cell div1_Aod on"><a href="#">已发布</a></div>
				    <div class="cell div2_Aod"><a href="#">已确定</a></div>
				    <div class="cell div3_Aod"><a href="#">已结束</a></div>
				</div>
				</section>
			<section class="content_Pda" id="content" >
				<div class="det1_Aod">
					<div id="" class="item" onclick="window.location.href='/Merchant/activityOrder/activityDetail/1'">
				        <div class="item_detail">
				            <div class="item_pic"><img src=""></div>
				            <div class="item_info">
				                <div class="info_font1">阿迪达斯推广活动</div>
				                <div class="info_font2">倒计时 00:10:59</div>
				            </div>
				            <div class="price">
				                <div class="price_font">￥5W</div>
				                <button>已抢单2/3</button>
				            </div>
				        </div>
				    </div>

				</div>
				<div class="det2_Aod">
						<div id="" class="item">
				        <div class="item_detail">
				            <div class="item_pic"><img src=""></div>
				            <div class="item_info">
				                <div class="info_font1">阿迪达斯推广活动</div>
				                <div class="info_font2">直播场数 2/3</div>
				            </div>
				            <div class="price">
				                <div class="price_font">￥5W</div>
				                <button>查看进度</button>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="det3_Aod">
					<div id="" class="item">
				        <div class="item_detail">
				            <div class="item_pic"><img src=""></div>
				            <div class="item_info">
				                <div class="info_font1">阿迪达斯推广活动</div>
				                <div class="info_font2">直播场数 3/3</div>
				            </div>
				            <div class="price">
				                <div class="price_font">￥5W</div>
				                <button>去评价</button>
				            </div>
				        </div>
				    </div>
				</div>
			</section>
		
			<div class="tail">
			    <div>
			        <a href="/star/square"><i class="icon-home"></i>网红广场</a></div>
			    <div>
			        <a href="/star/activity"><i class="icon-calendar"></i>活动广场</a></div>
			    <div>
			        <a href="/Merchant/activityOrder"><i class="icon-user"></i>活动订单</a></div>
			    <div>
			        <a href="/Merchant/user"><i class="icon-user"></i>我的</a></div>
			</div>

		</div>
	</body>
</html>