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
        <input class="textbox textbox_225" type="text" name="introduction" placeholder="请输入商品简介" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>商品链接：</label>
        <input class="textbox textbox_225" type="text" name="url" placeholder="请输入商品网店链接" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="完成添加" class="link_btn" style="margin-left: 10%"/>
        <a href="#"  class="link_btn" style="margin-left: 5%">继续添加</a>
    </div>
</form>
@endsection