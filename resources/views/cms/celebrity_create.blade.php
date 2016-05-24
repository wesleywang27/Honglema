@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">红人信息详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@createCelebrity') }}" method="post">
            <?php echo csrf_field(); ?>
            <table border="2" width="95%" height="360" style="margin: 20px;">
                <tr>
                    <th width="12%">网络昵称：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="nickname" value=""/></td>
                    <th width="12%">真实姓名：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="realname" value=""/></td>
                    <th width="12%">性别：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="sex" value=""/></td>
                    <th width="12%">生日：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="birthday" value=""/></td>
                </tr>
                <tr>
                    <th width="12%">城市：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="city" value=""/></td>
                    <th width="12%">学历：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="education" value=""/></td>
                    <th width="12%">身高：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="height" value=""/></td>
                    <th width="12%">体重：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="weight" value=""/></td>
                </tr>
                <tr>
                    <th width="12%">胸围：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="bust" value=""/></td>
                    <th width="12%">腰围：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="waist" value=""/></td>
                    <th width="12%">臀围：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="hop" value=""/></td>
                    <th width="12%">年收入：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="annual_income" value=""/></td>
                </tr>
                <tr>
                    <th width="12%">职业：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="occupation" value=""/></td>
                    <th width="12%">手机号码：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="cellphone" value=""/></td>
                    <th width="12%">微信账号：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="wechat_id" value=""/></td>
                    <th width="12%">微博账号：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="weibo_nickname" value=""/></td>
                </tr>
                <tr>
                    <th width="12%">全网粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="total_fans_num" value=""/></td>
                    <th width="12%">微博粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="weibo_fans_num" value=""/></td>
                    <th width="12%">微拍粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="weipai_fans_num" value=""/></td>
                    <th width="12%">美拍粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="meipai_fans_num" value=""/></td>
                </tr>
                <tr>
                    <th width="12%">快手粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="kuaishou_fans_num" value=""/></td>
                    <th width="12%">秒拍粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="miaopai_fans_num" value=""/></td>
                    <th width="12%">标签：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="tags" value=""/></td>
                    <th width="12%">特长：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="skills" value=""/></td>
                </tr>
                <tr>
                    <th width="12%">联系地址：</th>
                    <td colspan="3"><textarea style="width: 98.5%;height: 40px;margin-top: -8px; margin-bottom: -10px;" name="address" ></textarea></td>
                    <th width="12%">性格：</th>
                    <td colspan="3"><textarea style="width: 98.5%;height: 40px;margin-top: -8px; margin-bottom: -10px;" name="personality" ></textarea></td>
                </tr>
                <tr>
                    <th width="12%">经历：</th>
                    <td colspan="7"><textarea style="width: 99.5%;height: 40px;margin-top: -8px; margin-bottom: -10px;" name="experience" ></textarea></td>
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