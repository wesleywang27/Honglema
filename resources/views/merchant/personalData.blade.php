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
				<section onclick="window.location.href='/Merchant/user/'" class="kouda_Com">
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
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda" onclick="showNameBox()">
							<div class="left1_Pda">
								商家店铺名称
							</div>
							<div class="right1_Pda">
								<input type="text" id="name" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
						<div class="other_Pda" onclick="showProductBox()">
							<div class="left1_Pda">
								商家地址
							</div>
							<div class="right1_Pda">
								<input type="text" id="product" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
					</div>
					<div class="box1_Pda">
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda" onclick="showProductBox()">
							<div class="left1_Pda">
								联系方式
							</div>
							<div class="right1_Pda">
								<input type="text" id="product" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
						<div class="other_Pda" onclick="showCompanyBox()">
							<div class="left1_Pda">
								支付宝账号
							</div>
							<div class="right1_Pda">
								<input type="text" id="company" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
						<div class="other_Pda" onclick="showCompanyBox()">
							<div class="left1_Pda">
								工商执照
							</div>
							<div class="right1_Pda">
								<input type="text" id="company" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
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
		<div class="wrap" id="nameBox" style="display: none;">
			<!--标题：个人资料-->
			<header class="head_Com">
				<section onclick="hiddenNameBox();" class="kouda_Com">
					<img class="scmimg_Com" src="/images/merchant/scmimg4.png" />
				</section>
				<div>商家店铺名称</div>
			</header>
			<!--内容-->	
			<section class="content_Pda">
				<div class="data_Pda">
					<div class="boxName_Pda">
						<div class="otherName_Pda">
							<input class="inputName_Pda" id="inputName" type="text" placeholder="请输入店铺名称" value="">
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--产品介绍-->
		<div class="wrap" id="productBox" style="display: none;">
			<!--标题：个人资料-->
			<header class="head_Com">
				<section onclick="hiddenProductBox();" class="kouda_Com">
					<img class="scmimg_Com" src="/images/merchant/scmimg4.png" />
				</section>
				<div>商家地址</div>
			</header>
			<!--内容-->	
			<section class="content_Pda">
				<div class="data_Pda">
					<div class="boxName_Pda">
						<div class="otherName_Pda">
							<input class="inputName_Pda" id="inputProduct" type="text" placeholder="请填写产品介绍" value="">
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--公司介绍-->
		<div class="wrap" id="companyBox" style="display: none;">
			<!--标题：个人资料-->
			<header class="head_Com">
				<section onclick="hiddenCompanyBox();" class="kouda_Com">
					<img class="scmimg_Com" src="/images/merchant/scmimg4.png" />
				</section>
				<div>公司介绍</div>
			</header>
			<!--内容-->	
			<section class="content_Pda">
				<div class="data_Pda">
					<div class="boxName_Pda">
						<div class="otherName_Pda">
							<input class="inputName_Pda" id="inputCompany" type="text" placeholder="请填写公司介绍" value="">
						</div>
					</div>
				</div>
			</section>
		</div>
		
	</body>
</html>