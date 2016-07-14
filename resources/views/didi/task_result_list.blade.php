@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">任务结果列表</h2>
</div>
<table class="table">
    <tr>
        <th>任务结果ID</th>
        <th>回看链接</th>
        <th>观看人数</th>
        <th>直播时长</th>
        <th>操作</th>
    </tr>
    @foreach ($task_results as $task_result)
    <tr>
        <td style="width:80px;text-align:center">{{ $task_result->task_result_id }}</td>
        <td style="width:240px;text-align:center">{{ $task_result->playback_url }}</td>
        <td style="width:120px;text-align:center">{{ $task_result->views }}</td>
        <td style="width:180px;text-align:center">{{ $task_result->duration }}</td>
        <td style="width:120px;text-align:center">
            <a href="{{URL::action('ActivityController@taskResultInfo', ['id' => $task_result->task_result_id]) }}"><input type="button" value="查看" class="link_btn"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a href="javascript:history.back();" style="float: left;">返回</a>

    <a class="{{ ($task_results->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $task_results->url(1) }}">首页</a>

    @if ($task_results->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $task_results->url($task_results->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($task_results->lastPage() <= 9)
    @for ($i = 1; $i <= $task_results->lastPage(); $i++)
    <a class="{{ ($task_results->currentPage() == $i) ? ' active' : '' }}" href="{{ $task_results->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($task_results->currentPage() > 4)
    @for ($i = $task_results->currentPage() - 4; $i <= $task_results->currentPage() + 4; $i++)
    <a class="{{ ($task_results->currentPage() == $i) ? ' active' : '' }}" href="{{ $task_results->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($task_results->currentPage() == $i) ? ' active' : '' }}" href="{{ $task_results->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($task_results->currentPage() == $task_results->lastPage())
    <a class="{{ ($task_results->currentPage() == $task_results->lastPage()) ? ' disabled' : '' }}" href="#">后一页</a>
    @else
    <a class="{{ ($task_results->currentPage() == $task_results->lastPage()) ? ' disabled' : '' }}"
       href="{{ $task_results->url($task_results->currentPage()+1) }}">后一页</a>
    @endif

    <a class="{{ ($task_results->currentPage() == $task_results->lastPage()) ? ' disabled' : '' }}"
       href="{{ $task_results->url($task_results->lastPage()) }}">尾页</a>
</aside>

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection