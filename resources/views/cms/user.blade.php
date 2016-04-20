@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">后台用户管理</strong></h2>
<div class="page_title">
    <h2 class="fl">后台用户列表</h2>
    <form action="/cms/user" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch" placeholder="按姓名查找"/>
    </form>
</div>
<table class="table">
    <tr>
        <th>用户ID</th>
        <th>用户名</th>
        <th>邮箱</th>
        <th>用户权限</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td style="width:100px;text-align:center">{{ $user->id}}</td>
        <td style="width:150px;text-align:center">{{ $user->name}}</td>
        <td style="width:200px;text-align:center">{{ $user->email}}</td>
        @if ($user->is_super_admin == 1)
        <td style="width:150px;text-align:center">超级管理员</td>
        @elseif($user->is_admin == 1)
        <td style="width:150px;text-align:center">普通管理员</td>
        @else
        <td style="width:150px;text-align:center">普通用户</td>
        @endif
        <td style="width:200px;text-align:center">{{ $user->created_at}}</td>
        @if ($is_super_admin == 1)
        <td style="width:150px;text-align:center">
            <a href="#" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
        </td>
        @else
        <td style="width:150px;text-align:center">
        </td>
        @endif
    </tr>
    @endforeach
</table>
<aside class="paging">
    @if ($users->currentPage() == 1)
    <a class="{{ ($users->currentPage() == 1) ? ' disabled' : '' }}" href="#">前一页</a>
    @else
    <a class="{{ ($users->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $users->url(1) }}">前一页</a>
    @endif

    @for ($i = 1; $i <= $users->lastPage(); $i++)
    <a class="{{ ($users->currentPage() == $i) ? ' active' : '' }}" href="{{ $users->url($i) }}">{{ $i }}</a>
    @endfor

    @if ($users->currentPage() == $users->lastPage())
    <a class="{{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}" href="{{ $users->url($users->currentPage()+1) }}" >后一页</a>
    @endif
</aside>

@endsection