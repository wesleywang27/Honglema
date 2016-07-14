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
        <form action="{{URL::action('ActivityController@activityExpressStore', ['id' => $task->task_id]) }}" method="post" style="margin-left: 30%">
            <div style="margin-top: 20px;">
                <div style="margin-top: 20px;">
                    <label>发送样品：</label>
                    <select class="select" name="is_shipping">
                        <option value="1">是</option>
                        <option value="0">否</option>
                    </select>
                </div>
                <div style="margin-top: 20px;">
                    <label>快递公司：</label>
                    <input type="text" class="textbox textbox_225" name="express_company" placeholder="请填写快递公司"/>
                </div>
                <div style="margin-top: 20px;">
                    <label>快递单号：</label>
                    <input type="text" class="textbox textbox_225" name="express_num" placeholder="请填写快递单号"/>
                </div>
            </div>
            <input name="commit" type="submit" value="提交" class="link_btn" style="margin-top: 20px; margin-left: 12%"/>
            <a href="javascript:history.back();"><input type="button" value="返回" class="link_btn" style="margin-left: 8%;"/></a>
        </form>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection