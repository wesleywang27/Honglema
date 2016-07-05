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
                            <div class="item-title">公司全称</div>
                            <div id="f_merchant_name" class="item-after">未编辑</div>
                            <input type="hidden" id="merchant_name_hidden" value="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#address" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">公司地址</div>
                            <div id="f_address" class="item-after">未编辑</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#contactInfo" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">负责人</div>
                            <div id="f_contact_div" class="item-after">未编辑</div>
                            <input type="hidden" id="contact_hidden" value="">
                            <input type="hidden" id="contact_phone_hidden" value="">
                            <input type="hidden" id="contact_email_hidden" value="">
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#categoryList" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">商品类目</div>
                            <div id="f_category" class="item-after">未编辑</div>
                            <input type="hidden" id="category_hidden" value="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#brandName" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">品牌名</div>
                            <div id="f_brand_name" class="item-after">未编辑</div>
                            <input type="hidden" id="brand_name_hidden" >
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#shopId" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">淘宝/天猫店铺id</div>
                            <div id="f_shop_id" class="item-after">未编辑</div>
                            <input type="hidden" id="shop_id_hidden" value="">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#saleValue" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">年销售额</div>
                            <div id="f_sale" class="item-after">未编辑</div>
                            <input type="hidden" id="sale_hidden" > 
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#merchantIntroduction" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">商家介绍</div>
                            <div id="f_introduction" class="item-after"></div>
                            <input type="hidden" id="introduction_hidden" > 
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content-block" style="margin-top: -1rem;">
            <div class="row">
                <div class="col-100"><a id="finishRegister" href="#" class="button button-big button-fill button-success">完成注册</a></div>
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
        <h1 class="title">公司全称</h1>
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
                        <div class="item-title label">公司全称</div>
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
        <a class="button button-link button-nav pull-left back" href="#main" onclick="$.set_address('country','province','city','region','addressInput');">
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

<!-- 以下是新增内容 -->
<!-- 品牌名 -->
@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">负责人信息</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_three_values('contact_div','contact','contact_phone','contact_email');">
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
                            <div class="item-title label">负责人</div>
                            <div class="item-input">
                                <input id="contact" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="负责人姓名">
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
                                <input id="contact_phone" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="负责人手机号">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">邮箱</div>
                            <div class="item-input">
                                <input id="contact_email" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="负责人邮箱">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "contactInfo"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">商品类目</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('category');">
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
                        <div class="item-title label">请选择</div>
                        <div class="item-inner">
                            <div class="item-input">
                                <select id="category">
                                    <option value="0">请选择...</option>
                                    <option value="男装">男装</option>
                                    <option value="女装">女装</option>
                                    <option value="内衣">内衣</option>
                                    <option value="鞋">鞋</option>
                                    <option value="箱包">箱包</option>
                                    <option value="母婴">母婴</option>
                                    <option value="数码家电">数码家电</option>
                                    <option value="美妆护肤">美妆护肤</option>
                                    <option value="食品">食品</option>
                                    <option value="珠宝配饰">珠宝配饰</option>
                                    <option value="运动户外">运动户外</option>
                                    <option value="家具">家具</option>
                                    <option value="百货">百货</option>
                              </select>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "categoryList"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">品牌名称</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('brand_name');">
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
                        <div class="item-title label">品牌名称</div>
                        <div class="item-inner">
                            <div class="item-input">
                                <input id="brand_name" type="text" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "brandName"])


<!-- 淘宝天猫店铺id -->
@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">店铺信息</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('shop_id');">
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
                            <div class="item-title label">淘宝／天猫店铺id</div>
                            <div class="item-input">
                                <input id="shop_id" type="text" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "shopId"])

<!-- 年销售额 -->
@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">年销售额</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('sale');">
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
                            <div class="item-title label">年销售额</div>
                            <div class="item-input">
                                <input id="sale" type="text" >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "saleValue"])

<!-- 公司介绍 -->
@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">商家介绍</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('introduction');">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                        <div class="weui_cells" id="global_location">
                            <div class="weui_cell">
                                <div class="weui_cell_bd weui_cell_primary">
                                    <textarea class="weui_textarea" id="introduction" placeholder="请输入商家介绍" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                   
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "merchantIntroduction"])

@endsection
