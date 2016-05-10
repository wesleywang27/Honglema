@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">工厂信息修改</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@createFactory') }}" method="post">
            <?php echo csrf_field(); ?>
            <table border="2" width="95%" height="360" style="margin: 20px;">
                <tr>
                    <th width="15%">姓名：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="username" value="" /></td>
                    <th width="15%">手机号码：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="mobile" value="" /></td>
                    <th width="15%">微信号：</th>
                    <td><input style="width: 98%;height: 100%;" name="weixinNo" value="" /></td>
                </tr>
                <tr>
                    <th>职位：</th>
                    <td><input style="width: 98%;height: 100%;" name="title" value="" /></td>
                    <th>公司名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="company" value="" /></td>
                    <th>公司所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="" /></td>
                </tr>
                <tr>
                    <th>公司所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="" /></td>
                    <th>公司所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="" /></td>
                    <th>公司详细地址：</th>
                    <td><input style="width: 98%;height: 100%;" name="address" value="" /></td>
                </tr>
                <tr>
                    <th>类目：</th>
                    <td><input style="width: 98%;height: 100%;" name="category" value="" /></td>
                    <th>优势子类目：</th>
                    <td><input style="width: 98%;height: 100%;" name="advantageSubcategory" value="" /></td>
                    <th>工厂面积：</th>
                    <td><input style="width: 98%;height: 100%;" name="ext1" value="" /></td>
                </tr>
                <tr>
                    <th>工人数：</th>
                    <td><input style="width: 98%;height: 100%;" name="ext2" value="" /></td>
                    <th>打样速度：</th>
                    <td><input style="width: 98%;height: 100%;" name="ext5" value="" /></td>
                    <th>最小起订量：</th>
                    <td><input style="width: 98%;height: 100%;" name="orderCount" value="" /></td>
                </tr>
                <tr>
                    <th>日生产量：</th>
                    <td><input style="width: 98%;height: 100%;" name="productCount" value="" /></td>
                    <th>是否有设计团队：</th>
                    <td><input style="width: 98%;height: 100%;" name="design" value="" /></td>
                    <th>是否支持退换：</th>
                    <td><input style="width: 98%;height: 100%;" name="refund" value="" /></td>
                </tr>
                <tr>
                    <th>是否支持一件代发：</th>
                    <td><input style="width: 98%;height: 100%;" name="shipmentOK" value="" /></td>
                    <th>主要付款方式：</th>
                    <td><input style="width: 98%;height: 100%;" name="zhangqi" value="" /></td>
                    <th>红了吗对接人</th>
                    <td><input style="width: 98%;height: 100%;" name="contact" value="" /></td>
                </tr>
                <tr><th>备注：</th>
                    <td colspan="5"><textarea name="description" style="width: 99.3%; height: 60px; margin-top: -8px; margin-bottom: -10px;"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 40px;"/>
            <a href="javascript:history.back();" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
        </form>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection