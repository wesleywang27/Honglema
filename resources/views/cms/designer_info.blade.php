@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">设计师信息详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <table border="2" width="95%" height="300" style="margin: 20px;">
            <tr>
                <th width="15%">姓名：</th>
                <td width="17%">{{ $designer->username}}</td>
                <th width="15%">手机号码：</th>
                <td width="17%">{{ $designer->mobile}}</td>
                <th width="15%">微信号：</th>
                <td width="16%">{{ $designer->weixinNo}}</td>
            </tr>
            <tr>
                <th>职位：</th>
                <td>{{ $designer->title}}</td>
                <th>设计师类型：</th>
                <td>{{ $designer->designType}}</td>
                <th>公司名称：</th>
                <td>{{ $designer->company}}</td>
            </tr>
            <tr>
                <th>公司地址：</th>
                <td colspan="5">{{ $designer->country}}{{ $designer->province}}{{ $designer->city}}{{ $designer->region}}{{ $designer->address}}</td>
            </tr>
            <tr>
                <th>是否有设计团队：</th>
                @if ($designer->designTeam == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>是否有自己的设计品牌：</th>
                @if ($designer->brand == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>设计品牌名称：</th>
                <td>{{ $designer->designBrand}}</td>
            </tr>
            <tr>
                <th>设计经历：</th>
                <td colspan="2"><textarea name="designExperience" style="width: 98%; height: 100px; margin-top: -18px; margin-bottom: -20px;" readonly>{{ $designer->designExperience}}</textarea></td>
                <th>备注：</th>
                <td colspan="2"><textarea name="description" style="width: 98%; height: 100px; margin-top: -18px; margin-bottom: -20px;" readonly>{{ $designer->description}}</textarea></td>
            </tr>
        </table>
        <a href="/cms/designer" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
        <a href="{{URL::action('CMSController@modifyDesignerInfo', ['id' => $designer->designer_id]) }}"><input type="button" value="修改" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
        <a href="{{URL::action('CMSController@deleteDesigner', ['id' => $designer->designer_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
    </div>
    <div class="admin_tab_cont">
        <form action="{{URL::action('CMSController@updateDesignerImg', ['id' => $designer->designer_id]) }}" method="post">
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
            <a href="/cms/designer" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
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