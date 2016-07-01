@extends('merchant.merchant_layouts')

@section('title', "创建用户")

@section('body')
@section('page-main')
<script>
    $(function(){
        $('#country').attr('data-value','{{$merchant->country}}');
        $('#province').attr('data-value','{{$merchant->province}}');
        $('#city').attr('data-value','{{$merchant->city}}');
        $('#region').attr('data-value','{{$merchant->region}}');
        $('#addressInput').val('{{$merchant->address}}');
    });
</script>
    <header class="bar bar-nav">
        <h1 class="title">我的</h1>
        <span class="icon icon-left pull-left" onclick="window.location.href='/Merchant/user'"></span>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">头像</div>
                            <div class="item-after">
                                <img id="f_avatar" src="{{$merchant['avatar']}}" style="width: 1.4rem;height: 1.4rem;border-radius: 5px;">
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
                            <div id="f_merchant_name" class="item-after">{{$merchant['name']}}</div>
                            <input type="hidden" id="merchant_name_hidden" value="{{$merchant['name']}}">
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
                            <div id="f_address" class="item-after">{{$merchant->country}} {{$merchant->province}} {{$merchant->city}} {{$merchant->region}} {{$merchant->address}}</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#merchantContact" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">联系方式</div>
                            <div id="f_contact" class="item-after">{{$merchant->wechat}}/{{$merchant->cellphone}}</div>
                            <input type="hidden" id="wechat_hidden" value="{{$merchant->wechat}}">
                            <input type="hidden" id="cellphone_hidden" value="{{$merchant->cellphone}}">
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
                            <div id="f_alipay" class="item-after">{{$merchant->alipay_name}}/{{$merchant->alipay_account}}</div>
                            <input type="hidden" id="alipay_name_hidden" value="{{$merchant->alipay_name}}">
                            <input type="hidden" id="alipay_account_hidden" value="{{$merchant->alipay_account}}">    
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
            </ul>
        </div>
        <div class="content-block" style="margin-top: -1rem;">
            <div class="row">
                <div class="col-100"><a id="save" href="#" class="button button-big button-fill button-success">保存修改</a></div>
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
                                <input id="merchant_name" type="text" value="{{$merchant['name']}}">
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
                                <input id="merchant_link" type="text" value="">
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
                                    <select class="weui_select country" id="country">
                                   <!--  <option value="请选择">请选择</option>
                                    <option value="中国" selected>中国</option> -->
                                        
                                    </select>
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
                                <input id="wechat" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="微信号" value="{{$merchant->wechat}}">
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
                                <input id="cellphone" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="手机号" value="{{$merchant->cellphone}}">
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
                                <input id="alipay_name" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="支付宝姓名" value="{{$merchant->alipay_name}}">
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
                                <input id="alipay_account" style="width: 85%;display:inline;text-align: right;" type="text" placeholder="支付宝账号" value="{{$merchant->alipay_account}}">
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
                                    <img id="license_img" src="{{$merchant['license']}}" style="width: 100%;height: 10rem;border-radius: 5px;">
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


@endsection
