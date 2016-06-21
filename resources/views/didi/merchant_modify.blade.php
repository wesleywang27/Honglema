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
            <table border="2" width="95%" height="150" style="margin: 20px;">
                <tr>
                    <th width="15%">商家名称：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="name" value="{{ $merchant->name}}" /></td>
                    <th width="15%">微信账号：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="wechat" value="{{ $merchant->wechat}}" /></td>
                    <th width="15%">手机号码：</th>
                    <td><input style="width: 98%;height: 100%;" name="cellphone" value="{{ $merchant->cellphone}}" /></td>
                </tr>
                <tr>
                    <th>商家所在国家：</th>
                    <td><input style="width: 98%;height: 100%;" name="country" value="{{ $merchant->country}}" /></td>
                    <th>商家所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="{{ $merchant->province}}" /></td>
                    <th>商家所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="{{ $merchant->city}}" /></td>
                </tr>
                <tr>
                    <th>商家所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="{{ $merchant->region}}" /></td>
                    <th>商家详细地址：</th>
                    <td colspan="3"><input style="width: 99.3%;height: 100%;" name="address" value="{{ $merchant->address}}" /></td>
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