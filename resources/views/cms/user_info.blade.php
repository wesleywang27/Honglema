@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">修改用户信息</h2>
</div>
<form action="/cms/user_info" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    <div style="margin-top: 20px;">
        <label>当前密码：</label>
        <input class="textbox textbox_225" type="password" name="currentPassword" placeholder="请输入当前密码" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>用户密码：</label>
        <input class="textbox textbox_225" type="password" name="password" placeholder="请输入新密码(至少8位)" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>确认密码：</label>
        <input class="textbox textbox_225" type="password" name="passwordConfirm" placeholder="请确认新密码" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="保存" class="link_btn" style="margin-left: 12%"/>
        <a href="/cms/index"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>
@endsection