@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">操作日志列表</h2>
</div>
<table class="table">
    <tr>
        <th>日志ID</th>
        <th>操作用户</th>
        <th>操作类别</th>
        <th>操作表</th>
        <th>操作对象</th>
        <th>操作时间</th>
    </tr>
    @foreach ($logs as $log)
    <tr>
        <td style="width:60px;height:20px;text-align:center">{{ $log->log_id}}</td>
        <td style="width:100px;text-align:center">{{ $log->username}}</td>
        <td style="width:100px;text-align:center">{{ $log->operation}}</td>
        <td style="width:160px;text-align:center">{{ $log->operated_table}}</td>
        <td style="width:160px;text-align:center">{{ $log->operated_username}}</td>
        <td style="width:180px;text-align:center">{{ $log->time}}</td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a class="{{ ($logs->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $logs->url(1) }}">首页</a>

    @if ($logs->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $logs->url($logs->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($logs->lastPage() <= 9)
    @for ($i = 1; $i <= $logs->lastPage(); $i++)
    <a class="{{ ($logs->currentPage() == $i) ? ' active' : '' }}" href="{{ $logs->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($logs->currentPage() > 4)
    @for ($i = $logs->currentPage() - 4; $i <= $logs->currentPage() + 4; $i++)
    <a class="{{ ($logs->currentPage() == $i) ? ' active' : '' }}" href="{{ $logs->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($logs->currentPage() == $i) ? ' active' : '' }}" href="{{ $logs->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($logs->currentPage() == $logs->lastPage())
    <a class="{{ ($logs->currentPage() == $logs->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($logs->currentPage() == $logs->lastPage()) ? ' disabled' : '' }}" href="{{ $logs->url($logs->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($logs->currentPage() == $logs->lastPage()) ? ' disabled' : '' }}" href="{{ $logs->url($logs->lastPage()) }}" >尾页</a>
</aside>

@endsection