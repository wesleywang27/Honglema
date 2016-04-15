@extends('cms.banner')

@section('content')
<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">档口信息列表</h2>
    <a class="fr top_rt_btn" style="float:right">查找</a>
    <input type="text" class="textboxsearch" placeholder="搜索"/>
</div>
<table class="table">
    <tr>
        <th>档口ID</th>
        <th>姓名</th>
        <th>联系方式</th>
        <th>微信账号</th>
        <th>档口名称</th>
        <th>档口号</th>
        <th>操作</th>
    </tr>
    @foreach ($stall as $stall)
    <tr>
        <td style="width:65px;">{{ $stall->stall_id}}</td>
        <td style="width:100px;">{{ $stall->username}}</td>
        <td style="width:120px;">{{ $stall->mobile}}</td>
        <td style="width:155px;">{{ $stall->weixinNo}}</td>
        <td style="width:120px;">{{ $stall->stallName}}</td>
        <td style="width:120px;">{{ $stall->stallNum}}</td>
        <td style="text-align:center">
            <a href="#"><input type="button" value="查看" class="link_btn" /></a>
            <a href="#"><input type="button" value="修改" class="link_btn"/></a>
            <a href="#"><input type="button" value="删除" class="link_btn"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a>第一页</a>
    <a>1</a>
    <a>2</a>
    <a>3</a>
    <a>…</a>
    <a>100</a>
    <a>最后一页</a>
</aside>
@endsection