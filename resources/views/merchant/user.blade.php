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
			<header class="head_Com">
				<div>我的</div>
			</header>
			<!--内容-->
			<section class="content_Pda" id="content" >
				<div class="data_Pda">
					<div class="box_Pda" onclick="window.location.href='/Merchant/user/modify'">
						<div class="portrait_Pda" >
							<div class="left_User">
								<a href="javascript:$('#img').click();">
									<img id="pic_img" src="<?php echo isset($data['thumb']) && $data['thumb'] ? $data['thumb'] :'/images/merchant/guiimg8.png'; ?>">
								</a>
							</div>
							<div class="right_User">
								{{$merchant['name']}}
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
						
					</div>
					<div class="box1_Pda">
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda" onclick="">
							<div class="left1_Pda">
								意见反馈
							</div>
							<div class="right1_Pda">
								<input type="text" id="name" readonly="readonly" >
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
					</div>
					<div class="box1_Pda">
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda" onclick="">
							<div class="left1_Pda">
								关于红了吗
							</div>
							<div class="right1_Pda">
								<input type="text" id="name" readonly="readonly" >
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
					</div>
					<div class="box1_Pda">
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda" onclick="">
							<div class="left1_Pda" style="width:93%;text-align:center">
								退出登录
							</div>
							<div class="right1_Pda" style="width:3%;">
								<input type="text" id="name" readonly="readonly" >
							</div>
						</div>
					</div>
					
					
				</div>
			</section>
			<div class="contentPopup_Com contentPopup_Pda" id="contentPopup" style="display: none;">
				<div class="pageBgPopup_Com" onclick="hiddenSelPda()"></div>
				<div class="selectPopup_Com" id="select" style="display: none;">
					<div>
						<p onclick="selectOptionsPda(this)" style="display: block;">123</p>
					</div>
				</div>
			</div>
		</div>
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
	</body>
</html>