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
        <table border="2" width="95%" height="350" style="margin: 20px;">
            <tr>
                <th width="8%">商家名称</th>
                <td width="15%" style="text-align:center">{{ $merchant->name}}</td>
                <th width="8%">图标</th>
                <td width="15%" style="text-align:center"><img src="{{ $merchant->avatar}}" style="width: 80px; height: 80px;"/></td>
                <th width="15%">微信账号</th>
                <td width="15%" style="text-align:center">{{ $merchant->wechat}}</td>
                <th width="8%">手机号码</th>
                <td>{{ $merchant->cellphone}}</td>
            </tr>
            <tr>
                <th>国家</th>
                <td style="text-align:center">{{ $merchant->country}}</td>
                <th>省</th>
                <td style="text-align:center">{{ $merchant->province}}</td>
                <th>市</th>
                <td style="text-align:center">{{ $merchant->city}}</td>
                <th>区</th>
                <td style="text-align:center">{{ $merchant->region}}</td>
            </tr>
            <tr>
                <th>详细地址</th>
                <td colspan="7">{{ $merchant->address}}</td>
            </tr>
            <tr>
                <th>联系人</th>
                <td style="text-align:center">{{ $merchant->contact}}</td>
                <th>联系电话</th>
                <td style="text-align:center">{{ $merchant->contact_phone}}</td>
                <th>联系邮件</th>
                <td colspan="3">{{ $merchant->contact_email}}</td>
            </tr>
            <tr>
                <th>主营类目</th>
                <td style="text-align:center">{{ $merchant->category}}</td>
                <th>品牌名</th>
                <td style="text-align:center">{{ $merchant->brand_name}}</td>
                <th>店铺名称</th>
                <td style="text-align:center">{{ $merchant->shop_id}}</td>
                <th>年销售额</th>
                <td style="text-align:center">{{ $merchant->sales}}</td>
            </tr>
            <tr>
                <th>公司简介</th>
                <td colspan="7">{{ $merchant->introduction}}</td>
            </tr>
        </table>
        <a href="/didi/MerchantList" style="float: right; margin-right: 50px;"><input type="button" value="返回" class="link_btn"/></a>
        @if($merchant->status == 1)
        <a href="{{URL::action('MerchantController@merchantModify', ['id' => $merchant->merchant_id]) }}"><input type="button" value="修改" class="link_btn" style="float: right; margin-right: 5px;"/></a>
        @elseif($merchant->status == 0)
        <a href="{{URL::action('MerchantController@merchantCheck', ['id' => $merchant->merchant_id]) }}" style="float: right; margin-right: 5px;"><input type="button" value="审核通过" class="link_btn"/></a>
        @endif
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection