@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">添加推广活动</h2>
</div>
<form action="/didi/MerchantCreate" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    <div style="margin-top: 20px;">
        <label>商家名称：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input class="textbox textbox_225" type="text" name="name" placeholder="请输入商家名称" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商家所在国家：</label>
        <input class="textbox textbox_225" type="text" name="country" placeholder="请输入商家所在国家" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商家所在省：&nbsp;&nbsp;&nbsp;</label>
        <input class="textbox textbox_225" type="text" name="province" placeholder="请输入商家所在省" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商家所在市：&nbsp;&nbsp;&nbsp;</label>
        <input class="textbox textbox_225" type="text" name="city" placeholder="请输入商家所在市" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商家所在区：&nbsp;&nbsp;&nbsp;</label>
        <input class="textbox textbox_225" type="text" name="region" placeholder="请输入商家所在区" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商家详细地址：</label>
        <input class="textbox textbox_225" type="text" name="address" placeholder="请输入商家详细地址" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商家微信账号：</label>
        <input class="textbox textbox_225" type="text" name="wechat" placeholder="请输入商家微信账号" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商家手机号码：</label>
        <input class="textbox textbox_225" type="text" name="cellphone" placeholder="请输入商家手机号码" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="确认" class="link_btn" style="margin-left: 12%"/>
        <a href="/didi/MerchantList"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>
@endsection