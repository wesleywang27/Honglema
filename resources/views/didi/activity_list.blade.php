@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">活动信息列表</h2>
</div>
<table class="table">
    <tr>
        <th>活动ID</th>
        <th>活动标题</th>
        <th>推广费用</th>
        <th>活动状态</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    @foreach ($activities as $activity)
    <tr>
        <td style="width:80px;text-align:center">{{ $activity->activity_id }}</td>
        <td style="width:180px;text-align:center">{{ $activity->title }}</td>
        <td style="width:180px;text-align:center">{{ $activity->total_price }}</td>
        <td style="width:180px;text-align:center">
            @if ($activity->activity_status == 0)
            待审核
            @elseif ($activity->activity_status == 1)
            进行中
            @elseif ($activity->activity_status == 2)
            待打款
            @else
            已结束
            @endif
        </td>
        <td style="width:180px;text-align:center">{{ $activity->created_at }}</td>
        <td style="width:180px;text-align:center">
            <a href="{{URL::action('ActivityController@activityInfo', ['id' => $activity->activity_id]) }}" ><input type="button" value="查看" class="link_btn"/></a>
            @if ($activity->activity_status == 1)
            <a href="{{URL::action('ActivityController@activityModify', ['id' => $activity->activity_id]) }}" ><input type="button" value="处理" class="link_btn"/></a>
            @endif
            <a href="{{URL::action('ActivityController@activityDelete', ['id' => $activity->activity_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a class="{{ ($activities->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $activities->url(1) }}">首页</a>

    @if ($activities->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $activities->url($activities->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($activities->lastPage() <= 9)
    @for ($i = 1; $i <= $activities->lastPage(); $i++)
    <a class="{{ ($activities->currentPage() == $i) ? ' active' : '' }}" href="{{ $activities->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($activities->currentPage() > 4)
    @for ($i = $activities->currentPage() - 4; $i <= $activities->currentPage() + 4; $i++)
    <a class="{{ ($activities->currentPage() == $i) ? ' active' : '' }}" href="{{ $activities->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($activities->currentPage() == $i) ? ' active' : '' }}" href="{{ $activities->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($activities->currentPage() == $activities->lastPage())
    <a class="{{ ($activities->currentPage() == $activities->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($activities->currentPage() == $activities->lastPage()) ? ' disabled' : '' }}" href="{{ $activities->url($activities->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($activities->currentPage() == $activities->lastPage()) ? ' disabled' : '' }}" href="{{ $activities->url($activities->lastPage()) }}" >尾页</a>
</aside>

@endsection