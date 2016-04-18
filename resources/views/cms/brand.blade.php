@extends('cms.banner')

@section('content')
<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">品牌商信息列表</h2>
    <a class="fr top_rt_btn" style="float:right">查找</a>
    <input type="text" class="textboxsearch" placeholder="搜索"/>
</div>
<table class="table">
    <tr>
        <th>品牌商ID</th>
        <th>姓名</th>
        <th>联系方式</th>
        <th>微信账号</th>
        <th>公司名称</th>
        <th>职位</th>
        <th>操作</th>
    </tr>
    @foreach ($brands as $brand)
    <tr>
        <td style="width:65px;">{{ $brand->brand_id}}</td>
        <td style="width:100px;">{{ $brand->username}}</td>
        <td style="width:120px;">{{ $brand->mobile}}</td>
        <td style="width:120px;">{{ $brand->weixinNo}}</td>
        <td style="width:155px;">{{ $brand->company}}</td>
        <td style="width:120px;">{{ $brand->title}}</td>
        <td style="text-align:center">
            <a href="{{URL::action('CMSController@brand_info', ['id' => $brand->brand_id]) }}"><input type="button" value="查看" class="link_btn" /></a>
            <a href="#"><input type="button" value="修改" class="link_btn"/></a>
            <a href="{{URL::action('CMSController@deleteBrand', ['id' => $brand->brand_id]) }}"><input type="button" value="删除" class="link_btn"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    @if ($brands->currentPage() == 1)
    <a class="{{ ($brands->currentPage() == 1) ? ' disabled' : '' }}" href="#">前一页</a>
    @else
    <a class="{{ ($brands->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $brands->url(1) }}">前一页</a>
    @endif

    @for ($i = 1; $i <= $brands->lastPage(); $i++)
    <a class="{{ ($brands->currentPage() == $i) ? ' active' : '' }}" href="{{ $brands->url($i) }}">{{ $i }}</a>
    @endfor

    @if ($brands->currentPage() == $brands->lastPage())
    <a class="{{ ($brands->currentPage() == $brands->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($brands->currentPage() == $brands->lastPage()) ? ' disabled' : '' }}" href="{{ $brands->url($brands->currentPage()+1) }}" >后一页</a>
    @endif
</aside>
@endsection