@extends('star.star_layouts')

@section('title', "红了吗（试用版）")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">我的任务</h1>
    </header>
    <div class="content" style="top: 2rem;">
        <div class="buttons-tab">
            <a href="#tab1" class="tab-link active button" style="font-size:80%;background-color:#F6F6F6">抢单中</a>
            <a href="#tab2" class="tab-link button" style="font-size:80%;background-color:#F6F6F6">进行中</a>
            <a href="#tab3" class="tab-link button" style="font-size:80%;background-color:#F6F6F6">已完成</a>
        </div>
        <div class="content-block"  style="padding: 0px">
            <div class="tabs">
                <div id="tab1" class="tab active">
                  @foreach($data as $order)
                    @if($order['order_status']=="1"&&$order['isAvailable']==true)
                    <div class="content-block content-block-my content-no-margin"  style="padding: 0px">
         	          <div class="content-block content-block-my">
                        <div class="list-block content-no-margin" style="margin-top: -1.3rem;">
                            <ul>
                                <li class="item-content">
                                    <div class="item-inner">
                                        <div class="item-title">{{$order['merchant_name']}}</div>
                                        <div class="item-after" style="font-size:80%">抢单中</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="list-block media-list content-no-margin">
                            <ul>
                                <li class="item-content" onclick="window.location.href='/star/order_detail?order_id={{$order['order_id']}}'">
                                       <div class="item-media" style="margin-left:-0.3rem; margin-right:0">
                                           <img src="{{$order['picture']}}" style='width: 6rem;'>
                                       </div>
                                       <div class="item-inner"  style="background-color:#f0f0f0; margin: 0.4rem">
                                           <div class="item-title" style="text-align:center;">{{$order['title']}}</div>
                                           <div class="item-subtitle" style="text-align:center;">￥{{$order['price']}}</div>
                                       </div>
                                </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>
                <div id="tab2" class="tab">
                  @foreach($data as $order)
                    @if($order['order_status']==2&&$order['task_status']<3)
                    <div class="content-block content-block-my content-no-margin"  style="padding: 0px">
         	          <div class="content-block content-block-my">
                        <div class="list-block content-no-margin" style="margin-top: -1.3rem;">
                            <ul>
                                <li class="item-content">
                                    <div class="item-inner">
                                        <div class="item-title">{{$order['merchant_name']}}</div>
                                        <div class="item-after" style="font-size:80%">进行中</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="list-block media-list content-no-margin">
                            <ul>
                                <li class="item-content" onclick="window.location.href='/star/order_detail?order_id={{$order['order_id']}}'">
                                       <div class="item-media" style="margin-left:-0.3rem; margin-right:0">
                                           <img src="{{$order['picture']}}" style='width: 6rem;'>
                                       </div>
                                       <div class="item-inner"  style="background-color:#f0f0f0; margin: 0.4rem">
                                           <div class="item-title" style="text-align:center;">{{$order['title']}}</div>
                                           <div class="item-subtitle" style="text-align:center;">￥{{$order['price']}}</div>
                                       </div>
                                </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>
                <div id="tab3" class="tab">
                  @foreach($data as $order)
                    @if(($order['order_status']==2 && $order['task_status']>2) || $order['order_status']==0||($order['order_status']=="1"&&$order['isAvailable']==false))
                    <div class="content-block content-block-my content-no-margin"  style="padding: 0px">
         	          <div class="content-block content-block-my">
                        <div class="list-block content-no-margin" style="margin-top: -1.3rem;">
                            <ul>
                                <li class="item-content">
                                    <div class="item-inner">
                                        <div class="item-title">{{$order['merchant_name']}}</div>
                                        <div class="item-after" style="font-size:80%">
                                        @if($order['order_status']==2 && $order['task_status']=="3")
                                           截图已上传
                                        @endif
                                        @if($order['order_status']==2 && $order['task_status']=="4")
                                           商家已评论
                                        @endif
                                        @if($order['order_status']==2 && $order['task_status']=="5")
                                           商家已付款
                                        @endif
                                        @if($order['order_status']==0)
                                           已取消
                                        @endif
                                        @if($order['order_status']=="1"&&$order['isAvailable']==false)
                                           已抢光
                                        @endif
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="list-block media-list content-no-margin">
                            <ul>
                                <li class="item-content" onclick="window.location.href='/star/order_detail?order_id={{$order['order_id']}}'">
                                       <div class="item-media" style="margin-left:-0.3rem; margin-right:0">
                                           <img src="{{$order['picture']}}" style='width: 6rem;'>
                                       </div>
                                       <div class="item-inner"  style="background-color:#f0f0f0; margin: 0.4rem">
                                           <div class="item-title" style="text-align:center;">{{$order['title']}}</div>
                                           <div class="item-subtitle" style="text-align:center;">￥{{$order['price']}}</div>
                                       </div>
                                </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>
            </div>
        </div>
    </div>
    @include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "main"])