@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">添加商家信息</h2>
</div>
<form action="/didi/MerchantCreate" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
            <table border="2" width="95%" height="350" style="margin: 20px;">
                <tr>
                    <th width="8%">商家名称<font color="red">*</font></th>
                    <td colspan="3"><input style="width: 98%;height: 100%;" name="name" value="" required /></td>
                    <th width="8%">微信账号</th>
                    <td width="15%"><input style="width: 98%;height: 100%;" name="wechat" value="" /></td>
                    <th width="8%">手机号码</th>
                    <td width="15%"><input style="width: 98%;height: 100%;" name="cellphone" value="" /></td>
                </tr>
                <tr>
                    <th>国家</th>
                    <td><input style="width: 98%;height: 100%;" name="country" value="" /></td>
                    <th>省</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="" /></td>
                    <th>市</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="" /></td>
                    <th>区</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="" /></td>
                </tr>
                <tr>
                    <th>详细地址</th>
                    <td colspan="7"><input style="width: 98%;height: 100%;" name="address" value="" /></td>
                </tr>
            <tr>
                <th>联系人<font color="red">*</font></th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="contact" value="" required /></td>
                <th>联系电话<font color="red">*</font></th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="contact_phone" value="" required /></td>
                <th>联系邮件<font color="red">*</font></th>
                <td colspan="3"><input style="width: 98%;height: 100%;" name="contact_email" value="" required /></td>
            </tr>
            <tr>
                <th>主营类目<font color="red">*</font></th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="category" value="" /></td>
                <th>品牌名<font color="red">*</font></th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="brand_name" value="" required /></td>
                <th>店铺名称<font color="red">*</font></th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="shop_id" value="" required /></td>
                <th>年销售额<font color="red">*</font></th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="sales" value="" required /></td>
            </tr>
            <tr>
                <th>公司简介<font color="red">*</font></th>
                <td colspan="7"><input style="width: 98%;height: 100%;" name="introduction" value="" /></td>
            </tr>
            </table>

    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="确认" class="link_btn" style="margin-left: 12%"/>
        <a href="/didi/MerchantList"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>
@endsection