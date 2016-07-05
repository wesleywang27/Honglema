@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">红人信息详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <table border="2" width="95%" height="400" style="margin: 20px;">
            <tr>
                <th width="10%">红人昵称</th>
                <td width="13%" style="text-align:center">{{ $star->name}}</td>
                <th width="12%">性别</th>
                @if ($star->sex == 0)
                <td width="13%" style="text-align:center">未知</td>
                @elseif ($star->sex == 1)
                <td width="13%" style="text-align:center">男</td>
                @else
                <td width="13%" style="text-align:center">女</td>
                @endif
                <th width="12%">所在地区：</th>
                <td width="13%" style="text-align:center">{{ $star->location}}</td>
            </tr>
            <tr>
                <th>真实姓名</th>
                <td style="text-align:center">{{ $star->real_name}}</td>
                <th>身份证号</th>
                <td style="text-align:center">{{ $star->ID_number}}</td>
                <th>手机号码</th>
                <td style="text-align:center">{{ $star->cellphone}}</td>
            </tr>
            <tr>
                <th colspan="6" style="height:10px;"></th>
            </tr>
            <tr>
                <th>身高</th>
                <td style="text-align:center">{{ $star->height}}</td>
                <th>体重</th>
                <td style="text-align:center">{{ $star->weight}}</td>
                <th>罩杯</th>
                <td style="text-align:center">{{ $star->cup}}</td>
            </tr>
            <tr>
                <th>年龄</th>
                <td style="text-align:center">{{ $star->age}}</td>
                <th>职业</th>
                <td style="text-align:center">{{ $star->occupation}}</td>
                <th>学历</th>
                <td style="text-align:center">{{ $star->education}}</td>
            </tr>
            <tr>
                <th colspan="6" style="height:10px;"></th>
            </tr>
            <tr>
                <th>微信账号</th>
                <td style="text-align:center">{{ $star->wechat}}</td>
                <th>微博账号</th>
                <td style="text-align:center">{{ $star->weibo_id}}</td>
                <th>微拍账号</th>
                <td style="text-align:center">{{ $star->weipai_id}}</td>
            </tr>
            <tr>
                <th>秒拍账号</th>
                <td style="text-align:center">{{ $star->miaopai_id}}</td>
                <th>美拍账号</th>
                <td style="text-align:center">{{ $star->meipai_id}}</td>
                <th>快手账号</th>
                <td style="text-align:center">{{ $star->kuaishou_id}}</td>
            </tr>
            <tr>
                <th colspan="6" style="height:10px;"></th>
            </tr>
            <tr>
                <th>上衣尺寸</th>
                <td style="text-align:center">{{ $star->shirt_size}}</td>
                <th>下衣尺寸</th>
                <td style="text-align:center">{{ $star->pants_size}}</td>
                <th>鞋子尺寸</th>
                <td style="text-align:center">{{ $star->shoes_size}}</td>
            </tr>
            <tr>
                <th colspan="6" style="height:10px;"></th>
            </tr>
            <tr>
                <th>省</th>
                <td style="text-align:center">{{ $star->province}}</td>
                <th>市</th>
                <td style="text-align:center">{{ $star->city}}</td>
                <th style="text-align:center">区</th>
                <td>{{ $star->region}}</td>
            </tr>
            <tr>
                <th>详细地址</th>
                <td colspan="5">{{ $star->address}}</td>
            </tr>
            <tr>
                <th width="12%">经历：</th>
                <td colspan="5">{{ $star->experience}}</td>
            </tr>
        </table>
        <a href="javascript:history.back();" style="float: right; margin-right: 40px;"><input type="button" value="返回" class="link_btn"/></a>
        @if($star->status == 0)
        <a href="{{URL::action('StarController@starCheck', ['id' => $star->star_id]) }}" style="float: right; margin-right: 20px;"><input type="button" value="审核通过" class="link_btn"/></a>
        @endif
    </div>

    <div class="admin_tab_cont">
        <div style="margin-left: 8%">
            @foreach ($pictures as $picture)
            <a href="{{ $picture->url }}" target="_blank"><img src="{{ $picture->url }}" style="height: 200px;"/></a>
            @endforeach
        </div>
        <a href="javascript:history.back();" style="float: right; margin-top: 20px; margin-right: 10%;"><input type="button" value="返回" class="link_btn"/></a>
        @if($star->status == 0)
        <a href="{{URL::action('StarController@starCheck', ['id' => $star->star_id]) }}" style="float: right; margin-top: 20px; margin-right: 20px;"><input type="button" value="审核通过" class="link_btn"/></a>
        @endif
        <script src="/js/jquery-1.9.1.min.js"></script>
        <script src="/js/zoom.min.js"></script>
    </div>
</section>
<!--tabStyle-->

<script src="/js/jquery.min.js"></script>
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
</script>

@endsection