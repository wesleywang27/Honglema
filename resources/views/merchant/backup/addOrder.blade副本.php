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
    	<link rel="stylesheet" href="/css/weui.css">
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
					<div>取消</div>
				</section>
				<div>发布</div>
			</header>
			<!--内容-->
			<section class="content_Pda" id="content" >
				<div class="data_Pda">
					<div class="box1_Pda">
						<header class="direction_Add">
								以下为商品信息
						</header>
						
                		<div class="pic_Add">
							<div class="weui_uploader_bd_Add" style="width:25%">
			                    <ul class="weui_uploader_files_Add" id="files" style="display: inline;padding-left: 0;">
			                    </ul>
			                    <div class="weui_uploader_input_wrp_Add" id="file_upload">
			                        <!--                                <input class="weui_uploader_input" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">-->
			                    </div>
			                </div>
			                <div class="weui_uploader_bd_Add" style="width:25%">
			                    <ul class="weui_uploader_files_Add" id="files" style="display: inline;padding-left: 0;">
			                    </ul>
			                    <div class="weui_uploader_input_wrp_Add" id="file_upload">
			                        <!--                                <input class="weui_uploader_input" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">-->
			                    </div>
			                </div>
			                <div class="weui_uploader_bd_Add" style="width:25%">
			                    <ul class="weui_uploader_files_Add" id="files" style="display: inline;padding-left: 0;">
			                    </ul>
			                    <div class="weui_uploader_input_wrp_Add" id="file_upload">
			                        <!--                                <input class="weui_uploader_input" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">-->
			                    </div>
			                </div>
			                <div class="weui_uploader_bd_Add" style="width:25%">
			                    <ul class="weui_uploader_files_Add" id="files" style="display: inline;padding-left: 0;">
			                    </ul>
			                    <div class="weui_uploader_input_wrp_Add" id="file_upload">
			                        <!--                                <input class="weui_uploader_input" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">-->
			                    </div>
			                </div>
						</div>
						<div class="other_Pda">
							<div class="left1_Add">
								商品介绍
							</div>
							<div class="right1_Add">
								<input type="text" id="name" placeholder="请输入文字" value="">
							</div>
						</div>
						<div class="other_Pda">
							<div class="left1_Add">
								商品介绍
							</div>
							<div class="right1_Add">
								<input type="text" id="name" placeholder="请输入文字" value="">
							</div>
						</div>
					</div>
					<div class="box1_Pda">
						<header class="direction_Add">
								以下为活动信息
						</header>
						<div class="other_Pda">
							<div class="left1_Add">
								活动标题
							</div>
							<div class="right1_Add">
								<input type="text" id="name" placeholder="请输入标题" value="">
							</div>
						</div>
						<div class="other_Pda">
							<div class="left1_Add">
								活动要求
							</div>
							<div class="right1_Add">
								<input type="text" id="product" placeholder="请输入要求" value="">
							</div>
						</div>
						<div class="other_Pda">
							<div class="left1_Pda">
								活动总场数
							</div>
							<div class="right1_Pda">
								<div class="head_img"><i class="icon-sort-down" style="font-size:24px;"></i></div>
							</div>
						
							
						</div>
						<div class="other_Pda">
							<div class="left1_Pda">
								网红数量
							</div>
							<div class="right1_Pda">
								<div class="head_img"><i class="icon-sort-down" style="font-size:24px;"></i></div>
							</div>
						</div>
						<div class="other_Pda">
							<div class="left1_Pda">
								活动单价
							</div>
							<div class="right1_Pda">
								<input type="text" id="name" placeholder="请输入价格" value="" >
								<p style="font-size:.14rem">&nbsp;/场</p>
							</div>
							
						</div>
						<div class="other_Pda" style="height:.35rem">
							<div class="left1_Pda" style="width:68%;text-align:right;height:.35rem">
								<p style="font-size:.14rem;margin-top:.08rem">总价</p>
							</div>
							<div class="right1_Pda" style="width:22%;height:.35rem">
								<input type="text" id="name" placeholder="0" value="" style="text-align:center;height:.35rem">
								<p style="font-size:.14rem">&nbsp;元</p>
							</div>
							
						</div>
					</div>
					<div class="box1_Pda">
						<header class="direction_Add">
						
								以下为网红要求
							
						</header>
						<div class="other_Pda" onclick="showNameBox()">
							<div class="left1_Pda">
								粉丝数
							</div>
							<div class="right1_Pda">
								<div class="head_img"><i class="icon-sort-down" style="font-size:24px;"></i></div>
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
		<div class="wrap" id="nameBox" style="display: none;">
			<!--标题：个人资料-->
			<header class="head_Com">
				<section onclick="hiddenNameBox();" class="kouda_Com">
					<img class="scmimg_Com" src="/images/merchant/scmimg4.png" />
				</section>
				<div>昵&nbsp; &nbsp;称</div>
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
				<div>产品介绍</div>
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