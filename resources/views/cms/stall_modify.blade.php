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
        <table border="2" width="95%" height="300" style="margin: 20px;">
            <tr>
                <th width="15%">姓名：</th>
                <td width="17%"><input style="width: 98%;height: 100%;" value="{{ $stall->username}}" /></td>
                <th width="15%">手机号码：</th>
                <td width="17%"><input style="width: 98%;height: 100%;" value="{{ $stall->mobile}}" /></td>
                <th width="15%">微信号：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->weixinNo}}" /></td>
            </tr>
            <tr>
                <th>职位：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->title}}" /></td>
                <th>档口名称：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->stallName}}" /></td>
                <th>档口号：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->stallNum}}" /></td>
            </tr>
            <tr>
                <th>城市：<br>(杭州/广州填写此部分)</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->city}}" /></td>
                <th>档口：<br>(杭州/广州填写此部分)</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->stall}}" /></td>
                <th>档口所在省：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->province }}" /></td>
            </tr>
            <tr>
                <th>档口所在市：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->stallCity}}" />
                <th>档口所在区：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->region}}" />
                <th>档口详细地址：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->address}}" /></td>
            </tr>
            <tr>
                <th>档口服装风格：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->style}}" /></td>
                <th>档口服装类目：</th>
                <td><input style="width: 98%;height: 100%;" value="{{ $stall->category}}" /></td>
                <th>是否支持一件代发：</th>
                @if ($stall->shipmentOK == 1)
                <td><input style="width: 98%;height: 100%;" value="是" /></td>
                @else
                <td><input style="width: 98%;height: 100%;" value="否" /></td>
                @endif
            </tr>
        </table>
        <a href="javascript:history.go(-1);" style=" margin-left:85%;"><input type="button" value="取消" class="link_btn"/></a>
        <a href="#"><input type="button" value="保存" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
        </div>
    <div class="admin_tab_cont">
        <div class="container">
            <ul class="gallery">
                @foreach ($pictures as $picture)
                <li><a href="{{ $picture->url }}"><img src="{{ $picture->url }}" style="width: 80px;"/></a></li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
        <a href="javascript:history.go(-1);" style=" margin-left:85%;"><input type="button" value="返回" class="link_btn"/></a>
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