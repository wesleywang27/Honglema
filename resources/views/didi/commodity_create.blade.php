@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">添加推广商品</h2>
</div>
<form action="{{URL::action('CommodityController@commodityStore', ['id' => $activity_id]) }}" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    本活动已添加{{ $num }}件商品
    <div style="margin-top: 20px;">
        <label>商品名称：</label>
        <input class="textbox textbox_225" type="text" name="name" placeholder="请输入商品名称" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商品简介：</label>
        <input class="textbox textbox_225" type="text" name="introduction" placeholder="请输入商品简介" value="" required>
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
@endsection