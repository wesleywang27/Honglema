@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">确认推广网红</h2>
</div>
<form action="{{URL::action('ActivityController@activityChooseStar', ['activity_id' => $activity->activity_id ,'star_id' => $star->star_id]) }}" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    <div style="margin-top: 20px;">
        <label>活动名称：</label>
        <input class="textbox textbox_225" type="text" name="title" value="{{ $activity->title }}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <label>网红昵称：</label>
        <input class="textbox textbox_225" type="text" name="name" value="{{ $star->name }}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <label>剩余场次：</label>
        <input class="textbox textbox_225" type="text" name="left_num" value="{{ $activity->task_num - $activity->confirm_num }}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <label>期望场次：</label>
        <input class="textbox textbox_225" type="text" name="expectation_num" value="{{ $order->expectation_num }}" readonly>
    </div>
    <div style="margin-top: 20px;">
        <label>分配场次：</label>
        <input class="textbox textbox_225" type="number" name="confirm_num" placeholder="为该网红分配的场次" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>发送样品：</label>
        <select class="select" name="is_shipping">
            <option value="1">是</option>
            <option value="0">否</option>
        </select>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="确认" class="link_btn" style="margin-left: 14%"/>
        <a href="javascript:history.back();"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>
@endsection