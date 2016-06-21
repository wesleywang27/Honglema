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
                            @foreach($data as $order)
                                @if($order['status']=="1")
                                <div id="" class="item">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media"><i class="icon icon-f7"></i></div>
                                            <div class="item-inner">
                                                <div class="item-title">    <a href="/star/merchant?merchant_id={{$order['merchant_id']}} " class="item-link item-content">{{$order['merchant_name']}}</a></div>
                                                <div class="item-after">抢单中</div>
                                            </div>
                                        </li>
                                        <li class="item-content"><a href="/star/order_detail?order_id={{$order['order_id']}}" class="item-link item-content">
                                            <div class="item-media"><img src="{{$order['avatar']}}" style='width: 4rem;'></div>
                                            <div class="item-inner">
                                                <div class="item-title">{{$order['title']}}</div>
                                                <div class="item-after">{{$order['total_price']}}</div>
                                            </div>
                                            </a>
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
                                @foreach($data as $order)
                                    @if($order['status']=="2"||$order['status']=="3")
                                        <div id="" class="item">
                                            <ul>
                                                <li class="item-content">
                                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                                    <div class="item-inner">
                                                        <div class="item-title">{{$order['merchant_name']}}</div>
                                                        <div class="item-after">{{$order['status']==2?"进行中":"已上传图片"}}</div>
                                                    </div>
                                                </li>
                                                <li class="item-content">
                                                    <div class="item-media"><img src="{{$order['avatar']}}" style='width: 4rem;'></div>
                                                    <div class="item-inner">
                                                            <div class="item-title">{{$order['title']}}</div>
                                                <div class="item-after">{{$order['total_price']}}</div>
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
                                @foreach($data as $order)
                                    @if($order['status']=="4"||$order['status']=="5"||$order['status']=="0")
                                        <div id="" class="item">
                                            <ul>
                                                <li class="item-content">
                                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                                    <div class="item-inner">
                                                        <div class="item-title">{{$order['merchant_name']}}</div>
                                                        <div class="item-after">@if($order['status']=="4")
                                                                                商家已评论@endif
                                                                            @if($order['status']=="5")
                                                                                商家已付款@endif
                                                                            @if($order['status']=='0')
                                                                                申请未通过@endif
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item-content">
                                                    <div class="item-media"><img src="{{$order['avatar']}}" style='width: 4rem;'></div>
                                                    <div class="item-inner">
                                                           <div class="item-title">{{$order['title']}}</div>
                                                <div class="item-after">{{$order['total_price']}}</div>
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


 

