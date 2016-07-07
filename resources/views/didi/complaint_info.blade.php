@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">投诉信息详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <table border="2" width="95%" height="350" style="margin: 20px;">
            <tr>
                <th width="8%">投诉类型</th>
                <td width="15%" style="text-align:center">{{ $complaint->type}}</td>
                <th width="8%">状态</th>
                <td colspan="3" style="text-align:center">{{ $complaint->status}}</td>
            </tr>
            <tr>
                <th>活动名称</th>
                <td style="text-align:center">{{ $title}}</td>
                <th>商家名称</th>
                <td style="text-align:center">{{ $merchant->name}}</td>
                <th width="8%">红人昵称</th>
                <td width="15%" style="text-align:center">{{ $star->name}}</td>
            </tr>
            <tr>
                <th>投诉内容</th>
                <td colspan="5">{{ $complaint->content}}</td>
            </tr>
            <tr>
                <th>处理结果</th>
                <td colspan="5">{{ $complaint->solution}}</td>
            </tr>
        </table>
        <a href="/didi/ComplaintList" style="float: right; margin-right: 50px;"><input type="button" value="返回" class="link_btn"/></a>
        <a href="{{URL::action('ComplaintController@submitSolution', ['id' => $complaint->complaint_id]) }}" style="float: right; margin-right: 5px;"><input type="button" value="提交处理结果" class="link_btn"/></a>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection