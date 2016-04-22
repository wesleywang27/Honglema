@extends('cms.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">设计师信息列表</h2>
    <form action="/cms/designer" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch" placeholder="按姓名查找"/>
    </form>
</div>
<table class="table">
    <tr>
        <th>设计师ID</th>
        <th>姓名</th>
        <th>联系方式</th>
        <th>设计师类型</th>
        <th>微信账号</th>
        <th>职位</th>
        <th>操作</th>
    </tr>
    @foreach ($designers as $designer)
    <tr>
        <td style="width:65px; height: 20px;">{{ $designer->designer_id}}</td>
        <td style="width:100px;">{{ $designer->username}}</td>
        <td style="width:120px;">{{ $designer->mobile}}</td>
        <td style="width:120px;">{{ $designer->designType}}</td>
        <td style="width:155px;">{{ $designer->weixinNo}}</td>
        <td style="width:120px;">{{ $designer->title}}</td>
        <td style="text-align:center">
            <a href="{{URL::action('CMSController@designer_info', ['id' => $designer->designer_id]) }}"><input type="button" value="查看" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
            <!--<input type="button" value="修改" class="link_btn"/>-->
            <a href="{{URL::action('CMSController@deleteDesigner', ['id' => $designer->designer_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a class="{{ ($designers->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $designers->url(1) }}">首页</a>

    @if ($designers->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $designers->url($designers->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($designers->lastPage() <= 9)
    @for ($i = 1; $i <= $designers->lastPage(); $i++)
    <a class="{{ ($designers->currentPage() == $i) ? ' active' : '' }}" href="{{ $designers->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($designers->currentPage() > 4)
    @for ($i = $designers->currentPage() - 4; $i <= $designers->currentPage() + 4; $i++)
    <a class="{{ ($designers->currentPage() == $i) ? ' active' : '' }}" href="{{ $designers->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($designers->currentPage() == $i) ? ' active' : '' }}" href="{{ $designers->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($designers->currentPage() == $designers->lastPage())
    <a class="{{ ($designers->currentPage() == $designers->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($designers->currentPage() == $designers->lastPage()) ? ' disabled' : '' }}" href="{{ $designers->url($designers->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($designers->currentPage() == $designers->lastPage()) ? ' disabled' : '' }}" href="{{ $designers->url($designers->lastPage()) }}" >尾页</a>
</aside>
<a href="{{ url('/cms/designer_export') }}" style="float: right;" ><input type="button" value="导出Excel" class="link_btn"/></a>
@endsection