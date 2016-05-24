@extends('cms.banner')

@section('content')

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
        <label>用户花名：</label>
        <input class="textbox textbox_225" type="text" name="nickname" placeholder="请输入用户花名" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>用户邮箱：</label>
        <input class="textbox textbox_225" type="email" name="email" placeholder="请输入邮箱" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>用户身份：</label>
        @if ($is_super_admin == 1)
        <select class="select" name="is_admin">
            <option value="0">普通用户</option>
            <option value="1">普通管理员</option>
        </select>
        @else
        <select class="select" name="is_admin">
            <option value="0">普通用户</option>
        </select>
        @endif
    </div>
    <div style="margin-top: 20px;">
        <label>用户访问权限：</label>
        <br /><br />&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="工厂">工厂&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="品牌商">品牌商&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="设计师">设计师&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="档口">档口&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="红人">红人&nbsp;&nbsp;&nbsp;
    </div>
    <div style="margin-top: 20px;">
        <label>只能访问对接人为该用户的商家：</label>
        <select class="select" name="contact_only">
            <option value="1">是</option>
            <option value="0">否</option>
        </select>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="确认" class="link_btn" style="margin-left: 12%"/>
        <a href="/cms/index"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>
@endsection