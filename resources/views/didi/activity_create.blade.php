@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">添加推广活动</h2>
</div>
<form action="{{URL::action('ActivityController@activityStore', ['id' => $merchant_id]) }}" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    <div style="margin-top: 20px;">
        <label>活动名称：</label>
        <input class="textbox textbox_225" type="text" name="title" placeholder="请输入活动名称" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>活动要求：</label>
        <input class="textbox textbox_225" type="text" name="claim" placeholder="请输入活动要求" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>活动时间：</label>
        <input class="textbox textbox_225" type="text" name="time_within" placeholder="收货后多久直播" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>活动形式：</label>
        <select class="select" name="level">
            @foreach ($price_levels as $price_level)
            <option value="{{ $price_level->pl_id }}">{{ $price_level->level }}</option>
            @endforeach
        </select>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="确认" class="link_btn" style="margin-left: 12%"/>
        <a href="/didi/MerchantList"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>
@endsection