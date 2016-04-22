@extends('cms.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">品牌商信息列表</h2>
    <form action="/cms/brand" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch" placeholder="按姓名查找"/>
    </form>
</div>
<table class="table">
    <tr>
        <th>品牌商ID</th>
        <th>姓名</th>
        <th>联系方式</th>
        <th>微信账号</th>
        <th>公司名称</th>
        <th>职位</th>
        <th>操作</th>
    </tr>
    @foreach ($brands as $brand)
    <tr>
        <td style="width:65px; height: 20px;">{{ $brand->brand_id}}</td>
        <td style="width:100px;">{{ $brand->username}}</td>
        <td style="width:120px;">{{ $brand->mobile}}</td>
        <td style="width:120px;">{{ $brand->weixinNo}}</td>
        <td style="width:155px;">{{ $brand->company}}</td>
        <td style="width:120px;">{{ $brand->title}}</td>
        <td style="text-align:center">
            <a href="{{URL::action('CMSController@brand_info', ['id' => $brand->brand_id]) }}"><input type="button" value="查看" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
            <!--<input type="button" value="修改" class="link_btn"/>-->
            <a href="{{URL::action('CMSController@deleteBrand', ['id' => $brand->brand_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a class="{{ ($brands->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $brands->url(1) }}">首页</a>

    @if ($brands->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $brands->url($brands->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($brands->lastPage() <= 9)
    @for ($i = 1; $i <= $brands->lastPage(); $i++)
    <a class="{{ ($brands->currentPage() == $i) ? ' active' : '' }}" href="{{ $brands->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($brands->currentPage() > 4)
    @for ($i = $brands->currentPage() - 4; $i <= $brands->currentPage() + 4; $i++)
    <a class="{{ ($brands->currentPage() == $i) ? ' active' : '' }}" href="{{ $brands->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($brands->currentPage() == $i) ? ' active' : '' }}" href="{{ $brands->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($brands->currentPage() == $brands->lastPage())
    <a class="{{ ($brands->currentPage() == $brands->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($brands->currentPage() == $brands->lastPage()) ? ' disabled' : '' }}" href="{{ $brands->url($brands->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($brands->currentPage() == $brands->lastPage()) ? ' disabled' : '' }}" href="{{ $brands->url($brands->lastPage()) }}" >尾页</a>
</aside>
<a href="{{ url('/cms/brand_export') }}" style="float: right;" ><input type="button" value="导出Excel" class="link_btn"/></a>
@endsection