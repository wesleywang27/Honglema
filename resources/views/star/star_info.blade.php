@extends('star.star_layouts')

@section('title', "红了吗（试用版）")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">个人信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <a href="#info" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">{{$star['name']}}</div>
                            <div class="item-after">
                                <img id="f_wx_headimg1" src="{{$star['avatar']}}" style="width: 1.4rem;height: 1.4rem;border-radius: 5px;">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#album" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">相册</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#phoneconfirm" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">手机认证</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#idconfirm" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">身份认证</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#platform" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">平台信息</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#address" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">收件地址</div>
                            <div id="f_daddress" class="item-after">{{$star['address']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#wechat" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">微信号</div>
                            <div id="f_dwechat" class="item-after">{{$star['wechat']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#alipay" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">支付宝账号</div>
                            <div id="f_alipay_account" class="item-after">{{$star['alipay_account']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#size" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">衣服尺寸</div>
                            <div id="f_cloth" class="item-after">{{$star['shirt_size'].'/'.$star['pants_size'].'/'.$star['shoes_size']}}</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "main"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">个人信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <a href="#headimg" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">头像</div>
                            <div class="item-after">
                                <img id="f_wx_headimg2" src="{{$star['avatar']}}" style="width: 1.4rem;height: 1.4rem;border-radius: 5px;">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#nickname" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">昵称</div>
                            <div id="f_dnickname" class="item-after">{{$star['name']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#sex" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">性别</div>
                            <div id="f_dsex" class="item-after">
                                @if($star['sex']==0)未知
                                @elseif($star['sex']=='1')男
                                @elseif($star['sex']=='2')女
                                    @endif
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#location" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">地区</div>
                            <div id="f_city-picker" class="item-after">{{$star['location']}}</div>
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
                            <div id="f_dcup" class="item-after">{{$star['cup']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#weight" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">体重</div>
                            <div id="f_dweight" class="item-after">{{$star['weight']}} KG</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#height" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">身高</div>
                            <div id="f_dheight" class="item-after">{{$star['height']}} CM</div>
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
                            <div id="f_dage" class="item-after">{{$star['age']}} 岁</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#occupation" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">职业</div>
                            <div id="f_doccupation" class="item-after">{{$star['occupation']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#education" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">学历</div>
                            <div id="f_deducation" class="item-after">{{$star['education']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#experience" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">经历</div>
                            <div id="f_dexperience" class="item-after">{{$star['experience']}}</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="list-block" style="margin-top: -1rem;">
              &nbsp;
        </div>
    </div>

    @include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "info"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            取消
        </a>
        <h1 class="title">头像</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.saveHeadImg()">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;text-align: center;">
        <div class="list-block" style="margin:2rem auto;">
            <img id="wx_headimg" style="width: 50%;" src="{{$star['avatar']}}">
        </div>
        <div class="content-block" style="margin-top: -1rem;">

            <div class="row">
                <div class="col-100"><a id="changehead"   onclick="changeHeadImg()" class="button button-big button-fill button-success">更改头像</a></div>
                <input style="visibility:hidden"  id="headimgInput"   name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple=""/>
            </div>
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
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('dnickname','name')">
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
                            <div class="item-title label">昵称</div>
                            <div class="item-input">
                                <input id="dnickname" type="text" value="{{$star['name']}}">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "nickname"])



@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">平台信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <a href="#weibo" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title label">微博ID</div>
                            <div id="f_weiboid" class="item-after">{{$star['weibo_id']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#weipai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title label">微拍ID</div>
                            <div id="f_weipaiid" class="item-after">{{$star['weipai_id']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#miaopai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title label">秒拍ID</div>
                            <div id="f_miaopaiid" class="item-after">{{$star['miaopai_id']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#meipai" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title label">美拍ID</div>
                            <div id="f_meipaiid" class="item-after">{{$star['meipai_id']}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#kuaishou" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title label">快手ID</div>
                            <div id="f_kuaishouid" class="item-after">{{$star['kuaishou_id']}}</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "platform"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main" >
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">性别</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick=" $.save_sex()">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <label class="label-checkbox item-content">
                        <input type="radio" name="sex-radio" value="1" {{$star['sex']=='1' ? 'checked="checked"':''}}>
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
                        <input type="radio" name="sex-radio" value="2" {{$star['sex']=='2' ? 'checked="checked"':''}}>
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
        <a class="button button-link button-nav pull-left back" href="#main" >
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">地区</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('city-picker','location')">
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
                                <input id='city-picker' type="text" placeholder="所在地区" value="{{$star['location']}}" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "location"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">罩杯</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('dcup','cup')">
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
                            <div class="item-title label">罩杯</div>
                            <div class="item-input">
                                <input id="dcup" type="text" placeholder="罩杯" value="{{$star['cup']}}">
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
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('dweight','weight');">
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
                                <input id="dweight" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="{{$star['weight']}}">&nbsp;kg
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
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('dheight','height')">
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
                                <input id="dheight" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="{{$star['height']}}">&nbsp;cm
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
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('dage','age')">
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
                                <input id="dage" type="text" placeholder="{{$star['age']}}">
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
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('doccupation','occupation')">
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
                                <input id="doccupation" type="text" placeholder="{{$star['occupation']}}">
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
        <h1 class="title">教育</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('deducation','education')">
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
                            <div class="item-title label">教育</div>
                            <div class="item-input">
                                <input id="deducation" type="text" placeholder="{{$star['education']}}">
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
        <a class="button button-link button-nav pull-left back" href="#info">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">经历</h1>
        <a class="button button-link button-nav pull-right back" href="#info" onclick="$.save_edit('dexperience','experience')">
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
                                <textarea id="dexperience" style="height: 10rem;margin-top:.25rem;" placeholder="{{$star['experience']}}"></textarea>
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
        <a id="codecfm" class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">手机号码</h1>
        <a class="button button-link button-nav pull-right back" href="#info" onclick="$.save_edit('shouji','cellphone')">
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
                            <div class="item-title label">手机号码</div>
                            <div class="item-input">
                                <input id="shouji" type="text" placeholder="手机号码" value="{{$star['cellphone']}}">
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
        <a class="button button-link button-nav pull-left back" href="#main2">
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
                                <input id="id_name" type="text" placeholder="名字" value="{{$star['real_name']}}">
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
                                <input id="id_code" type="text" placeholder="身份证" value="{{$star['ID_number']}}">
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
                                @if($star['ID_card1']!=""&&$star['ID_card2']!="")
                                <ul class="weui_uploader_files" id="idfile" style="padding-left: 0;">
                                    <li class="weui_uploader_file images" style="width:80px;height:80px;background-image:url('{{$star['ID_card1']}}')">
                                        <input type="hidden" id="idimgurl1" value="{{$star['ID_card1']}}"></li>
                                    <li class="weui_uploader_file images" style="width:80px;height:80px;background-image:url('{{$star['ID_card2']}}')">
                                        <input type="hidden" id="idimgurl2" value="{{$star['ID_card2']}}"></li>
                                </ul>
                                @else
                                <ul class="weui_uploader_files" id="idfile" style="padding-left: 0;"></ul>
                                <div class="weui_uploader_input_wrp">
                                    <input class="weui_uploader_input" id="idimg1" name="img[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                </div>
                                    <div class="weui_uploader_input_wrp">
                                        <input class="weui_uploader_input" id="idimg2" name="img[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="content-block" style="margin-top: -1rem;">
            <div class="row">
                <div class="col-100"><a id="" href="#" onclick="$.saveIdInfo()"class="button button-big button-fill button-success">确  认</a></div>
            </div>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "idconfirm"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#paltform">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">微博信息</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('weiboid','weibo_id')">
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
                                <input id="weiboid" type="text" placeholder="填写ID" value="{{$star['weibo_id']}}">
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
        <a class="button button-link button-nav pull-left back" href="#paltform">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">微拍信息</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('weipaiid','weipai_id')">
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
                            <div class="item-title label">昵称</div>
                            <div class="item-input">
                                <input id="weipaiid" type="text" placeholder="填写昵称" value="{{$star['weipai_id']}}">
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
        <a class="button button-link button-nav pull-left back" href="#paltform">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">秒拍信息</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('miaopaiid','miaopai_id')">
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
                                <input id="miaopaiid" type="text" placeholder="填写ID" value="{{$star['miaopai_id']}}">
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
        <a class="button button-link button-nav pull-left back" href="#paltform">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">美拍信息</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('meipaiid','meipai_id')">
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
                                <input id="meipaiid" type="text" placeholder="填写ID" value="{{$star['meipai_id']}}">
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
        <a class="button button-link button-nav pull-left back" href="#paltform">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">快手信息</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('kuaishouid','kuaishou_id')">
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
                            <div class="item-title label">昵称</div>
                            <div class="item-input">
                                <input id="kuaishouid" type="text" placeholder="填写昵称" value="{{$star['kuaishou_id']}}">
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
        <a class="button button-link button-nav pull-left back" href="#paltform">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">衣服尺寸</h1>
        <a class="button button-link button-nav pull-right back" href="#paltform" onclick="$.save_size();">
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
                                <input id="f_shirt" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="上衣尺寸" value="{{$star['shirt_size']}}">&nbsp;CM
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
                                <input id="f_pants" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="下衣尺寸" value="{{$star['pants_size']}}">&nbsp;CM
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
                                <input id="f_shoe" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="鞋码" value="{{$star['shoes_size']}}">&nbsp;CM
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
        <a class="button button-link button-nav pull-left back" href="#main" >
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">收件地址</h1>
        <a class="button button-link button-nav pull-right back" onclick="$.save_edit('daddress','address')">
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
                            <div class="item-title label">收件地址</div>
                            <div class="item-input">
                                <input id='daddress' type="text" placeholder="详细地址"  value="{{$star['address']}}">
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
        <a class="button button-link button-nav pull-left back" href="#main" >
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">微信号码</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('dwechat','wechat')">
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
                                <input id='dwechat' type="text" placeholder="微信号码" value="{{$star['wechat']}}">
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
        <a class="button button-link button-nav pull-left back" href="#main" >
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">支付宝账号</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.save_edit('alipay_account','alipay_account')">
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
                                <input id='alipay_account' type="text" placeholder="支付宝账号" value="{{$star['alipay_account']}}">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "alipay"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main" >
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">相册</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="weui_uploader" style="margin-top: .5rem;margin-right: 1.5rem;">
                            <div class="weui_uploader_hd weui_cell">
                            </div>
                            <div class="weui_uploader_bd">
                                <ul class="weui_uploader_files" id="album" style="padding-left: 0;float: left;">
                                    @foreach($pictures as $picture)
                                        <li class="weui_uploader_file images" style="width:80px;height:80px;background-image:url('{{$picture->url}}')">
                                            <input type="hidden" value="{{$picture->url}}">
                                        </li>
                                        @endforeach
                                </ul>
                                <div class="weui_uploader_input_wrp" style="width: 80px;height: 80px;float: left;">
                                    <input class="weui_uploader_input" id="uploadalbum" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "album"])



@endsection


