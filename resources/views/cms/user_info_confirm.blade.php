@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">用户账号信息</h2>
</div>
<form style="margin-left: 30%">
    <div style="margin-top: 20px;">
        <label>用户ID：&nbsp;&nbsp;&nbsp;</label>
        <input class="textbox textbox_225" type="text"  value="{{ $user->id}}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <label>用户名：&nbsp;&nbsp;&nbsp;</label>
        <input class="textbox textbox_225" type="text"  value="{{ $user->name}}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <label>用户邮箱：</label>
        <input class="textbox textbox_225" type="text"  value="{{ $user->email}}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <label>用户身份：</label>
        @if ($user->is_super_admin == 1)
        <input class="textbox textbox_225" type="text"  value="超级管理员" readonly>
        @elseif ($user->is_admin == 1)
        <input class="textbox textbox_225" type="text"  value="普通管理员" readonly>
        @else
        <input class="textbox textbox_225" type="text"  value="普通用户" readonly>
        @endif
    </div>
    <div style="margin-top: 20px;">
        <label>创建时间：</label>
        <input class="textbox textbox_225" type="text"  value="{{ $user->created_at}}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <a href="/cms/user_info"  class="link_btn" style="margin-left: 12%">修改</a>
        <a href="/cms/index"  class="link_btn" style="margin-left: 5%">返回</a>
    </div>
</form>

@endsection