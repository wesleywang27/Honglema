@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">后台用户列表</h2>
    <form action="/cms/user" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right; margin-top: 8px;" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch" placeholder="按用户名查找"/>
    </form>
</div>
<table class="table">
    <tr>
        <th>用户ID</th>
        <th>用户账号</th>
        <th>用户花名</th>
        <th>邮箱</th>
        <th>用户身份</th>
        <th>访问权限</th>
        <th>访问全表</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td style="width:60px;height:20px;text-align:center">{{ $user->id}}</td>
        <td style="width:80px;text-align:center">{{ $user->name}}</td>
        <td style="width:80px;text-align:center">{{ $user->nickname}}</td>
        <td style="width:180px;text-align:center">{{ $user->email}}</td>
        @if ($user->is_super_admin == 1)
        <td style="width:120px;text-align:center">超级管理员</td>
        @elseif($user->is_admin == 1)
        <td style="width:120px;text-align:center">普通管理员</td>
        @else
        <td style="width:120px;text-align:center">普通用户</td>
        @endif
        <td style="width:180px;text-align:center">
            @if ($user->factory_right == 1)
            工厂
            @endif
            @if ($user->brand_right == 1)
            品牌商
            @endif
            @if ($user->designer_right == 1)
            设计师
            @endif
            @if ($user->stall_right == 1)
            档口
            @endif
        </td>
        <td style="width:60px;text-align:center">
            @if ($user->contact_only == 1)
            否
            @else
            是
            @endif
        </td>
        <td style="width:150px;text-align:center">{{ $user->created_at}}</td>
        
        <td style="width:150px;text-align:center">
            @if (($is_super_admin == 1 && $user->is_super_admin == 0)||$user->is_admin == 0)
            <a href="{{URL::action('UserController@modifyUserRight', ['id' => $user->id]) }}" ><input type="button" value="修改" class="link_btn"/></a>
            @endif
            @if ($is_super_admin == 1 && $user->is_super_admin == 0)
            <a href="{{URL::action('UserController@deleteUser', ['id' => $user->id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
            @endif
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a href="/cms/user_create" style="float: left;" >添加用户</a>

    <a class="{{ ($users->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $users->url(1) }}">首页</a>

    @if ($users->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $users->url($users->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($users->lastPage() <= 9)
    @for ($i = 1; $i <= $users->lastPage(); $i++)
    <a class="{{ ($users->currentPage() == $i) ? ' active' : '' }}" href="{{ $users->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($users->currentPage() > 4)
    @for ($i = $users->currentPage() - 4; $i <= $users->currentPage() + 4; $i++)
    <a class="{{ ($users->currentPage() == $i) ? ' active' : '' }}" href="{{ $users->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($users->currentPage() == $i) ? ' active' : '' }}" href="{{ $users->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($users->currentPage() == $users->lastPage())
    <a class="{{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}" href="{{ $users->url($users->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}" href="{{ $users->url($users->lastPage()) }}" >尾页</a>
</aside>

@endsection