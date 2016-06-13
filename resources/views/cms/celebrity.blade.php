@extends('cms.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">红人信息列表</h2>
    <form action="/cms/celebrityList" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right; margin-top: 8px;" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch"
               @if ($name != 'all')
               value="{{ $name }}"
               @endif
               placeholder="按姓名查找"/>
    </form>
</div>
<table class="table">
    <tr>
        <th>红人ID</th>
        <th>网络昵称</th>
        <th>真实姓名</th>
        <th>联系方式</th>
        <th>微信账号</th>
        <th>城市</th>
        <th>职业</th>
        <th>操作</th>
    </tr>
    @foreach ($celebrities as $celebrity)
    <tr>
        <td style="width:60px; height: 20px;">{{ $celebrity->id}}</td>
        <td style="width:120px;">{{ $celebrity->nickname}}</td>
        <td style="width:120px;">{{ $celebrity->realname}}</td>
        <td style="width:120px;">{{ $celebrity->cellphone}}</td>
        <td style="width:120px;">{{ $celebrity->wechat_id}}</td>
        <td style="width:120px;">{{ $celebrity->city}}</td>
        <td style="width:120px;">{{ $celebrity->occupation}}</td>
        <td style="text-align:center">
            <a href="{{URL::action('CMSController@celebrity_info', ['id' => $celebrity->id]) }}"><input type="button" value="查看" class="link_btn"/></a>
            <a href="{{URL::action('CMSController@modifyCelebrityInfo', ['id' => $celebrity->id]) }}"><input type="button" value="修改" class="link_btn"/></a>
            <a href="{{URL::action('CMSController@deleteCelebrity', ['id' => $celebrity->id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a href="{{ url('/cms/celebrity_export') }}" style="float: left;" >导出Excel</a>
    <a href="/cms/celebrity_create" style="float: left;margin-left: 10px;" >添加红人</a>

    <a class="{{ ($celebrities->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $celebrities->url(1) }}">首页</a>

    @if ($celebrities->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $celebrities->url($celebrities->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($celebrities->lastPage() <= 9)
    @for ($i = 1; $i <= $celebrities->lastPage(); $i++)
    <a class="{{ ($celebrities->currentPage() == $i) ? ' active' : '' }}" href="{{ $celebrities->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($celebrities->currentPage() > 4 && $celebrities->currentPage() < $celebrities->lastPage() - 4)
    @for ($i = $celebrities->currentPage() - 4; $i <= $celebrities->currentPage() + 4; $i++)
    <a class="{{ ($celebrities->currentPage() == $i) ? ' active' : '' }}" href="{{ $celebrities->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($celebrities->currentPage() > 4)
    @for ($i = $celebrities->lastPage() - 8; $i <= $celebrities->lastPage(); $i++)
    <a class="{{ ($celebrities->currentPage() == $i) ? ' active' : '' }}" href="{{ $celebrities->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($celebrities->currentPage() == $i) ? ' active' : '' }}" href="{{ $celebrities->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($celebrities->currentPage() == $celebrities->lastPage())
    <a class="{{ ($celebrities->currentPage() == $celebrities->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($celebrities->currentPage() == $celebrities->lastPage()) ? ' disabled' : '' }}" href="{{ $celebrities->url($celebrities->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($celebrities->currentPage() == $celebrities->lastPage()) ? ' disabled' : '' }}" href="{{ $celebrities->url($celebrities->lastPage()) }}" >尾页</a>
</aside>
@endsection