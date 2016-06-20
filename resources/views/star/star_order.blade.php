@extends('star.star_layouts')

@section('title', "我的任务")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">我的任务</h1>
    </header>
    <div class="content" style="top: 2.5rem;">
        <div class="buttons-tab">
            <a href="#tab1" class="tab-link active button">抢单中</a>
            <a href="#tab2" class="tab-link button">进行中</a>
            <a href="#tab3" class="tab-link button">已完成</a>
        </div>
        <div class="content-block"  style="padding: 0px">
            <div class="tabs">
                <div id="tab1" class="tab active">
                    <div class="content-block content-block-my content-no-margin"  style="padding: 0px">
                        <div class="list-block">
                            @foreach($orders as $order)
                                @if($order[3]=="1")
                                <div id="" class="item">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media"><i class="icon icon-f7"></i></div>
                                            <div class="item-inner">
                                                <div class="item-title">    <a href="#commodity " class="item-link item-content">{{$order[0]}}</a></div>
                                                <div class="item-after">抢单中</div>
                                            </div>
                                        </li>
                                        <li class="item-content">
                                            <div class="item-media"><img src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg" style='width: 4rem;'></div>
                                            <div class="item-inner">
                                                <div class="item-title">{{$order[1]}}</div>
                                                <div class="item-after">{{$order[2]}}</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab">
                    <div class="content-block" style="padding: 0px">

                        <div class="content-block content-block-my content-no-margin"  style="padding: 0px">
                            <div class="list-block">
                                @foreach($orders as $order)
                                    @if($order[3]=="2"||$order[3]=="3")
                                        <div id="" class="item">
                                            <ul>
                                                <li class="item-content">
                                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                                    <div class="item-inner">
                                                        <div class="item-title">{{$order[0]}}</div>
                                                        <div class="item-after">{{$order[3]==2?"进行中":"已上传图片"}}</div>
                                                    </div>
                                                </li>
                                                <li class="item-content">
                                                    <div class="item-media"><img src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg" style='width: 4rem;'></div>
                                                    <div class="item-inner">
                                                        <div class="item-title">{{$order[1]}}</div>
                                                        <div class="item-after">{{$order[2]}}</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div id="tab3" class="tab">
                    <div class="content-block" style="padding: 0px">

                        <div class="content-block content-block-my content-no-margin"  style="padding: 0px">
                            <div class="list-block">
                                @foreach($orders as $order)
                                    @if($order[3]=="4"||$order[3]=="5"||$order[3]=="0")
                                        <div id="" class="item">
                                            <ul>
                                                <li class="item-content">
                                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                                    <div class="item-inner">
                                                        <div class="item-title">{{$order[0]}}</div>
                                                        <div class="item-after">@if($order[3]=="4")
                                                                                商家已评论@endif
                                                                            @if($order[3]=="5")
                                                                                商家已付款@endif
                                                                            @if($order[3]=='0')
                                                                                申请未通过@endif
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item-content">
                                                    <div class="item-media"><img src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg" style='width: 4rem;'></div>
                                                    <div class="item-inner">
                                                        <div class="item-title">{{$order[1]}}</div>
                                                        <div class="item-after">{{$order[2]}}</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "main"])


@foreach($orders as $order)
@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">商家简介</h1>

    </header>
    <div class="content" style="top: 1.2rem;text-align: center;">
        <div class="list-block" style="margin:2rem auto;">
            <img id="wx_headimg" style="width: 50%;" src="/images/nike.jpg">
        </div>
        <div class="content-block" style="margin-top: -1rem;">

        </div>
    </div>

@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "commodity"+{{$order[]}}])
    @endsection
@endforeach
