@extends('cms.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">工厂信息列表</h2>
    <form action="/cms/factory" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right; margin-top: 2px;" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch" placeholder="按姓名查找"/>
    </form>
</div>
<table class="table">
    <tr>
        <th>工厂ID</th>
        <th>姓名</th>
        <th>联系方式</th>
        <th>微信账号</th>
        <th>公司名称</th>
        <th>职位</th>
        <th>操作</th>
    </tr>
    @foreach ($factories as $factory)
    <tr>
        <td style="width:65px; height: 20px;">{{ $factory->factory_id}}</td>
        <td style="width:100px;">{{ $factory->username}}</td>
        <td style="width:120px;">{{ $factory->mobile}}</td>
        <td style="width:120px;">{{ $factory->weixinNo}}</td>
        <td style="width:200px;">{{ $factory->company}}</td>
        <td style="width:120px;">{{ $factory->title}}</td>
        <td style="text-align:center">
            <a href="{{URL::action('CMSController@factory_info', ['id' => $factory->factory_id]) }}"><input type="button" value="查看" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
            <!--<input type="button" value="修改" class="link_btn"/>-->
            <a href="{{URL::action('CMSController@deleteFactory', ['id' => $factory->factory_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a href="{{ url('/cms/factory_export') }}" style="float: left;">导出EXcel</a>

    <a class="{{ ($factories->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $factories->url(1) }}">首页</a>

    @if ($factories->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $factories->url($factories->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($factories->lastPage() <= 9)
    @for ($i = 1; $i <= $factories->lastPage(); $i++)
    <a class="{{ ($factories->currentPage() == $i) ? ' active' : '' }}" href="{{ $factories->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($factories->currentPage() > 4)
    @for ($i = $factories->currentPage() - 4; $i <= $factories->currentPage() + 4; $i++)
    <a class="{{ ($factories->currentPage() == $i) ? ' active' : '' }}" href="{{ $factories->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($factories->currentPage() == $i) ? ' active' : '' }}" href="{{ $factories->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($factories->currentPage() == $factories->lastPage())
    <a class="" href="#" >后一页</a>
    @else
    <a class="" href="{{ $factories->url($factories->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($factories->currentPage() == $factories->lastPage()) ? ' disabled' : '' }}" href="{{ $factories->url($factories->lastPage()) }}" >尾页</a>
</aside>
@endsection