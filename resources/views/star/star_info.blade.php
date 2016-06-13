@extends('star.star')
@section('back', '&nbsp;')
@section('title', '个人信息')
<style>
    .info_header{
        height:15%;
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
    .info_header div{
        width: 29%;
        float:left;
        text-align: center;
        margin-top: 7%;
    }
    .info_header a{
        width: 29%;
        float:left;
        text-align: center;
        margin-top: 7%;
    }
    .info_nav{
        height: 10%;
        width:100%;
        background-color: #2ac845;
        border-top: 1px solid #9b9b9b;
        border-bottom: 1px solid #9b9b9b;
    }
    .info_nav ul{
        width: 100%;
        height:100%;
        margin: 0;
        padding: 0;
        border-top: 1px solid #9b9b9b;
        border-bottom: 1px solid #9b9b9b;
        overflow: hidden;

    }
    .info_nav li{
        line-height: 400%;
        height:100%;
        text-align: center;
        width: 24.70%;
        float: left;
        border-right: 1px solid black;
    }

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
         <img src="/images/profile.jpg">
        <div >小王子<br>等级7级</div>
    <a href="#"><i class="icon-angle-right"></i></a>
    </div>
    <div class="info_nav">
        <ul>
            <li><a href="#">相册</a></li>
            <li><a href="#">手机认证</a></li>
            <li><a href="#">身份认证</a></li>
            <li style="border: none"><a href="#">平台信息</a></li>
        </ul>
    </div>

    <div class="info_detail">
        <ul>
            <li><a href="#">直播收费</a></li>
            <li><a href="#">收货地址</a></li>
            <li><a href="#">微信号</a></li>
            <li><a href="#">支付宝账号</a></li>
            <li><a href="#">衣服尺寸</a></li>
            <li><a href="#">标签设计</a></li>
            <li><a href="#">意见反馈</a></li>
        </ul>
    </div>

        <a class="sign_out" href="#">退出登陆</a>
    @endsection