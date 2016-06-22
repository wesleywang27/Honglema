@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">处理活动信息</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">评价网红</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <div style="margin-left: 30%">
            <div style="margin-top: 20px;">
                <label>直播回看链接：</label>
                <a href="{{ $task->playback_url}}" target="_blank"><input class="textbox textbox_225" type="text"  value="{{ $task->playback_url}}" readonly></a>
            </div>
            <div style="margin-top: 20px;">
                <label>直播观看人数：</label>
                <input class="textbox textbox_225" type="text"  value="{{ $task->views}}" readonly>
            </div>
            <div style="margin-top: 20px;">
                <label>直播时长：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input class="textbox textbox_225" type="text"  value="{{ $task->duration}}" readonly>
            </div>
            <ul class="gallery">
                @foreach ($pictures as $picture)
                <li><a href="{{ $picture->url }}"><img src="{{ $picture->url }}" style="width: 80px; height: 80px;"/></a><label><input name="img[]" type="checkbox" value="{{ $picture->url }}" style="margin-top:5px;"/></label></li>
                @endforeach
            </ul>
        </div>
        <form action="{{URL::action('ActivityController@activityEvaluation', ['id' => $task->task_id]) }}" method="post" style="margin-left: 30%">
            <div style="margin-top: 20px;">
                <label>评价网红：</label>
                <br><br>
                <textarea name="evaluation" placeholder="请对网红进行评价" class="textarea" style="width:320px;height:100px;"></textarea>
            </div>
            <input name="commit" type="submit" value="评价" class="link_btn" style="margin-top: 20px; margin-left: 12%"/>
            <a href="/didi/ActivityList"><input type="button" value="返回" class="link_btn" style="margin-left: 5%;"/></a>
        </form>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection