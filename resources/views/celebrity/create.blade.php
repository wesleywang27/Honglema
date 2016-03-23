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
                            <img id="f_wx_headimg" src="{{$user->avatar}}" style="width: 1.4rem;height: 1.4rem;border-radius: 5px;">
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#name" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">昵称</div>
                        <div id="f_nickname" class="item-after">{{$user->nickname}}</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#sex" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">性别</div>
                        <div id="f_sex" class="item-after">{{$user->sex === Config::get("constants.SEX.MALE") ? '男':'女'}}</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#city" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">地区</div>
                        <div class="item-after" id="f_city-picker">{{$user->province}} {{$user->city}}</div>
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
                        <div class="item-title">三围</div>
                        <div id="f_sanwei" class="item-after">未编辑</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#weight" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">体重</div>
                        <div id="f_tizhong" class="item-after">未编辑</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#height" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">身高</div>
                        <div id="f_shengao" class="item-after">未编辑</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="list-block" style="margin-top: -1rem;">
        <ul>
            <li>
                <a href="#age" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">年龄</div>
                        <div id="f_nianling" class="item-after">未编辑</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#profession" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">职业</div>
                        <div id="f_zhiye" class="item-after">未编辑</div>
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
    <!--    <a href="#" class="create-actions button button-link button-nav pull-right">-->
    <!--        <span class="icon icon-edit"></span>-->
    <!--    </a>-->
</header>
<div class="content" style="top: 1.2rem;background-color: black;text-align: center;">
    <div class="list-block" style="margin:4rem auto;">
        <img id="wx_headimg" style="width: 100%;" src="{{$user->avatar}}">
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
    <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('nickname');">
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
                        <div class="item-input">
                            <input id="nickname" type="text" placeholder="{{$user->nickname}}">
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
    <a class="button button-link button-nav pull-left back" href="#main" onclick="$.set_sex();">
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
                    <input type="radio" name="sex-radio" value="M" {{$user->sex === Config::get("constants.SEX.MALE") ? 'checked="checked"':''}}>
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
                    <input type="radio" name="sex-radio" value="F" {{$user->sex === Config::get("constants.SEX.FEMALE") ? 'checked="checked"':''}}>
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
    <a class="button button-link button-nav pull-left back" href="#main" onclick="$.set_value('city-picker');">
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
                        <div class="item-title label">地区</div>
                        <div class="item-input">
                            <input id='city-picker' type="text" placeholder="所在地区" value="北京 海淀区" readonly>
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
    <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_sanwei('bust','waist','hip');">
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
                        <div class="item-title label">胸围</div>
                        <div class="item-input">
                            <input id="bust" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="胸围">&nbsp;cm
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
                            <input id="waist" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="腰围">&nbsp;cm
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
                            <input id="hip" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="臀围">&nbsp;cm
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
    <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('tizhong');">
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
                        <div class="item-title label">体重</div>
                        <div class="item-input">
                            <input id="tizhong" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="体重">&nbsp;kg
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
    <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('shengao');">
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
                        <div class="item-title label">身高</div>
                        <div class="item-input">
                            <input id="shengao" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="身高">&nbsp;cm
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
    <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('nianling');">
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
                        <div class="item-title label">年龄</div>
                        <div class="item-input">
                            <input id="nianling" type="text" placeholder="年龄">
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
    <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('zhiye');">
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
                        <div class="item-title label">职业</div>
                        <div class="item-input">
                            <input id="zhiye" type="text" placeholder="职业">
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
                <div class="item-content">
                    <div class="weui_uploader" style="margin-top: .5rem;margin-right: 1.5rem;">
                        <div class="weui_uploader_hd weui_cell">
                            <div class="weui_cell_bd weui_cell_primary">上传6张照片</div>
                        </div>
                        <div class="weui_uploader_bd">
                            <ul class="weui_uploader_files" id="imgfiles" style="padding-left: 0;float: left;">

                            </ul>
                            <div class="weui_uploader_input_wrp" style="width: 80px;height: 80px;float: left;">
                                <input class="weui_uploader_input" id="imgupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#experience" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">经历</div>
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
    <div class="content-block-title"  style="margin-top: -1rem;">平台信息</div>
    <div class="list-block">
        <ul>
            <li>
                <a href="#weibo" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">微博ID</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#weipai" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">微拍昵称</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#miaopai" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">秒拍ID</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#meipai" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">美拍ID</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#kuaishou" class="item-link item-content">
                    <div class="item-inner">
                        <div class="item-title">快手昵称</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="content-block" style="margin-top: -1rem;">
        <div class="row">
            <div class="col-100"><a id="finish" href="#" class="button button-big button-fill button-success">完成注册</a></div>
        </div>
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
    <a class="button button-link button-nav pull-right back" href="#main">
        保存
        <span class="save"></span>
    </a>
</header>
<div class="content" style="top: 1.2rem;">
    <div class="list-block">
        <ul>
            <li class="align-top">
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">描述</div>
                        <div class="item-input">
                            <textarea id="jingli" style="height: 10rem;margin-top:.25rem;" placeholder="写一段自己的经历吧~"></textarea>
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
                        <div style="width: 58%;display:inline;" class="item-input">
                            <input id="phonenum" type="text" placeholder="输入手机号">
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
                        <div class="item-title label">姓名</div>
                        <div class="item-input">
                            <input id="id_name" type="text" placeholder="名字">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">身份证</div>
                        <div class="item-input">
                            <input id="id_code" type="text" placeholder="身份证">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="weui_uploader" style="margin-left: .75rem;margin-top: .5rem;margin-right: 1.5rem;width:100%;">
                        <div class="weui_uploader_hd weui_cell">
                            <div class="weui_cell_bd weui_cell_primary">身份证照片</div>
                        </div>
                        <div class="weui_uploader_bd">
                            <ul class="weui_uploader_files" id="idfile" style="padding-left: 0;"></ul>
                            <div class="weui_uploader_input_wrp">
                                <input class="weui_uploader_input" id="fileupload" name="imgFiles" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                            </div>
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
                            <input id="weiboid" type="text" placeholder="填写ID">
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
                            <input id="weibofans" style="width: 80%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
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
                            <input id="weipaiid" type="text" placeholder="填写昵称">
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
                            <input id="weipaifans" style="width: 80%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
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
                            <input id="miaopaiid" type="text" placeholder="填写ID">
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
                            <input id="miaopaifans" style="width: 80%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
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
                            <input id="meipaiid" type="text" placeholder="填写ID">
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
                            <input id="meipaifans" style="width: 80%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
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
                            <input id="kuaishouid" type="text" placeholder="填写昵称">
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
                            <input id="kuaishoufans" style="width: 80%;display:inline;" type="text" placeholder="填写粉丝数">万(w)
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
