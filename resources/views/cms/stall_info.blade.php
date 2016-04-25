@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">档口信息详情</h2>
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
                <td width="17%">{{ $stall->username}}</td>
                <th width="15%">手机号码：</th>
                <td width="17%">{{ $stall->mobile}}</td>
                <th width="15%">微信号：</th>
                <td>{{ $stall->weixinNo}}</td>
            </tr>
            <tr>
                <th>职位：</th>
                <td>{{ $stall->title}}</td>
                <th>档口名称：</th>
                <td>{{ $stall->stallName}}</td>
                <th>档口号：</th>
                <td>{{ $stall->stallNum}}</td>
            </tr>
            <tr>
                <th>档口地址(杭州/广州)：</th>
                <td colspan="5">{{ $stall->city}}{{ $stall->stall}}</td>
            </tr>
            <tr>
                <th>档口地址(其它)：</th>
                <td colspan="5">{{ $stall->country}}{{ $stall->province}}{{ $stall->stallCity}}{{ $stall->region}}{{ $stall->address}}</td>
            </tr>
            <tr>
                <th>档口服装风格：</th>
                <td>{{ $stall->style}}</td>
                <th>档口服装类目：</th>
                <td>{{ $stall->category}}</td>
                <th>是否支持一件代发：</th>
                @if ($stall->shipmentOK == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
            </tr>
        </table>
        <a href="/cms/stall" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
        <a href="{{URL::action('CMSController@modifyStallInfo', ['id' => $stall->stall_id]) }}"><input type="button" value="修改" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
        <a href="{{URL::action('CMSController@deleteStall', ['id' => $stall->stall_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
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
                    <input type="file"/>
                    <span>上传图片</span>
                </label>
                <div class="clear"></div>
            </div>
            <a href="/cms/stall" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
            <input type="submit" value="删除" class="link_btn"/>
            <input type="submit" value="保存" class="link_btn"/>
        </form>
        <script src="/js/jquery-1.9.1.min.js"></script>
        <script src="/js/zoom.min.js"></script>
    </div>
</section>
<!--tabStyle-->
<script>
    $(document).ready(function(){
        //tab
        $(".admin_tab li a").click(function(){
            var liindex = $(".admin_tab li a").index(this);
            $(this).addClass("active").parent().siblings().find("a").removeClass("active");
            $(".admin_tab_cont").eq(liindex).fadeIn(150).siblings(".admin_tab_cont").hide();
        });
    });
</script>

@endsection