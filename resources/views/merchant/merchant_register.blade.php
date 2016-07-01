@extends('merchant.merchant_layouts')

@section('title', "创建用户")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">商家注册</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
    <input type="hidden" id="openId" value="{{$user['openid']}}">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">头像</div>
                            <div class="item-after">
                                <img id="f_avatar" src="{{$user['avatar']}}" style="width: 1.4rem;height: 1.4rem;border-radius: 5px;">
                                <input class="weui_uploader_input" id="headimgupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                            </div>
                            
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#merchantName" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">商家店铺名称</div>
                            <div id="f_merchant_name" class="item-after">未编辑</div>
                            <input type="hidden" id="merchant_name_hidden" value="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#merchantLink" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">店铺链接</div>
                            <div id="f_merchant_link" class="item-after">未编辑</div>
                            <input type="hidden" id="merchant_link_hidden" value="">
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
                            <div class="item-title">商家地址</div>
                            <div id="f_address" class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#merchantContact" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">联系方式</div>
                            <div id="f_contact" class="item-after">未编辑</div>
                            <input type="hidden" id="wechat_hidden" >
                            <input type="hidden" id="cellphone_hidden">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="list-block">
            <ul>
                <li>
                    <a href="#alipay" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">支付宝账号</div>
                            <div id="f_alipay" class="item-after">未编辑</div>
                            <input type="hidden" id="alipay_name_hidden" >
                            <input type="hidden" id="alipay_account_hidden">    
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#license" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">工商执照</div>
                            <div id="f_license" class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#phoneconfirm" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">手机认证</div>
                            <div id="f_dizhi" class="item-after">未编辑</div>
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
@include('partial/jquery_mobile_page', ["page_id" => "main"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">店铺名称</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('merchant_name');">
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
                        <div class="item-title label">店铺名称</div>
                        <div class="item-inner">
                            <div class="item-input">
                                <input id="merchant_name" type="text" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "merchantName"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">店铺链接</h1>
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
                            <div class="item-title label">店铺链接</div>
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
@include('partial/jquery_mobile_page', ["page_id" => "merchantLink"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#register3" onclick="$.set_address('country','province','city','region','addressInput');">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">地区</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                        <div class="weui_cells" id="global_location">
                            <div class="weui_cell weui_cell_select">
                                <div class="weui_cell_bd weui_cell_primary">
                                    <select class="weui_select country" id="country" ></select>
                                </div>
                            </div>
                            <div class="weui_cell weui_cell_select">
                                <div class="weui_cell_bd weui_cell_primary">
                                    <select class="weui_select province" id="province" ></select>
                                </div>
                            </div>
                            <div class="weui_cell weui_cell_select">
                                <div class="weui_cell_bd weui_cell_primary">
                                    <select class="weui_select city" id="city" ></select>
                                </div>
                            </div>
                            <div class="weui_cell weui_cell_select">
                                <div class="weui_cell_bd weui_cell_primary">
                                    <select class="weui_select region" id="region" ></select>
                                </div>
                            </div>
                            <div class="weui_cell">
                                <div class="weui_cell_bd weui_cell_primary">
                                    <textarea class="weui_textarea" id="addressInput" placeholder="请输入详细地址" rows="5"></textarea>
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
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">联系方式</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_values('contact','wechat','cellphone');">
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
                            <div class="item-title label">微信号</div>
                            <div class="item-input">
                                <input id="wechat" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="微信号">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">手机号</div>
                            <div class="item-input">
                                <input id="cellphone" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="手机号">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "merchantContact"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">支付宝</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_values('alipay','alipay_name','alipay_account');">
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
                            <div class="item-title label">支付宝姓名</div>
                            <div class="item-input">
                                <input id="alipay_name" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="支付宝姓名">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">支付宝账号</div>
                            <div class="item-input">
                                <input id="alipay_account" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="支付宝账号">
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
        <a class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">工商执照</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="weui_uploader" style="margin-left: .75rem;margin-top: .5rem;margin-right: 1.5rem;width:100%;">
                            <div class="weui_uploader_hd weui_cell">
                                <div class="weui_cell_bd weui_cell_primary">照片</div>
                            </div>
                            <div class="weui_uploader_bd">
                                    <img id="license_img" src="" style="width: 100%;height: 10rem;border-radius: 5px;">
                                    <input class="weui_uploader_input" id="licenseimgupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "license"])

@section('page-main')
    <header class="bar bar-nav">
        <a id="codecfm" class="button button-link button-nav pull-left back" href="#register2">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">手机认证</h1>
    </header>
    <div class="content" style="top: 2.2rem;padding: 1rem;">
        <div class="searchbar row" style="height:3.5rem;margin-left:0">
            <div class="search-input col-80" style="display: inline-flex;width:90%">
                <input type="search" id='search' placeholder='请输入手机号' style="border-radius:0;width:11rem;height:2rem"/>
           
                <a class="button button-fill" style="background-color:#EB6167;line-height: 2rem;margin-left:0;border-radius:0;width:4rem;height:2rem">发送验证</a>
            </div>
        </div>
        <div class="searchbar row" style="height:3.5rem;margin-left:0">
            <div class="search-input col-80" style="display: inline-flex;width:90%">
                <input type="search" id='search' placeholder='请输入验证码' style="border-radius:0;width:15rem;height:2rem"/>
            </div>
        </div>
        <div class="searchbar row" style="height:3.5rem;margin-left:0">
            <div class="search-input col-80" style="display: inline-flex;width:90%">
                <input type="search" id='search' placeholder='请输入手机登录密码' style="border-radius:0;width:15rem;height:2rem"/>
            </div>
        </div>
        <div class="content-block" style="margin:1rem 0;">
            <a id="confirmcode" href="#" class="button button-big button-fill" style="border-radius:0;background-color:#DD2625">下一步</a>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "phoneconfirm"])



@endsection
