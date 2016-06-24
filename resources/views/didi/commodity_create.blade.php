@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">添加推广商品</h2>
</div>
<form action="{{URL::action('CommodityController@commodityStore', ['id' => $activity_id]) }}" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    <div style="margin-top: 20px;">
        <label>商品名称：</label>
        <input class="textbox textbox_225" type="text" name="name" placeholder="请输入商品名称" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商品简介：</label>
        <input class="textbox textbox_225" type="text" name="introduction" placeholder="请输入商品简介" value="" >
    </div>
    <div style="margin-top: 20px;">
        <label>商品链接：</label>
        <input class="textbox textbox_225" type="text" name="url" placeholder="请输入商品网店链接" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="保存" class="link_btn" style="margin-left: 12%"/>
        <a href="/didi/ActivityList" style="margin-left: 5%"><input type="button" value="结束" class="link_btn"/></a>
    </div>
</form>
<h3 style="margin-left: 2%; font-size: 16px; font-weight: bold;">本活动已添加{{ $num }}件商品</h3>
@if ( $num > 0)
<table border="2" width="95%" style="margin: 20px;">
    <tr>
        <th width="15%" height="40px;">商品名称：</th>
        <th width="35%" height="40px;">商品简介：</th>
        <th width="35%">商品链接：</th>
        <th width="15%">创建时间：</th>
    </tr>
    @foreach ($commodities as $commodity)
    <tr>
        <td height="40px;">{{ $commodity->name}}</td>
        <td>{{ $commodity->introduction}}</td>
        <td><a href="{{ $commodity->url}}" target="_blank">{{ $commodity->url}}</a></td>
        <td>{{ $commodity->created_at}}</td>
    </tr>
    @endforeach
</table>
@endif

@endsection