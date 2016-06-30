<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{URL::asset('css/sm.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/weui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sm-extend.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/merchant/myStyle.css')}}">
    <script type="text/javascript" src="{{URL::asset('js/jquery-1.8.3.min.js')}}" charset="utf-8"></script>
    <script type='text/javascript' src="{{URL::asset('js/zepto.min.js')}}" charset='utf-8'></script>
    <script type='text/javascript' src="{{URL::asset('js/sm.min.js')}}" charset='utf-8'></script>
    <script type='text/javascript' src="{{URL::asset('js/sm-extend.min.js')}}" charset='utf-8'></script>
	  <script type="text/javascript" src="{{URL::asset('js/ajaxfileupload.js')}}" charset="utf-8"></script>
    <style>
    

.add_commodity{
	float: left;
	position: relative;
	width: 100%;
	height: 59px;
	border: 1px dashed #cecece;
	background-color: #FFFFFF;
}
.add_commodity img{
	float: left;
	margin: 12px 13px;
	margin-left: 45%;
	width: 35px;
	height: 35px;
}
.commodity_model{
	display: none;
}
    </style>
</head>
<body>

  <header class="bar bar-nav">
      <a class="button button-link button-nav pull-left back" href="javascript:history.go(-1)">
            <span class="icon icon-left"></span>
      </a>
      <h1 class='title'>查看并评价</h1>
  </header>
  <form id="activityForm" method="post" action="/Merchant/activityOrder/saveActivity">
   <?php echo csrf_field(); ?>
  <div class="content" style="margin-bottom: 30px;">
    <div class="list-block content-no-margin">
    	<ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
			            <div class="item-title label">商品信息</div>
			        </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="content-block content-block-my content-no-margin">
        <div class="content-block content-block-my">
          	<div class="list-block content-no-margin" style="margin-top: -1rem;">
          		<ul>
		            <li>
		                <div class="item-content">
		                    <div class="item-inner">
		                     	<div class="item-title label">商品名称</div>
					            <div class="item-input">
					              <input type="text" placeholder="请输入商品名称" name="commodity_name[]">
					            </div>
					        </div>
		                </div>
		            </li>
		        </ul>
		        <ul>
		            <li>
		                <div class="item-content">
		                    <div class="item-inner">
		                    	<div class="item-title label">商品链接</div>
					            <div class="item-input">
					              <input type="text" placeholder="请输入商品链接" name="commodity_url[]">
					            </div>
					        </div>
		                </div>
		            </li>
		        </ul>
		        
		    </div>
		</div>
    </div>
    <div class="content-block content-block-my content-no-margin add_model">
        <div class="content-block content-block-my">
          	<div class="list-block content-no-margin" style="margin-top: -1rem;">
          		<ul>
			    	<li>
			            <div class="item-content">
			                <div class="item-inner">
					           <div class="add_commodity">
									<img src="/images/merchant/add-2.png" />
								</div>
					        </div>
			            </div>
			        </li>
			    </ul>
          	</div>
		</div>
    </div>

    <div class="list-block">
        <ul>
            <li>
                <div class="item-content" style="height:5rem">
                    <div class="item-inner" style="min-height:5rem">
                        <div class="item-title">活动图片1(在活动列表页展示)</div>
                        <div class="item-after" style="max-height:none">
                            <img id="headimgupload_pic" src="" style="width: 3rem;height: 3rem;border-radius: 5px;margin-bottom:1rem;margin-top:1rem">
                            <input id="headimgupload_input" name="picture" type="hidden">
                            <input class="weui_uploader_input" id="headimgupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content" style="height:5rem">
                    <div class="item-inner" style="min-height:5rem">
                        <div class="item-title">活动图片2(在活动详情页展示)</div>
                        <div class="item-after" style="max-height:none">
                            <img id="bannerimgupload_pic" src="" style="width: 3rem;height: 3rem;border-radius: 5px;margin-bottom:1rem;margin-top:1rem">
                            <input id="bannerimgupload_input" type="hidden" name="banner_picture">
                            <input class="weui_uploader_input" id="bannerimgupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                     	<div class="item-title label">活动标题</div>
			            <div class="item-input">
			              <input type="text" placeholder="请输入活动标题" name="title">
			            </div>
			        </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                     	<div class="item-title label">活动要求</div>
			            <div class="item-input">
			              <input type="text" placeholder="请输入活动要求" name="claim">
			            </div>
			        </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                     	<div class="item-title label">活动时间</div>
			            <div class="item-input">
			              	<select name="time_within" id="company">
                              	<option value="0">请选择...</option>
                              	<option value="三天内">三天内</option>
                              	<option value="七天内">七天内</option>
                              	<option value="十天内">十天内</option>
                        	</select>
			            </div>
			        </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                     	<div class="item-title label">活动场次</div>
			            <div class="item-input">
			              <input type="number" placeholder="请输入活动场次" name="task_num">
			            </div>
			        </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                    	<input type="hidden" name="price_level">
                     	<div class="item-title label">活动形式</div>
                     	@foreach ($priceLevel as $pvo)
			            <div class="item-input">
                              <button type="button" type="button" class="button button-warning button-level" style="width:5rem" onclick="changeData(this,{{$pvo['pl_id']}},{{$pvo['price']}})">{{$pvo['level']}}</button>
                        </div>
                        @endforeach

			        </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="list-block content-no-margin" style="z-index:999;
      position:fixed; bottom:0; left:0; width:100%; 
      text-align:center; _position:absolute;
 _top: expression_r(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight); overflow:visible;margin-top:999px;">
    	<ul>
            <li>
                <div class="item-content">
                    <div class="item-inner" style="padding-right: 0;">
			            <div id="price" class="item-title label" style="text-align: -webkit-center;">¥&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
			            <input type="hidden" name="total_price">
			            <div class="item-input">
			            </div>
			            <div class="item-input">
                              <button type="button" class="button button-warning button-fill" style="width:9rem;height:2.5rem;border-radius:0;background-color:#9ccc65" onclick="submitForm()">确认发布</button>
                        </div>
			        </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</form>



	

  	<div class="content-block content-block-my content-no-margin commodity_model">
        <div class="content-block content-block-my">
          	<div class="list-block content-no-margin" style="margin-top: -1rem;">
          		<ul>
		            <li>
		                <div class="item-content">
		                    <div class="item-inner">
		                     	<div class="item-title label">商品名称</div>
					            <div class="item-input">
					              <input type="text" placeholder="请输入商品名称" name="commodity_name[]">
					            </div>
					        </div>
		                </div>
		            </li>
		        </ul>
		        <ul>
		            <li>
		                <div class="item-content">
		                    <div class="item-inner">
		                    	<div class="item-title label">商品链接</div>
					            <div class="item-input">
					              <input type="text" placeholder="请输入商品链接" name="commodity_url[]">
					            </div>
					        </div>
		                </div>
		            </li>
		        </ul>
		        
		    </div>
		</div>
    </div>
  <script>
  $(function(){
  	$('.add_model').click(function(){
		var commodityModel = $('.commodity_model').clone(true);
		commodityModel.removeClass('commodity_model');
		$(this).before(commodityModel);
	});

 	  $('#headimgupload').change(function(){
        upLoadPic('headimgupload');
    });
    $('#bannerimgupload').change(function(){
        upLoadPic('bannerimgupload');
    });

  });
  
  function changeData(obj,level_id,price){
  	obj = obj||this;
  	$(".button-level").removeClass('button-fill');
  	$("input[name='price_level']").val(level_id);
  	$("input[name='total_price']").val(price);
  	$(obj).addClass('button-fill');
  	$('#price').html('¥&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+price);
  }

  //提交表单
  function submitForm(){
  	if($("input[name='task_num']").val()==''){
  		alert('请输入活动场次');
  	}else if($("input[name='title']").val()==''){
  		alert('请输入活动标题');
  	}else{
  		// $.toast("添加成功!",1000);
	   //  setTimeout(function(){
	    $('#activityForm').submit();

	    // },1000);
  	}
  } 

  function saveComment(){
      $.ajax({
        url: "/Merchant/activityOrder/saveComment",
        type: "POST",
        traditional: true,
        dataType: "JSON",
        data: {
            "task_id"   : "$task['task_id']}}",
            "comment"   : $('#comment').val()
        },
        success: function(data) {
            alert('保存成功');
           location.reload();
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  }

  function upLoadPic(id){

        $.ajaxFileUpload({
            url:"/picture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:id,//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                
                $('#'+ id + '_pic').attr('src',urls[0]);
                $('#'+ id + '_input').val(urls[0]);

            },error:function(data, status, e){
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        // $.ajaxFileUpload({
        //     url: '/Merchant/upLoadFile', //用于文件上传的服务器端请求地址
        //     type: 'post',
        //     secureuri: false, //一般设置为false
        //     fileElementId: id, //文件上传空间的id属性  <input type="file" id="file" name="file" />
        //     dataType: 'content', //返回值类型 一般设置为json
        //     success: function (data, status)  //服务器成功响应处理函数
        //     {
        //        $('#'+ id + '_pic').attr('src',data);
        //        $('#'+ id + '_input').val(data);
        //        // alert(data);
        //     },
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        //     // error: function (data, status, e)//服务器响应失败处理函数
        //     // {
        //     //     alert('上传失败');
        //     // }
        // });//这是ajax1结束Tags
                 return false;
    }
  
  </script>
</body>
</html>