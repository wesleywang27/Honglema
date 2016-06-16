<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<link rel="stylesheet" href="/css/merchant/reset.css" />
    	<link rel="stylesheet" href="/css/weui.css">
		<link rel="stylesheet" href="/css/merchant/styleRem.css" />
		<link rel="stylesheet" href="/css/merchant/labelCom.css"/>
		<script type="text/javascript" src="/js/jweixin-1.0.0.js"></script>
		<script src="/js/jquery.js"></script>
		<script src="/js/jquery-2.1.4.js"></script>
		<script src="/js/ajaxfileupload.js"></script>
		<script src="/js/jquery.cxselect.min.js" type="text/javascript"></script>
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
				<section onclick="window.location.href='#'" class="kouda_Com">
					<img class="scmimg_Com" src="/images/merchant/scmimg4.png" />
				</section>
				<div>商家注册</div>
			</header>
			<!--内容-->
			<form id="registerForm" method="post" action="/Merchant/register/save" enctype="multipart/form-data">
			<section class="content_Pda" id="content" >
				<div class="data_Pda">
					<div class="box_Pda">
						<div class="portrait_Pda">
							<div class="left_Pda">
							   头像
							</div>
							<div class="right_Pda">
								<a href="javascript:$('#img').click();">
									<img id="pic_img" src="{{$user['avatar']}}">
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
						<div class="other_Pda" onclick="showBox(this)" id="name" >
							<div class="left1_Pda">
								商家店铺名称
							</div>
							<div class="right1_Pda">
								<input type="text" id="nameBoxInput" name="name" readonly="readonly" placeholder="" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
						
					</div>
					<div class="box1_Pda">
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda" id="address" onclick="showBox(this)">
						<input type="hidden" name="country" value="">
						<input type="hidden" name="province" value="">
						<input type="hidden" name="city" value="">
						<input type="hidden" name="region" value="">
						<input type="hidden" name="address" value="">
							<div class="left1_Pda">
								商家地址
							</div>
							<div class="right1_Pda">
								<input type="text" id="addressBoxInput" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
						<div class="other_Pda" onclick="showBox(this)" id="contact" >
						<input type="hidden" name="wechat" value="">
						<input type="hidden" name="cellphone" value="">
							<div class="left1_Pda">
								联系方式
							</div>
							<div class="right1_Pda">
								<input type="text" id="contactBoxInput" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
						<div class="other_Pda" onclick="showBox(this)" id="alipay">
						<input type="hidden" name="alipay_name" value="">
						<input type="hidden" name="alipay_account" value="">
							<div class="left1_Pda">
								支付宝账号
							</div>
							<div class="right1_Pda">
								<input type="text" id="alipayBoxInput" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
						<div class="other_Pda" id="license" onclick="showBox(this)">
							<div class="left1_Pda">
								工商执照
							</div>
							<div class="right1_Pda">
								<input type="text" id="company" readonly="readonly" placeholder="请填写" value="">
							</div>
							<img src="/images/merchant/pdaimg.png" />
						</div>
					</div>
					<button type="submit">保存</button>
				</div>
			</section>
			</form>
		</div>
		
		
		<div class="wrap" id="nameBox" style="display: none;">
			<!--标题：个人资料-->
			<header class="head_Com_Mr">
				<section onclick="hiddenBox(this);" class="kouda_Com_Mr">
					<img class="scmimg_Com_Mr" src="/images/merchant/scmimg4.png" />
				</section>
				<div class="mid_Com_Mr">
					<p>商家店铺名称</p>
				</div>
				<section onclick="saveBox(this);" class="kouda_Com_Mr">
					<p>保存</p>
				</section>
				
			</header>
			<!--内容-->	
			<section class="content_Pda" >
				<div class="data_Pda">
					<div class="boxName_Pda">
						<div class="otherName_Pda">
							<input class="inputName_Pda" id="nameInput" type="text" placeholder="请输入店铺名称" value="">
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--商家地址-->
		<div class="wrap" id="addressBox" style="display: none;">
			<!--标题：商家地址-->
			<header class="head_Com_Mr">
				<section onclick="hiddenBox(this);" class="kouda_Com_Mr">
					<img class="scmimg_Com_Mr" src="/images/merchant/scmimg4.png" />
				</section>
				<div class="mid_Com_Mr">
					<p>商家地址</p>
				</div>
				<section onclick="saveSelect(this);" class="kouda_Com_Mr">
					<p>保存</p>
				</section>
			</header>
			<!--内容-->	
			<section class="content_Pda">
				<div class="weui_cells" id="global_location">
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select country" id="country" ></select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select province" id="province" ></select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select city" id="city" ></select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select region" id="region" ></select>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <textarea class="weui_textarea" id="addressInput" placeholder="请输入详细地址" rows="5"></textarea>
                    </div>
                </div>
            </div>
			</section>
		</div>
		<!--联系方式-->
		<div class="wrap" style="display: none;" id="contactBox">
			<!--标题：联系方式-->
			<header class="head_Com_Mr">
				<section onclick="hiddenBox(this);" class="kouda_Com_Mr">
					<img class="scmimg_Com_Mr" src="/images/merchant/scmimg4.png" />
				</section>
				<div class="mid_Com_Mr">
					<p>联系方式</p>
				</div>
				<section onclick="saveBox(this);" class="kouda_Com_Mr">
					<p>保存</p>
				</section>
			</header>
			<!--内容-->	
			<section class="content_Pda">
				<div class="data_Pda">
					<div class="box1_Pda">
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda">
							<div class="left1_Add">
								微信号
							</div>
							<div class="right1_Add">
								<input type="text" id="wechat" placeholder="请输入微信号" value="">
							</div>
						</div>
						<div class="other_Pda">
							<div class="left1_Add">
								手机号
							</div>
							<div class="right1_Add">
								<input type="text" id="cellphone" placeholder="请输入手机号" value="">
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--支付宝-->
		<div class="wrap"style="display: none;" id="alipayBox">
			<!--标题：支付宝-->
			<header class="head_Com_Mr">
				<section onclick="hiddenBox(this);" class="kouda_Com_Mr">
					<img class="scmimg_Com_Mr" src="/images/merchant/scmimg4.png" />
				</section>
				<div class="mid_Com_Mr">
					<p>支付宝</p>
				</div>
				<section onclick="saveBox(this);" class="kouda_Com_Mr">
					<p>保存</p>
				</section>
			</header>
			<!--内容-->	
			<section class="content_Pda">
				<div class="data_Pda">
					<div class="box1_Pda">
						<header class="direction_Pda">
							<div>
								
							</div>
						</header>
						<div class="other_Pda">
							<div class="left1_Add">
								支付宝姓名
							</div>
							<div class="right1_Add">
								<input type="text" id="alipay_name" placeholder="请输入微信号" value="">
							</div>
						</div>
						<div class="other_Pda">
							<div class="left1_Add">
								支付宝账号
							</div>
							<div class="right1_Add">
								<input type="text" id="alipay_account" placeholder="请输入手机号" value="">
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--工商执照-->
		<div class="wrap" style="display: none;" id="licenseBox">
			<header class="head_Com">
				<section onclick="hiddenBox(this);" class="kouda_Com">
					<img class="scmimg_Com" src="/images/merchant/scmimg4.png" />
				</section>
				
			</header>
			<!--内容-->	
			<section class="content_Pda">
				<div class="weui_uploader_bd">
                    <ul class="weui_uploader_files" id="files" style="display: inline;padding-left: 0;">
                    </ul>
                    <div class="weui_uploader_input_wrp" id="file_upload">
                        <!--                                <input class="weui_uploader_input" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">-->
                    </div>
                </div>
			</section>
		</div>
		</form>
	<script type="text/javascript" charset="utf-8">
    	wx.config(<?php echo $js->config(array('chooseImage', 'uploadImage','previewImage')) ?>);
	</script>
	<script type="text/javascript">
	 
		// 触发函数：点击输入框跳转页面
		function showBox(obj){
			obj=obj||this;
			var id = $(obj).attr('id');
			document.getElementById("main").style.display = "none";
			document.getElementById(id+"Box").style.display = "block";
			var value = $('#'+id+'BoxInput').val();
			var inputValues = value.split("/");
			var count = 0;
			$('#'+id+'Box').find("input").each(function () {
				if(count < inputValues.length){
					$(this).val(inputValues[count++]);
				}else{
					$(this).val('');
				}
                
            });
			document.getElementById(id+"Box").focus();

		}
		//触发函数：切换回主页面(不保存)
		function hiddenBox(obj){
			// obj=obj||this;
		    document.getElementById("main").style.display = "block";
		    obj.parentNode.parentNode.style.display = "none";
		    // document.getElementById("name").value = document.getElementById("inputName").value;
		}
		//触发函数：切换回主页面(保存)
		function saveBox(obj){
		    document.getElementById("main").style.display = "block";
		    obj.parentNode.parentNode.style.display = "none";
			node = obj.parentNode.parentNode||this;
			nodeId = $(node).attr('id');
			var value = '';
		    $(node).find("input").each(function () {
                // 显示在主页面
                var tmp = $(this).val();
                if(tmp == ''){
                	tmp = '  ';
                }
                value += tmp + '/';
				//改变隐藏的input值
				var name = $(this).attr('id');
				$("input[name='"+ name +"']").val(tmp);

            }); 
            value = value.substring(0,value.length-1);
		    $('#' + nodeId+'Input').val(value);
		}

		//触发函数：切换回主页面(保存地址选择框)
		function saveSelect(obj){
		    document.getElementById("main").style.display = "block";
		    obj.parentNode.parentNode.style.display = "none";
			node = obj.parentNode.parentNode||this;
			nodeId = $(node).attr('id');
			var value = '';
		    $(node).find("select").each(function () {
                var tmp = $(this).val();
                if(tmp == '请选择'||tmp == null){
                	tmp = ' ';
                }
                value += tmp + ' ';

                var name = $(this).attr('id');
				$("input[name='"+ name +"']").val(tmp);

            });
            value += $("#addressInput").val();
            $("input[name='address']").val($("#addressInput").val());
		    $('#' + nodeId+'Input').val(value);
		}

		jQuery.cxSelect.defaults.url = '/js/city.json';
	    jQuery('#global_location').cxSelect({
	        selects: ['country', 'province', 'city', 'region'],
	        nodata: 'none'
    	});
	</script>
	<script type="text/javascript">
    //图片需一张一张上传
    // wx.ready(function () {
    //     jQuery('#file_upload').click(function () {
    //         var images = {
    //             localId: [],
    //             serverId: []
    //         };

    //         wx.chooseImage({
    //             success: function (res) {
    //                 //$.AMUI.progress.start();
    //                 images.localId = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
    //                 wx.uploadImage({
    //                     localId: images.localId[0],
    //                     success: function (res) {
    //                         images.serverId[0] = res.serverId;
                            
    //                         jQuery.ajax({
    //                             url: "Merchant/register/uploadPicture",
    //                             data: {"media_id": sakjksvdjkadsjkldfsjlk},
    //                             success: function (data) {
    //                                 $html += '<li class="weui_uploader_file images" style="background-image:url(' + data + ')"><input type="hidden" id="itemImage" name="itemImage[]" value="' + data + '"/></li>';
    //                                 $("#files").append($html);
    //                                 //$.AMUI.progress.done();
    //                                 jQuery("#file_upload").hide();
    //                             }
    //                         });
                            
    //                     },
    //                     fail: function (res) {
    //                         alert(JSON.stringify(res));
    //                     }
    //                 });
    //             });
    //         });

            
            
    //     });
    // });
	var count = 0;
	wx.ready(function () {
        jQuery('#file_upload').click(function () {
            var images = {
                localId: [],
                serverId: []
            };
            $html = '';
            if(count < 1) {
                wx.chooseImage({
                    count: 1, // 限制每次只能选择一张
                    success: function (res) {
                        //$.AMUI.progress.start();
                        images.localId = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
                        jQuery.each(images.localId, function (i, n) {
                            wx.uploadImage({
                                localId: n,
                                success: function (res) {
                                    images.serverId[0] = res.serverId;
                                    jQuery.each(images.serverId, function (i, m) {
                                        jQuery.ajax({
                                            url: "/Merchant/register/uploadPicture",
                                            data: {"media_id": m},
                                            success: function (data) {
                                                count = count + 1;
                                                $html += '<li class="weui_uploader_file images" style="background-image:url(' + data + ')"><input type="hidden" id="itemImage" name="itemImage[]" value="' + data + '"/></li>';
                                                $("#files").append($html);
                                                //$.AMUI.progress.done();
                                                if(count == 1)
                                                    jQuery("#file_upload").hide();
                                            }
                                        });
                                    });
                                },
                                fail: function (res) {
                                    alert(JSON.stringify(res));
                                }
                            });
                        });
                    }
                });

            }
        });
    });



	</script>
	</body>
</html>