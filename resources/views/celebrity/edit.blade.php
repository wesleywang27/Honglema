@extends('layouts.jquery_mobile_app')

@section('title', "创建用户")

@section('body')
    @section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">注册1/2</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <a href="#headimg" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">头像</div>
                            <div class="item-after">
                                <img src="{{URL::asset('images/fav-icon.png')}}" style="width: 1.4rem;height: 1.4rem;border-radius: 5px;">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#name" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">昵称</div>
                            <div class="item-after">小丸子</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#sex" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">性别</div>
                            <div class="item-after">女</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#city" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">地区</div>
                            <div class="item-after" id="area"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#sanwei" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">三维</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#weight" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">体重</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#height" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">身高</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#weight" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">年龄</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#height" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">职业</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content-block" style="margin-top: -1rem;">
            <div class="row">
                <div class="col-100"><a href="#register2" class="button button-big button-fill button-success">下一步</a></div>
            </div>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "main"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">头像</h1>
        <a href="#" class="create-actions button button-link button-nav pull-right">
            <span class="icon icon-edit"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;background-color: black;text-align: center;">
        <div class="list-block" style="margin:6rem auto;">
            <img style="width: 100%;" src="{{URL::asset('images/fav-icon.png')}}">
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "headimg"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">昵称</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">姓名</div>
                            <div class="item-input">
                                <input type="text" placeholder="名字">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "name"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">性别</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <label class="label-checkbox item-content">
                        <input type="radio" name="my-radio">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                        <div class="item-inner">
                            <div class="item-title-row">
                                <div class="item-title">男</div>
                            </div>
                        </div>
                    </label>
                </li>
                <li>
                    <label class="label-checkbox item-content">
                        <input type="radio" name="my-radio">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                        <div class="item-inner">
                            <div class="item-title-row">
                                <div class="item-title">女</div>
                            </div>
                        </div>
                    </label>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "sex"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">地区</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">选择地区</div>
                            <div class="item-input">
                                <input id='city-picker' type="text" placeholder="所在地区" readonly>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "city"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">三围</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">胸围</div>
                            <div class="item-input">
                                <input style="width: 30%;display:inline;" type="text" placeholder="胸围">cm
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">腰围</div>
                            <div class="item-input">
                                <input style="width: 30%;display:inline;" type="text" placeholder="腰围">cm
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">臀围</div>
                            <div class="item-input">
                                <input style="width: 30%;display:inline;" type="text" placeholder="臀围">cm
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "sanwei"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">体重</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">体重</div>
                            <div class="item-input">
                                <input style="width: 30%;display:inline;" type="text" placeholder="体重">kg
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "weight"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">身高</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">身高</div>
                            <div class="item-input">
                                <input style="width: 30%;display:inline;" type="text" placeholder="身高">cm
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "height"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">年龄</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">年龄</div>
                            <div class="item-input">
                                <input type="text" placeholder="年龄">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "age"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">职业</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">职业</div>
                            <div class="item-input">
                                <input type="text" placeholder="职业">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "profession"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            上一步
        </a>
        <h1 class="title">注册2/2</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <a href="#experience" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">经历</div>
                            <div class="item-after">写一段自己的经历吧!</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#idconfirm" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">身份认证</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#phoneconfirm" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">手机认证</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content-block-title">平台信息</div>
        <div class="list-block">
            <ul>
                <li>
                    <a href="#weibo" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">微博ID</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#weipai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">微拍昵称</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#miaopai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">秒拍ID</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#meipai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">美拍ID</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#kuaishou" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">快手昵称</div>
                            <div class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "register2"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">经历</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li class="align-top">
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">经历描述</div>
                            <div class="item-input">
                                <textarea style="height: 10rem;" placeholder="写一段自己的经历吧~"></textarea>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "experience"])

@section('page-main')
<header class="bar bar-nav">
    <a id="codecfm" class="button button-link button-nav pull-left back" href="#register2">
        <span class="icon icon-left"></span>
        返回
    </a>
    <h1 class="title">手机认证</h1>
</header>
<div class="content" style="top: 1.2rem;">
    <div class="list-block">
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div style="width: 65%;display:inline;" class="item-input">
                            <input type="text" placeholder="输入手机号">
                        </div>
                        <div style="width: 50%;display: inline;">
                            <a href="#" id="sendcode" class="item-link list-button" style="border-left: 1px solid gray;line-height: 1.8rem;">获取验证码</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-input">
                            <input type="text" placeholder="输入验证码">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="content-block" style="margin-top: -1rem;">
        <div class="row">
            <div class="col-100"><a id="confirmcode" href="#" class="button button-big button-fill button-success">确  认</a></div>
        </div>
    </div>
</div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "phoneconfirm"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">身份认证</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">真实姓名</div>
                            <div class="item-input">
                                <input type="text" placeholder="名字">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">身份证号</div>
                            <div class="item-input">
                                <input type="text" placeholder="身份证">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">身份证照片</div>
                            <div class="item-input">
                                <input type="text" placeholder="照片">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "idconfirm"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">微博信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">ID</div>
                            <div class="item-input">
                                <input type="text" placeholder="填写ID">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">粉丝数</div>
                            <div class="item-input">
                                <input style="width: 70%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "weibo"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">微拍信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">昵称</div>
                            <div class="item-input">
                                <input type="text" placeholder="填写昵称">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">粉丝数</div>
                            <div class="item-input">
                                <input style="width: 70%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "weipai"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">秒拍信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">ID</div>
                            <div class="item-input">
                                <input type="text" placeholder="填写ID">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">粉丝数</div>
                            <div class="item-input">
                                <input style="width: 70%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "miaopai"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">美拍信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">ID</div>
                            <div class="item-input">
                                <input type="text" placeholder="填写ID">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">粉丝数</div>
                            <div class="item-input">
                                <input style="width: 70%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "meipai"])

    @section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">快手信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">昵称</div>
                            <div class="item-input">
                                <input type="text" placeholder="填写昵称">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">粉丝数</div>
                            <div class="item-input">
                                <input style="width: 70%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "kuaishou"])

@endsection
