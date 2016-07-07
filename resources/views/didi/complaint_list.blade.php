@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">投诉信息列表</h2>
</div>
<table class="table">
    <tr>
        <th>投诉ID</th>
        <th>商家</th>
        <th>红人</th>
        <th>活动</th>
        <th>投诉种类</th>
        <th>内容</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    @foreach ($complaints as $complaint)
    <tr>
        <td style="width:80px;text-align:center">{{ $complaint->complaint_id }}</td>
        <td style="width:80px;text-align:center">{{ $complaint->merchant_id }}</td>
        <td style="width:80px;text-align:center">{{ $complaint->star_id }}</td>
        <td style="width:80px;text-align:center">{{ $complaint->task_id }}</td>
        <td style="width:120px;text-align:center">
            @if($complaint->type == 0)
            投诉红人
            @elseif($complaint->type == 1)
            投诉商家
            @elseif($complaint->type == 2)
            商家投诉平台
            @elseif($complaint->type == 3)
            红人投诉平台
            @endif
        </td>
        <td style="text-align:center">{{ $complaint->content }}</td>
        <td style="width:80px;text-align:center">{{ $complaint->status }}</td>
        <td style="width:80px;text-align:center">
            <a href="{{URL::action('ComplaintController@complaintInfo', ['id' => $complaint->complaint_id]) }}"><input type="button" value="查看" class="link_btn"/></a>
        </td>  
    </tr>
    @endforeach

</table>
<aside class="paging">
    <a class="{{ ($complaints->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $complaints->url(1) }}">首页</a>

    @if ($complaints->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $complaints->url($complaints->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($complaints->lastPage() <= 9)
    @for ($i = 1; $i <= $complaints->lastPage(); $i++)
    <a class="{{ ($complaints->currentPage() == $i) ? ' active' : '' }}" href="{{ $complaints->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($complaints->currentPage() > 4)
    @for ($i = $complaints->currentPage() - 4; $i <= $complaints->currentPage() + 4; $i++)
    <a class="{{ ($complaints->currentPage() == $i) ? ' active' : '' }}" href="{{ $complaints->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($complaints->currentPage() == $i) ? ' active' : '' }}" href="{{ $complaints->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($complaints->currentPage() == $complaints->lastPage())
    <a class="{{ ($complaints->currentPage() == $complaints->lastPage()) ? ' disabled' : '' }}" href="#">后一页</a>
    @else
    <a class="{{ ($complaints->currentPage() == $complaints->lastPage()) ? ' disabled' : '' }}"
       href="{{ $complaints->url($complaints->currentPage()+1) }}">后一页</a>
    @endif

    <a class="{{ ($complaints->currentPage() == $complaints->lastPage()) ? ' disabled' : '' }}"
       href="{{ $complaints->url($complaints->lastPage()) }}">尾页</a>

</aside>

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection
