@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">任务结果详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">结果详情</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <div style="margin-left: 30%">
            <div style="margin-top: 20px;">
                <label>直播回看链接：</label>
                <a href="{{ $task_result->playback_url}}" target="_blank"><input class="textbox textbox_225" type="text"  value="{{ $task_result->playback_url}}" readonly></a>
            </div>
            <div style="margin-top: 20px;">
                <label>直播观看人数：</label>
                <input class="textbox textbox_225" type="text"  value="{{ $task_result->views}}" readonly>
            </div>
            <div style="margin-top: 20px;">
                <label>直播时长：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input class="textbox textbox_225" type="text"  value="{{ $task_result->duration}}" readonly>
            </div>
            <div style="margin-top: 20px; width: 400px;">
                <label>直播截图：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                @foreach ($pictures as $picture)
                <a href="{{ $picture->url }}" target="_blank"><img src="{{ $picture->url }}" style="width: 80px; height: 80px;"/></a>
                @endforeach
            </div>
        </div>
    </div>
    <a href="javascript:history.back();"><input type="button" value="返回" class="link_btn" style="margin-top: 30px; margin-left: 45%;"/></a>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection