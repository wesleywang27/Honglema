@extends('star.star_layouts')

@section('title', "创建用户")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">注册1/3</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <a href="#" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title"><span style="color:red">* </span>头像</div>
                            <div class="item-after">
                                <img id="f_wx_headimg" src="{{$user['avatar']}}" style="width: 1.4rem;height: 1.4rem;border-radius: 5px;">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title"><span style="color:red">* </span>昵称</div>
                            <div id="f_nickname" class="item-after">{{$user['nickname']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#sex" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title"><span style="color:red">* </span>性别</div>
                            <input id="sexvalue" style="visibility: hidden;">
                            <div id="f_sex" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#phoneconfirm" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title"><span style="color:red">* </span>手机号</div>
                            <div class="item-after" id="f_phonenum"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content-block-title"  style="margin-top: -1rem;">平台信息<span>(至少填写一个)</span></div>
        <div class="list-block">
            <ul>
                <li>
                    <a href="#weibo" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">微博账号</div>
                            <div id="f_weiboid" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#weipai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">微拍账号</div>
                            <div id="f_weipaiid" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#miaopai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">秒拍账号</div>
                            <div id="f_miaopaiid" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#meipai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">美拍账号</div>
                            <div id="f_meipaiid" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#kuaishou" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">快手账号</div>
                            <div id="f_kuaishouid" class="item-after"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content-block" style="margin-top: -1rem;">
            <div class="row">
                <div class="col-100"><a href="#register2" class="button button-big button-fill button-danger">下一步</a></div>
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
            <img id="wx_headimg" style="width: 100%;" src="/images/profile.jpg">
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
                                <input id="nickname" type="text" placeholder="昵称">
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
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">性别</div>
                            <div class="item-input">
                                <input id='sex_picker' type="text" placeholder="性别">
                            </div>
                        </div>
                    </div>
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
        <h1 class="title">罩杯</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('dcup');">
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
                                <input id="dcup" type="text" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "cup"])

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
@include('partial/jquery_mobile_page', ["page_id" => "occupation"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">学历</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('deducation');">
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
                            <div class="item-title label">学历</div>
                            <div class="item-input">
                                <input id="deducation" type="text" placeholder="学历">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "education"])

{{--********************************************************2*************************************************************--}}
@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            上一步
        </a>
        <h1 class="title">注册2/3</h1>
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
            </ul>
        </div>

        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#cup" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">罩杯</div>
                            <div id="f_dcup" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#weight" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">体重</div>
                            <div id="f_tizhong" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#height" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">身高</div>
                            <div id="f_shengao" class="item-after"></div>
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
                            <div id="f_nianling" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#occupation" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">职业</div>
                            <div id="f_zhiye" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#education" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">学历</div>
                            <div id="f_deducation" class="item-after"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content-block" style="margin-top: -1rem;">
            <div class="row">
                <div class="col-100"><a href="#register3" class="button button-big button-fill button-danger">下一步</a></div>
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
        <a class="button button-link button-nav pull-right back" href="#register2">
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
        <a class="button button-link button-nav pull-right back" href="#register2" onclick="$.set_value('phonenum');">
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
                            <div style="width: 58%;display:inline;" class="item-input">
                                <input id="phonenum" type="text" placeholder="输入手机号">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
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
        <a class="button button-link button-nav pull-right back" href="#register2"  onclick="$.set_value('weiboid');">
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
                            <div class="item-title label">ID</div>
                            <div class="item-input">
                                <input id="weiboid" type="text" placeholder="填写ID">
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
        <a class="button button-link button-nav pull-right back" href="#register2"  onclick="$.set_value('weipaiid');">
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
                            <div class="item-title label">ID</div>
                            <div class="item-input">
                                <input id="weipaiid" type="text" placeholder="填写ID">
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
        <a class="button button-link button-nav pull-right back" href="#register2"  onclick="$.set_value('miaopaiid');">
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
                            <div class="item-title label">ID</div>
                            <div class="item-input">
                                <input id="miaopaiid" type="text" placeholder="填写ID">
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
        <a class="button button-link button-nav pull-right back" href="#register2"  onclick="$.set_value('meipaiid');">
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
                            <div class="item-title label">ID</div>
                            <div class="item-input">
                                <input id="meipaiid" type="text" placeholder="填写ID">
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
        <a class="button button-link button-nav pull-right back" href="#register2"  onclick="$.set_value('kuaishouid');">
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
                            <div class="item-title label">ID</div>
                            <div class="item-input">
                                <input id="kuaishouid" type="text" placeholder="填写ID">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "kuaishou"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            上一步
        </a>
        <h1 class="title">注册3/3</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <a href="#size" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">衣服尺寸</div>
                            <div id="f_cloth" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#address" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">收货地址</div>
                            <div id="f_dizhi" class="item-after"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="list-block">
            <ul>
                <li>
                    <a href="#wechat" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">微信号</div>
                            <div id="f_weixin" class="item-after">{{$user['wechat']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#alipay" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">支付宝账号</div>
                            <div id="f_zhifubao" class="item-after"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content-block" style="margin-top: -1rem;">
            <div class="row">
                <div class="col-100"><a id="finish" href="#" class="button button-big button-fill button-danger">完成注册</a></div>
            </div>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "register3"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register3">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">衣服尺寸</h1>
        <a class="button button-link button-nav pull-right back" href="#register3" onclick="$.set_size();">
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
                            <div class="item-title label">上衣尺寸</div>
                            <div class="item-input">
                                <input id="f_shirt" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="上衣尺寸">&nbsp;cm
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">下衣尺寸</div>
                            <div class="item-input">
                                <input id="f_pants" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="下衣尺寸">&nbsp;cm
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">鞋子尺寸</div>
                            <div class="item-input">
                                <input id="f_shoe" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="鞋码">&nbsp;cm
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "size"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register3" >
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">地区</h1>
        <a class="button button-link button-nav pull-right back" href="#register3" onclick="$.set_address('address-picker','address-detail');">
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
                            <div class="item-title label">地区</div>
                            <div class="item-input">
                                <input id='address-picker' type="text" placeholder="所在地区" value="北京 海淀区" readonly>
                                <input id='address-detail' type="text" placeholder="详细地址" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "address"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register3" >
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">微信号码</h1>
        <a class="button button-link button-nav pull-right back" href="#register3" onclick="$.set_value('weixin');">
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
                            <div class="item-title label">微信号码</div>
                            <div class="item-input">
                                <input id='weixin' type="text" placeholder="微信号码" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "wechat"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register3" onclick="">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">支付宝账号</h1>
        <a class="button button-link button-nav pull-right back" href="#register3" onclick="$.setAlipay()">
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
                            <div class="item-title label">支付宝账号</div>
                            <div class="item-input">
                                <input id='zhifubao' type="text" placeholder="支付宝账号" >
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">支付宝姓名</div>
                            <div class="item-input">
                                <input id='zhifubaoname' type="text" placeholder="支付宝姓名" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "alipay"])

@endsection
