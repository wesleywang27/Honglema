@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">档口信息详情</h2>
</div>
</section>
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
                <th>是否支持一件代发</th>
                @if ($stall->shipmentOK == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
            </tr>
        </table>
        <a href="/cms/stall" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
        <input type="button" value="修改" class="link_btn"/>
        <button class="link_btn" id="showPopTxt">删除</button>
    </div>
    <div class="admin_tab_cont">
        <div class="container">
            <ul class="gallery">
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/zoom.min.js"></script>
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
</div>

@endsection