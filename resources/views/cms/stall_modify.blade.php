@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">档口信息修改</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@updateStallInfo', ['id' => $stall->stall_id]) }}" method="post">
            <table border="2" width="95%" height="300" style="margin: 20px;">
                <tr>
                    <th width="15%">姓名：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="username" value="{{ $stall->username}}" /></td>
                    <th width="15%">手机号码：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="mobile" value="{{ $stall->mobile}}" /></td>
                    <th width="15%">微信号：</th>
                    <td><input style="width: 98%;height: 100%;" name="weixinNo" value="{{ $stall->weixinNo}}" /></td>
                </tr>
                <tr>
                    <th>职位：</th>
                    <td><input style="width: 98%;height: 100%;" name="title" value="{{ $stall->title}}" /></td>
                    <th>档口名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="stallName" value="{{ $stall->stallName}}" /></td>
                    <th>档口号：</th>
                    <td><input style="width: 98%;height: 100%;" name="stallNum" value="{{ $stall->stallNum}}" /></td>
                </tr>
                <tr>
                    <th>城市：<br>(杭州/广州填写此部分)</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="{{ $stall->city}}" /></td>
                    <th>档口：<br>(杭州/广州填写此部分)</th>
                    <td><input style="width: 98%;height: 100%;" name="stall" value="{{ $stall->stall}}" /></td>
                    <th>档口所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="{{ $stall->province }}" /></td>
                </tr>
                <tr>
                    <th>档口所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="stallCity" value="{{ $stall->stallCity}}" /></td>
                    <th>档口所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="{{ $stall->region}}" /></td>
                    <th>档口详细地址：</th>
                    <td><input style="width: 98%;height: 100%;" name="address" value="{{ $stall->address}}" /></td>
                </tr>
                <tr>
                    <th>档口服装风格：</th>
                    <td><input style="width: 98%;height: 100%;" name="style" value="{{ $stall->style}}" /></td>
                    <th>档口服装类目：</th>
                    <td><input style="width: 98%;height: 100%;" name="category" value="{{ $stall->category}}" /></td>
                    <th>是否支持一件代发：</th>
                    @if ($stall->shipmentOK == 1)
                    <td><input style="width: 98%;height: 100%;" name="shipmentOK" value="是" /></td>
                    @else
                    <td><input style="width: 98%;height: 100%;" name="shipmentOK" value="否" /></td>
                    @endif
                </tr>
                <tr>
                    <th>红了吗对接人：</th>
                    <td><input style="width: 98%;height: 100%;" name="contact" value="{{ $stall->contact}}" /></td>
                    <th></th>
                    <td></td>
                    <th></th>
                    <td></td>
                </tr>
            </table>
            <a href="javascript:history.back();" style=" margin-left:85%;"><input type="button" value="返回" class="link_btn"/></a>
            <input type="submit" value="保存" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/>
        </form>
    </div>
    <div class="admin_tab_cont">
        <form action="{{URL::action('CMSController@updateStallImg', ['id' => $stall->stall_id]) }}" method="post">
            <div class="container">
                <ul class="gallery">
                    @foreach ($pictures as $picture)
                    <li><a href="{{ $picture->url }}"><img src="{{ $picture->url }}" style="width: 80px; height: 80px;"/></a><label><input name="img[]" type="checkbox" value="{{ $picture->url }}" style="margin-top:5px;"/></label></li>
                    @endforeach
                </ul>
                <label class="uploadImg" style="margin-top:10px; margin-left:10px;">
                    <input type="file" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple=""/>
                    <span>上传图片</span>
                </label>
                <ul id="files" style="display: inline;padding-left: 0;">
                </ul>
                <div class="clear"></div>
            </div>
            <a href="javascript:history.back();" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
            <input type="submit" value="删除" class="link_btn"/>
            <input type="submit" value="保存" class="link_btn"/>
        </form>
        <script src="/js/jquery-1.9.1.min.js"></script>
        <script src="/js/zoom.min.js"></script>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/ajaxfileupload.js" charset="utf-8"></script>
<script>
    $(document).ready(function(){
        //tab
        $(".admin_tab li a").click(function(){
            var liindex = $(".admin_tab li a").index(this);
            $(this).addClass("active").parent().siblings().find("a").removeClass("active");
            $(".admin_tab_cont").eq(liindex).fadeIn(150).siblings(".admin_tab_cont").hide();
        });
    });

    jQuery('#fileupload').change(function(){
        jQuery.ajaxFileUpload({
            url:"/productPicture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:"fileupload",//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                var $htmls = '';
                for(var i=0; i<urls.length; i++){
                    $htmls += '<li style="width: 80px; height: 80px;background-image:url('+urls[i]+')"><input type="hidden" id="itemImage" name="itemImage[]" value="'+urls[i]+'"/></li>';
                }
                $('#files').append($htmls);
            }
        });
    });
</script>

@endsection