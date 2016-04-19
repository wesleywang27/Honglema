@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">后台用户管理</strong></h2>
<div class="page_title">
    <h2 class="fl">添加后台用户</h2>
</div>
<form action="/cms/user_create" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    <div style="margin-top: 20px;">
        <label>用户名：&nbsp;&nbsp;&nbsp;</label>
        <input class="textbox textbox_225" type="text" name="name" placeholder="请输入用户名" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>用户邮箱：</label>
        <input class="textbox textbox_225" type="email" name="email" placeholder="请输入邮箱" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>用户密码：</label>
        <input class="textbox textbox_225" type="password" name="password" placeholder="请输入密码(至少8位)" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>确认密码：</label>
        <input class="textbox textbox_225" type="password" name="passwordConfirm" placeholder="请确认密码" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>用户身份：</label>
        <select class="select" name="is_admin">
            <option value="0">普通用户</option>
            <option value="1">普通管理员</option>
        </select>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="确认" class="link_btn" style="margin-left: 12%"/>
        <a href="/cms/index"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>
@endsection