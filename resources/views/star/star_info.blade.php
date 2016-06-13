@extends('star.star')
@section('back', '&nbsp;')
@section('title', '个人信息')
<style>
    .info_header{
        padding: 10px;
        height:120px;
        width:100%;
        background-color: #0a8ddf;
        border-top: 1px solid #9b9b9b;
        border-bottom: 1px solid #9b9b9b;
    }
    .info_header img{
        width: 90px;
        height: 90px;
        border-radius:50%;
        float: left;
        overflow:hidden;
    }
    .info_pic{
        width: 30%;
        height: 100%;
        float: left;
    }
    .info_name{
        width:30%;
        float: left;
        margin-top: 8%;
    }
    .info_header a{
        width: 29%;
        float:left;
        text-align: center;
        margin-top: 7%;
    }
    .info_nav{
        height: 90px;
        width:100%;
        background-color: #2ac845;
        border-top: 1px solid #9b9b9b;
        border-bottom: 1px solid #9b9b9b;
    }
    .info_cell{
        width:25%;
        float:left;
        height:40px;
        background: white; }
    .info_nav a{
        padding-left: 5%;
        display: block;
    }
    .info_detail{
        margin-top: 3%;
        width: 100%;
        border-top: 1px solid #9b9b9b;
        border-bottom: 1px solid #9b9b9b;
    }
    .info_detail ul{
        margin: 0;
        padding: 0;
    }
    .info_detail li{
        height:6%;
        line-height: 250%;
        border-top: 1px solid #9b9b9b;
        border-bottom: 1px solid #9b9b9b;
        list-style: none;
    }
    .info_detail a{
        padding-left: 5%;
        display: block;
        float: right;
    }
    .sign_out{
        height: 5%;
        display: block;
        border-top: 1px solid #9b9b9b;
        border-bottom: 1px solid #9b9b9b;
        text-align: center;
        line-height: 250%;
        margin-top: 5%;
    }
    </style>

@section('context')
<div class="info_header">
        <div class="info_pic" ><img src="/images/profile.jpg"></div>
        <div class="info_name">小王子<br>等级7级</div>
    <a href="#"><i class="icon-angle-right"></i></a>
    </div>
    <div class="info_nav">
         <div class="info_cell">  <a href="#">相册</a></div>
         <div class="info_cell">  <a href="#">手机认证</a></div>
         <div class="info_cell">  <a href="#">身份认证</a></div>
         <div class="info_cell">  <a href="#">平台信息</a></div>
    </div>

    <div class="info_detail">
        <ul>
            <li>直播收费<a href="#">4~9W <i class="icon-angle-right"></i></a></li>
            <li>收货地址<a href="#">北京 <i class="icon-angle-right"></i></a></li>
            <li>微信号<a href="#">123 <i class="icon-angle-right"></i></a></li>
            <li>支付宝账号<a href="#">123 <i class="icon-angle-right"></i></a></li>
            <li>衣服尺寸<a href="#">12 <i class="icon-angle-right"></i></a></li>
            <li>标签设置<a href="#">d <i class="icon-angle-right"></i></a></li>
            <li>意见反馈<a href="#">意见反馈<i class="icon-angle-right"></i></a></li>
        </ul>
    </div>

        <a class="sign_out" href="#">退出登陆</a>
    @endsection