@extends('cms.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">档口信息列表</h2>
    <form action="/cms/stallList" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right; margin-top: 8px;" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch"
               @if ($name != 'all')
               value="{{ $name }}"
               @endif
               placeholder="按姓名查找"/>
    </form>
</div>
<div style="margin-left: 100px; margin-top: 20px;width: 1000px;">
    <div style="margin-bottom: 20px;">
        <p>总{{ $total }}条，合作商户{{ $cooperation }}条</p>
    </div>
    @foreach ($stalls as $item)
        <div style="position: relative;float: left;margin-right: 20px; margin-bottom: 20px;">
            <div style="display: table; margin-bottom: 20px;">
                <a href="{{URL::action('CMSController@stall_info', ['id' => $item->stall_id]) }}">
                    @if (count($item->pictures) > 0)
                        <img src="{{$item->pictures[0]->url}}" width="200px" height="200px">
                    @else
                        <img src="http://image.weipai.cn/honglema/default.gif"  width="200px" height="200px">
                    @endif
                </a>
            </div>
            <div style="text-align: center;">
                <span>{{$item->stallName }}</span>
            </div>
        </div>
    @endforeach

</div>
<aside class="paging" style="clear:both;">
    <a href="{{ url('/cms/stall_export') }}" style="float: left;" >导出Excel</a>
    <a href="/cms/stall_create" style="float: left;margin-left: 10px;" >添加档口</a>

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
    @elseif ($stalls->currentPage() > 4 && $stalls->currentPage() < $stalls->lastPage() - 4)
    @for ($i = $stalls->currentPage() - 4; $i <= $stalls->currentPage() + 4; $i++)
    <a class="{{ ($stalls->currentPage() == $i) ? ' active' : '' }}" href="{{ $stalls->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($stalls->currentPage() > 4)
    @for ($i = $stalls->lastPage() - 8; $i <= $stalls->lastPage(); $i++)
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