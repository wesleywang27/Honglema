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
        <table border="2" width="95%" height="150" style="margin: 20px;">
            <tr>
                <th width="15%">商家名称：</th>
                <td width="17%">{{ $merchant->name}}</td>
                <th width="15%">微信账号：</th>
                <td width="17%">{{ $merchant->wechat}}</td>
                <th width="15%">手机号码：</th>
                <td>{{ $merchant->cellphone}}</td>
            </tr>
            <tr>
                <th>商家所在国家：</th>
                <td>{{ $merchant->country}}</td>
                <th>商家所在省：</th>
                <td>{{ $merchant->province}}</td>
                <th>商家所在市：</th>
                <td>{{ $merchant->city}}</td>
            </tr>
            <tr>
                <th>商家所在区：</th>
                <td>{{ $merchant->region}}</td>
                <th>商家详细地址：</th>
                <td colspan="3">{{ $merchant->address}}</td>
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