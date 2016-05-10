@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">添加档口信息</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@createStall') }}" method="post">
            <?php echo csrf_field(); ?>
            <table border="2" width="95%" height="300" style="margin: 20px;">
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
                    <th>档口名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="stallName" value="" /></td>
                    <th>档口号：</th>
                    <td><input style="width: 98%;height: 100%;" name="stallNum" value="" /></td>
                </tr>
                <tr>
                    <th>城市：<br>(杭州/广州填写此部分)</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="" /></td>
                    <th>档口：<br>(杭州/广州填写此部分)</th>
                    <td><input style="width: 98%;height: 100%;" name="stall" value="" /></td>
                    <th>档口所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="" /></td>
                </tr>
                <tr>
                    <th>档口所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="stallCity" value="" /></td>
                    <th>档口所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="" /></td>
                    <th>档口详细地址：</th>
                    <td><input style="width: 98%;height: 100%;" name="address" value="" /></td>
                </tr>
                <tr>
                    <th>档口服装风格：</th>
                    <td><input style="width: 98%;height: 100%;" name="style" value="" /></td>
                    <th>档口服装类目：</th>
                    <td><input style="width: 98%;height: 100%;" name="category" value="" /></td>
                    <th>是否支持一件代发：</th>
                    <td><input style="width: 98%;height: 100%;" name="shipmentOK" value="" /></td>
                </tr>
                <tr>
                    <th>红了吗对接人：</th>
                    <td><input style="width: 98%;height: 100%;" name="contact" value="" /></td>
                    <th></th>
                    <td></td>
                    <th></th>
                    <td></td>
                </tr>
            </table>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 40px;"/>
            <a href="javascript:history.back();" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
        </form>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/ajaxfileupload.js" charset="utf-8"></script>

@endsection