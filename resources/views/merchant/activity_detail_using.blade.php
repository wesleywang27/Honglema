<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<link rel="stylesheet" href="/css/merchant/reset.css" />
		<link rel="stylesheet" href="/css/Font-Awesome/css/font-awesome.css">
    	<link rel="stylesheet" href="/css/merchant/star.css">
		<link rel="stylesheet" href="/css/merchant/styleRem.css" />
		<link rel="stylesheet" href="/css/merchant/labelCom.css"/>
		<script type="text/javascript">
			
		</script>
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
				<section onclick="window.location.href='/Merchant/activityOrder/'" class="kouda_Com">
					<img class="scmimg_Com" src="/images/merchant/scmimg4.png" />
				</section>
				<div>编辑资料</div>
			</header>
			<!--内容-->
			<section class="content_Pda" id="content" >
				<div class="data_Pda">
					<div class="box_Pda">
						<div class="portrait_Pda">
							<div class="left_Pda">
								头像
							</div>
							<div class="right_Pda">
								<a href="javascript:$('#img').click();">
									<img id="pic_img" src="<?php echo isset($data['thumb']) && $data['thumb'] ? $data['thumb'] :'/images/merchant/guiimg8.png'; ?>">
								</a>
								<input type="file" name="picImg" id="img" accept="video/*;capture=camcorder" style="display: none;">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
					</div>
					<div class="box1_Pda">
						
						<div class="other_Pda">
							<div class="left1_Pda">
								韩润保湿乳推广活动
							</div>
							<div class="right1_Pda">
								5w
							</div>
						</div>
						<div class="other_Pda" style="border:none;height:auto">
							<div class="left1_Add">
								活动要求
							</div>
							<div class="right1_Add" style="height:auto">
								<div class="status">
									<p style="height:auto">1-3日</p>
						            <button>已抢单2/3</button>
					            </div>
							</div>
						</div>
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda" style="border:none;height:auto">
							<div class="left1_Add">
								活动要求
							</div>
							<div class="right1_Add" style="height:auto">
								<p style="height:auto">收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日</p>
							</div>
						</div>
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda" style="height:auto">
							<div class="left1_Add">
								商品介绍
							</div>
							<div class="right1_Add" style="height:auto">
								<p style="height:auto">收货后1～3日</p>
							</div>
						</div>
					
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						
						<div class="other_Pda" onclick="showCompanyBox()">
							<div class="left1_Pda">
								<?php 
									if($status == 1){
								?>
								已报名 + $num
								<?php
									}else if($status == 2){
								?>
								合作中
								<?php
									}else if($status == 3){
								?>
								合作
								<?php
									}
								?>
							</div>
						</div>
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
					</div>

				</div>
			</section>
			
		</div>
		
		
	</body>
</html>