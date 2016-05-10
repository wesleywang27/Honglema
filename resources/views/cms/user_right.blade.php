@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">用户权限修改</h2>
</div>
<form action="{{URL::action('UserController@updateUserRight', ['id' => $user->id]) }}" method="post" style="margin-left: 30%">
    <div style="margin-top: 20px;">
        <label>用户账号：</label>
        <input class="textbox textbox_225" type="text"  value="{{ $user->name}}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <label>用户身份：</label>
        @if ($user->is_admin == 1)
        <select class="select" name="is_admin">
            <option value="1">普通管理员</option>
            <option value="0">普通用户</option>
        </select>
        @else
        <select class="select" name="is_admin">
            <option value="0">普通用户</option>
            <option value="1">普通管理员</option>
        </select>
        @endif
    </div>
    <div style="margin-top: 20px;">
        <label>用户访问权限：</label>
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="工厂">工厂&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="品牌商">品牌商&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="设计师">设计师&nbsp;&nbsp;&nbsp;
        <input class="textbox" type="checkbox" name="right[]" value="档口">档口&nbsp;&nbsp;&nbsp;
    </div>
    <div style="margin-top: 20px;">
        <label>只能访问对接人为该用户的商家：</label>
        <select class="select" name="contact_only">
            @if ($user->contact_only == 1)
            <option value="1">是</option>
            <option value="0">否</option>
            @else
            <option value="0">否</option>
            <option value="1">是</option>
            @endif
        </select>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="保存" class="link_btn" style="margin-left: 10%"/>
        <a href="/cms/user"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>

@endsection