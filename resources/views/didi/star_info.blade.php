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
        <table border="2" width="95%" height="360" style="margin: 20px;">
            <tr>
                <th width="12%">红人昵称：</th>
                <td width="13%">{{ $star->name}}</td>
                <th width="12%">性别：</th>
                @if ($star->sex == 0)
                <td width="13%">未知</td>
                @elseif ($star->sex == 1)
                <td width="13%">男</td>
                @else
                <td width="13%">女</td>
                @endif
                <th width="12%">所在地区：</th>
                <td width="13%">{{ $star->location}}</td>
            </tr>
            <tr>
                <th>罩杯</th>
                <td>{{ $star->cup}}</td>
                <th>体重</th>
                <td>{{ $star->weight}}</td>
                <th>身高</th>
                <td>{{ $star->height}}</td>
            </tr>
            <tr>
                <th>年龄</th>
                <td>{{ $star->age}}</td>
                <th>职业</th>
                <td>{{ $star->occupation}}</td>
                <th>学历</th>
                <td>{{ $star->education}}</td>
            </tr>
            <tr>
                <th>真实姓名</th>
                <td>{{ $star->real_name}}</td>
                <th>身份证号</th>
                <td>{{ $star->ID_number}}</td>
                <th>手机号码</th>
                <td>{{ $star->cellphone}}</td>
            </tr>
            <tr>
                <th>微信账号</th>
                <td>{{ $star->wechat}}</td>
                <th>微博账号</th>
                <td>{{ $star->weibo_id}}</td>
                <th>微拍账号</th>
                <td>{{ $star->weipai_id}}</td>
            </tr>
            <tr>
                <th>秒拍账号</th>
                <td>{{ $star->miaopai_id}}</td>
                <th>美拍账号</th>
                <td>{{ $star->meipai_id}}</td>
                <th>快手账号</th>
                <td>{{ $star->kuaishou_id}}</td>
            </tr>
            <tr>
                <th>上衣尺寸</th>
                <td>{{ $star->shirt_size}}</td>
                <th>下衣尺寸</th>
                <td>{{ $star->pants_size}}</td>
                <th>鞋子尺寸</th>
                <td>{{ $star->shoes_size}}</td>
            </tr>
            <tr>
                <th>所在省</th>
                <td>{{ $star->province}}</td>
                <th>所在市</th>
                <td>{{ $star->city}}</td>
                <th>所在区</th>
                <td>{{ $star->region}}</td>
            </tr>
            <tr>
                <th>详细地址</th>
                <td colspan="5">{{ $star->address}}</td>
            </tr>
            <tr>
                <th width="12%">经历：</th>
                <td colspan="7">{{ $star->experience}}</td>
            </tr>
        </table>
        <a href="javascript:history.back();" style="float: right; margin-right: 40px;"><input type="button" value="返回" class="link_btn"/></a>
        @if($star->status == 0)
        <a href="{{URL::action('StarController@starCheck', ['id' => $star->star_id]) }}" style="float: right; margin-right: 20px;"><input type="button" value="审核通过" class="link_btn"/></a>
        @endif
    </div>

    <div class="admin_tab_cont">
        <div style="margin-left: 20%">
            @foreach ($pictures as $picture)
            <a href="{{ $picture->url }}" target="_blank"><img src="{{ $picture->url }}" style="width: 80px; height: 80px;"/></a>
            @endforeach
        </div>
        <a href="javascript:history.back();" style="float: right; margin-top: 20px; margin-right: 20%;"><input type="button" value="返回" class="link_btn"/></a>
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