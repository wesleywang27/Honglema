@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">品牌商信息修改</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@updateBrandInfo', ['id' => $brand->brand_id]) }}" method="post">
            <table border="2" width="95%" height="360" style="margin: 20px;">
                <tr>
                    <th width="15%">姓名：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="username" value="{{ $brand->username}}" /></td>
                    <th width="15%">手机号码：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="mobile" value="{{ $brand->mobile}}" /></td>
                    <th width="15%">微信号：</th>
                    <td><input style="width: 98%;height: 100%;" name="weixinNo" value="{{ $brand->weixinNo}}" /></td>
                </tr>
                <tr>
                    <th>职位：</th>
                    <td><input style="width: 98%;height: 100%;" name="title" value="{{ $brand->title}}" /></td>
                    <th>公司名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="company" value="{{ $brand->company}}" /></td>
                    <th>品牌名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="brand" value="{{ $brand->brand}}" /></td>
                </tr>
                <tr>
                    <th>公司所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="{{ $brand->province }}" /></td>
                    <th>公司所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="{{ $brand->city}}" /></td>
                    <th>公司所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="{{ $brand->region}}" /></td>
                </tr>
                <tr>
                    <th>公司详细地址：</th>
                    <td><input style="width: 98%;height: 100%;" name="address" value="{{ $brand->address}}" /></td>
                    <th>2015年线上销售额：</th>
                    <td><input style="width: 98%;height: 100%;" name="sales" value="{{ $brand->sales}}" /></td>
                    <th>类目：</th>
                    <td><input style="width: 98%;height: 100%;" name="category" value="{{ $brand->category}}" /></td>
                </tr>
                <tr>
                    <th>是否自有工厂：</th>
                    @if ($brand->factory == 1)
                    <td><input style="width: 98%;height: 100%;" name="factory" value="是" /></td>
                    @else
                    <td><input style="width: 98%;height: 100%;" name="factory" value="否" /></td>
                    @endif
                    <th>厂房面积：</th>
                    <td><input style="width: 98%;height: 100%;" name="factorySize" value="{{ $brand->factorySize}}" /></td>
                    <th>是否有设计团队：</th>
                    @if ($brand->design == 1)
                    <td><input style="width: 98%;height: 100%;" name="design" value="是" /></td>
                    @else
                    <td><input style="width: 98%;height: 100%;" name="design" value="否" /></td>
                    @endif
                </tr>
                <tr>
                    <th>主营产品：</th>
                    <td><input style="width: 98%;height: 100%;" name="product" value="{{ $brand->product}}" /></td>
                    <th>客单价：</th>
                    <td><input style="width: 98%;height: 100%;" name="price" value="{{ $brand->price}}" /></td>
                    <th>商品风格：</th>
                    <td><input style="width: 98%;height: 100%;" name="style" value="{{ $brand->style}}" /></td>
                </tr>
                <tr>
                    <th>客户人群定位：</th>
                    <td><input style="width: 98%;height: 100%;" name="customPosition" value="{{ $brand->customPosition}}" /></td>
                    <th>客户年龄段：</th>
                    <td><input style="width: 98%;height: 100%;" name="customAge" value="{{ $brand->customAge}}" /></td>
                    <th>是否支持退换：</th>
                    @if ($brand->refund == 1)
                    <td><input style="width: 98%;height: 100%;" name="refund" value="是" /></td>
                    @else
                    <td><input style="width: 98%;height: 100%;" name="refund" value="否" /></td>
                    @endif
                </tr>
                <tr>
                    <th>红了吗对接人：</th>
                    <td><input style="width: 98%;height: 100%;" name="contact" value="{{ $brand->contact}}" /></td>
                    <th></th>
                    <td></td>
                    <th></th>
                    <td></td>
                </tr>
                <tr><th>备注：</th>
                    <td colspan="5"><textarea name="description" style="width: 99.3%; height: 60px; margin-top: -6px; margin-bottom: -8px;">{{ $brand->description}}</textarea></td>
                </tr>
            </table>
            <a href="javascript:history.back();" style=" margin-left:85%;"><input type="button" value="返回" class="link_btn"/></a>
            <input type="submit" value="保存" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/>
        </form>
    </div>
    <div class="admin_tab_cont">
        <form action="{{URL::action('CMSController@updateBrandImg', ['id' => $brand->brand_id]) }}" method="post">
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
            <a href="/cms/brand" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
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