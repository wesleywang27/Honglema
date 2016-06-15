@extends('star.star')
@section('back', '&nbsp;')
@section('title', '个人信息')
@section('nav')
    <style>
        .info_nav{
            width: 100%;
            border-top:2px solid #9b9b9b;
            border-bottom: 1px solid #9b9b9b;
            text-align:center;
            background: white;
            height:100px;
            overflow: hidden;
            padding: 0px;
        }
        .info_cell{
            width:33.3%; float:left; height:100px;background: white;
        }
        .info_cell a{
            margin:0 auto;
            height:100px;
            line-height:100px;
            text-decoration:none;
            color:black;
            font-size: 18px;
            margin-right: 3px;
            display: block;
        }
        .info_nav_cell{
            width:24.5%; float:left; height:100px;background: white;border-left: 1px lightgrey solid;
        }
        .info_nav_cell a{
            margin:0 auto;
            height:100px;
            line-height:100px;
            text-decoration:none;
            color:black;
            font-size: 18px;
            margin-right: 3px;
            display: block;
        }
        .info_cell img{
            margin-top: 5px;
            height: 90px;
            width: 90px;
            border-radius: 50%;
        }
        .info_detail{
            margin-top: 10px;;
            border-top: 1px solid #9b9b9b;
            border-bottom: 1px solid #9b9b9b;
            background: white;
            overflow: hidden;
            padding: 0px;
        }

        .info_detail a{
            float: right;
            background: white;
            height:39px;
            overflow: hidden;
            padding: 0px;
            padding-left: 10px;
        }
        .info_item{
            border-width:1px;
            border-bottom-style:solid;
            border-bottom-color: #9b9b9b;
            background: white;
            height:39px;
            overflow: hidden;
            padding: 0px;
            padding-left: 10px;
        }
        .info_item a{
            margin:0 auto;
            height:40px;
            line-height:40px;
            text-decoration:none;
            color:black;
            font-size: 18px;
            margin-right: 5px;
        }
        .info_item span{
            margin-right: 40px;
        }

    </style>
    <div id="" class="info_nav">
        <div class="info_cell">  <a href="#"><img src="/images/profile.jpg"></a></div>
        <div class="info_cell">  <a href="#">{{$star_info->name}}</a></div>
        <div class="info_cell">  <a href="#">&nbsp;<i class="icon-angle-right "></i></a></div>
    </div>
    <div id="" class="info_nav">
        <div class="info_nav_cell">  <a href="#">相册</a></div>
        <div class="info_nav_cell">  <a href="#">手机认证</a></div>
        <div class="info_nav_cell">  <a href="#">身份认证</a></div>
        <div class="info_nav_cell">  <a href="#">平台信息</a></div>
    </div>
@endsection
@section('context')
        <div id="" class="info_detail">
            <div class="info_item">
                <a href="#"><span>{{$star_info->name}}</span><i class="icon-angle-right  "></i> </a>
            </div>
            <div class="info_item">
                <a href="#"><span>{{$star_info->name}}</span><i class="icon-angle-right  "></i> </a>
            </div>
            <div class="info_item">
                <a href="#"><span>{{$star_info->name}}</span><i class="icon-angle-right  "></i> </a>
            </div>

        </div>
@endsection


@section('footer')
    @@parent
@endsection