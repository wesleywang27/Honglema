@extends('cms.banner')

@section('content')
<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">设计师信息列表</h2>
    <a class="fr top_rt_btn" style="float:right">查找</a>
    <input type="text" class="textboxsearch" placeholder="按姓名查找"/>
</div>
<table class="table">
    <tr>
        <th>设计师ID</th>
        <th>姓名</th>
        <th>联系方式</th>
        <th>设计师类型</th>
        <th>微信账号</th>
        <th>职位</th>
        <th>操作</th>
    </tr>
    @foreach ($designers as $designer)
    <tr>
        <td style="width:65px;">{{ $designer->designer_id}}</td>
        <td style="width:100px;">{{ $designer->username}}</td>
        <td style="width:120px;">{{ $designer->mobile}}</td>
        <td style="width:120px;">{{ $designer->designType}}</td>
        <td style="width:155px;">{{ $designer->weixinNo}}</td>
        <td style="width:120px;">{{ $designer->title}}</td>
        <td style="text-align:center">
            <a href="{{URL::action('CMSController@designer_info', ['id' => $designer->designer_id]) }}"><input type="button" value="查看" class="link_btn" /></a>
            <a href="#"><input type="button" value="修改" class="link_btn"/></a>
            <a href="{{URL::action('CMSController@deleteDesigner', ['id' => $designer->designer_id]) }}"><input type="button" value="删除" class="link_btn"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    @if ($designers->currentPage() == 1)
    <a class="{{ ($designers->currentPage() == 1) ? ' disabled' : '' }}" href="#">前一页</a>
    @else
    <a class="{{ ($designers->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $designers->url(1) }}">前一页</a>
    @endif

    @for ($i = 1; $i <= $designers->lastPage(); $i++)
    <a class="{{ ($designers->currentPage() == $i) ? ' active' : '' }}" href="{{ $designers->url($i) }}">{{ $i }}</a>
    @endfor

    @if ($designers->currentPage() == $designers->lastPage())
    <a class="{{ ($designers->currentPage() == $designers->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($designers->currentPage() == $designers->lastPage()) ? ' disabled' : '' }}" href="{{ $designers->url($designers->currentPage()+1) }}" >后一页</a>
    @endif
</aside>
@endsection