@extends('cms.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">档口信息列表</h2>
    <form action="/cms/stall" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right; margin-top: 2px;" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch" placeholder="按姓名查找"/>
    </form>
</div>
<table class="table">
    <tr>
        <th>档口ID</th>
        <th>姓名</th>
        <th>联系方式</th>
        <th>微信账号</th>
        <th>档口名称</th>
        <th>档口号</th>
        <th>操作</th>
    </tr>
    @foreach ($stalls as $stall)
    <tr>
        <td style="width:65px; height: 20px;">{{ $stall->stall_id}}</td>
        <td style="width:100px;">{{ $stall->username}}</td>
        <td style="width:120px;">{{ $stall->mobile}}</td>
        <td style="width:120px;">{{ $stall->weixinNo}}</td>
        <td style="width:200px;">{{ $stall->stallName}}</td>
        <td style="width:120px;">{{ $stall->stallNum}}</td>
        <td style="text-align:center">
            <a href="{{URL::action('CMSController@stall_info', ['id' => $stall->stall_id]) }}"><input type="button" value="查看" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
            <a href="{{URL::action('CMSController@modifyStallInfo', ['id' => $stall->stall_id]) }}"><input type="button" value="修改" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
            <a href="{{URL::action('CMSController@deleteStall', ['id' => $stall->stall_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a href="{{ url('/cms/stall_export') }}" style="float: left;" >导出Excel</a>

    <a class="{{ ($stalls->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $stalls->url(1) }}">首页</a>

    @if ($stalls->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $stalls->url($stalls->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($stalls->lastPage() <= 9)
    @for ($i = 1; $i <= $stalls->lastPage(); $i++)
    <a class="{{ ($stalls->currentPage() == $i) ? ' active' : '' }}" href="{{ $stalls->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($stalls->currentPage() > 4)
    @for ($i = $stalls->currentPage() - 4; $i <= $stalls->currentPage() + 4; $i++)
    <a class="{{ ($stalls->currentPage() == $i) ? ' active' : '' }}" href="{{ $stalls->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($stalls->currentPage() == $i) ? ' active' : '' }}" href="{{ $stalls->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($stalls->currentPage() == $stalls->lastPage())
    <a class="{{ ($stalls->currentPage() == $stalls->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($stalls->currentPage() == $stalls->lastPage()) ? ' disabled' : '' }}" href="{{ $stalls->url($stalls->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($stalls->currentPage() == $stalls->lastPage()) ? ' disabled' : '' }}" href="{{ $stalls->url($stalls->lastPage()) }}" >尾页</a>
</aside>
@endsection