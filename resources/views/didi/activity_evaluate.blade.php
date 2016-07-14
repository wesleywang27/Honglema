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
        <form action="{{URL::action('ActivityController@activityEvaluation', ['id' => $task->task_id]) }}" method="post" style="margin-left: 30%">
            <div style="margin-top: 20px;">
                <label>星级评价：</label>
                <select class="select" name="evaluation_level">
                    <option value="1">一星</option>
                    <option value="2">二星</option>
                    <option value="3">三星</option>
                    <option value="4">四星</option>
                    <option value="5">五星</option>
                </select>
                <br><br>
                <label>评价网红：</label>
                <br><br>
                <textarea name="evaluation" placeholder="请对网红进行评价" class="textarea" style="width:320px;height:100px;"></textarea>
            </div>
            <input name="commit" type="submit" value="评价" class="link_btn" style="margin-top: 20px; margin-left: 12%"/>
            <a href="javascript:history.back();"><input type="button" value="返回" class="link_btn" style="margin-left: 5%;"/></a>
        </form>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection