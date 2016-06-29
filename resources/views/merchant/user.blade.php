@extends('merchant.merchant_layouts')

@section('title', "创建用户")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">商家注册</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-link item-content" onclick="window.location.href='/Merchant/user/modify'">
                        <div class="item-inner">
                        <div class="item-after">
                                <img id="f_avatar" src="{{$merchant['avatar']}}" style="width: 1.4rem;height: 1.4rem;border-radius: 5px;">
                            </div>
                            <div class="item-title">{{$merchant['name']}}</div>
                            
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#feedback" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">意见反馈</div>
                            <!-- <input type="hidden" id="merchant_link_hidden" value=""> -->
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#about" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">关于红了吗</div>
                        </div>
                    </a>
                </li>
                
            </ul>
        </div>
       
    </div>
    <nav class="bar bar-tab">
        <a class="tab-item external" href="#">
            <span class="icon icon-home"></span>
            <span class="tab-label">热门活动</span>
        </a>
        <a class="tab-item external" href="/Merchant/activityOrder">
            <span class="icon icon-star"></span>
            <span class="tab-label">活动订单</span>
        </a>
        <a class="tab-item external active" href="#">
            <span class="icon icon-settings"></span>
            <span class="tab-label">我的</span>
        </a>
    </nav>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "main"])



@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">意见反馈</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('merchant_link');">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">意见反馈</div>
                            <div class="item-input">
                                <input id="merchant_link" type="text" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "feedback"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">关于红了吗</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-input">
                                <input id="merchant_link" type="text" readonly>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "about"])

@endsection
