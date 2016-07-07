@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">商家信息详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('MerchantController@merchantUpdate', ['id' => $merchant->merchant_id]) }}" method="post">
            <table border="2" width="95%" height="350" style="margin: 20px;">
                <tr>
                    <th width="8%">商家名称</th>
                    <td colspan="3"><input style="width: 98%;height: 100%;" name="name" value="{{ $merchant->name}}" /></td>
                    <th width="8%">微信账号</th>
                    <td width="15%"><input style="width: 98%;height: 100%;" name="wechat" value="{{ $merchant->wechat}}" /></td>
                    <th width="8%">手机号码</th>
                    <td width="15%"><input style="width: 98%;height: 100%;" name="cellphone" value="{{ $merchant->cellphone}}" /></td>
                </tr>
                <tr>
                    <th>国家</th>
                    <td><input style="width: 98%;height: 100%;" name="country" value="{{ $merchant->country}}" /></td>
                    <th>省</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="{{ $merchant->province}}" /></td>
                    <th>市</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="{{ $merchant->city}}" /></td>
                    <th>区</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="{{ $merchant->region}}" /></td>
                </tr>
                <tr>
                    <th>详细地址</th>
                    <td colspan="7"><input style="width: 98%;height: 100%;" name="address" value="{{ $merchant->address}}" /></td>
                </tr>
            <tr>
                <th>联系人</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="contact" value="{{ $merchant->contact}}" /></td>
                <th>联系电话</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="contact_phone" value="{{ $merchant->contact_phone}}" /></td>
                <th>联系邮件</th>
                <td colspan="3"><input style="width: 98%;height: 100%;" name="contact_email" value="{{ $merchant->contact_email}}" /></td>
            </tr>
            <tr>
                <th>主营类目</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="category" value="{{ $merchant->category}}" /></td>
                <th>品牌名</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="brand_name" value="{{ $merchant->brand_name}}" /></td>
                <th>店铺名称</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="shop_id" value="{{ $merchant->shop_id}}" /></td>
                <th>年销售额</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="sales" value="{{ $merchant->sales}}" /></td>
            </tr>
            <tr>
                <th>公司简介</th>
                <td colspan="7"><input style="width: 98%;height: 100%;" name="introduction" value="{{ $merchant->introduction}}" /></td>
            </tr>
            </table>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 40px;"/>
            <a href="/didi/MerchantInfo/{{ $merchant->merchant_id }}" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
        </form>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection