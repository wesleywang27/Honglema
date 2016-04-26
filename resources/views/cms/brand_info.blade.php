@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">品牌商信息详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <table border="2" width="95%" height="360" style="margin: 20px;">
            <tr>
                <th width="15%">姓名：</th>
                <td width="17%">{{ $brand->username}}</td>
                <th width="15%">手机号码：</th>
                <td width="17%">{{ $brand->mobile}}</td>
                <th width="15%">微信号：</th>
                <td width="16%">{{ $brand->weixinNo}}</td>
            </tr>
            <tr>
                <th>职位：</th>
                <td>{{ $brand->title}}</td>
                <th>公司名称：</th>
                <td>{{ $brand->company}}</td>
                <th>品牌名称：</th>
                <td>{{ $brand->brand}}</td>
            </tr>
            <tr>
                <th>公司地址：</th>
                <td colspan="5">{{ $brand->country}}{{ $brand->province}}{{ $brand->city}}{{ $brand->region}}{{ $brand->address}}</td>
            </tr>
            <tr>
                <th>2015年线上销售额：</th>
                <td>{{ $brand->sales}}</td>
                <th>类目：</th>
                <td>{{ $brand->category}}</td>
                <th>是否自有工厂：</th>
                @if ($brand->factory == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
            </tr>
            <tr>
                <th>厂房面积：</th>
                <td>{{ $brand->factorySize}}</td>
                <th>是否有设计团队：</th>
                @if ($brand->design == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>主营产品：</th>
                <td>{{ $brand->product}}</td>
            </tr>
            <tr>
                <th>客单价：</th>
                <td>{{ $brand->price}}</td>
                <th>商品风格：</th>
                <td>{{ $brand->style}}</td>
                <th>客户人群定位：</th>
                <td>{{ $brand->customPosition}}</td>
            </tr>
            <tr>
                <th>客户年龄段：</th>
                <td>{{ $brand->customAge}}</td>
                <th>是否支持退换：</th>
                @if ($brand->refund == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th>备注：</th>
                <td colspan="5"><textarea name="description" style="width: 99%; height: 60px; margin-top: -13px; margin-bottom: -15px;" readonly>{{ $brand->description}}</textarea></td>
            </tr>
        </table>
        <a href="/cms/brand" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
        <a href="{{URL::action('CMSController@modifyBrandInfo', ['id' => $brand->brand_id]) }}"><input type="button" value="修改" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
        <a href="{{URL::action('CMSController@deleteBrand', ['id' => $brand->brand_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
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