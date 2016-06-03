@extends('cms.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">设计师信息列表</h2>
    <form action="/cms/designerList" id="baseInfoForm" method="post">
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
    <div>
        <p>总{{ $total }}条，合作商户{{ $cooperation }}条</p>
    </div>
    @foreach ($designers as $item)
        <div style="position: relative;float: left;margin-right: 20px; margin-bottom: 20px;">
            <div style="display: table; margin-bottom: 20px;">
                <a href="{{URL::action('CMSController@designer_info', ['id' => $item->designer_id]) }}">
                    @if (count($item->pictures) > 0)
                        <img src="{{$item->pictures[0]->url}}" width="200px" height="200px">
                    @else
                        <img src="http://image.weipai.cn/honglema/default.gif"  width="200px" height="200px">
                    @endif
                </a>
            </div>
            <div style="text-align: center;">
                <span>{{$item->username }}</span>
            </div>
        </div>
    @endforeach

</div>
<aside class="paging" style="clear:both;">
    <a href="{{ url('/cms/designer_export') }}" style="float: left;" >导出Excel</a>
    <a href="/cms/designer_create" style="float: left;margin-left: 10px;" >添加设计师</a>

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
    @elseif ($designers->currentPage() > 4 && $designers->currentPage() < $designers->lastPage() - 4)
    @for ($i = $designers->currentPage() - 4; $i <= $designers->currentPage() + 4; $i++)
    <a class="{{ ($designers->currentPage() == $i) ? ' active' : '' }}" href="{{ $designers->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($designers->currentPage() > 4)
    @for ($i = $designers->lastPage() - 8; $i <= $designers->lastPage(); $i++)
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
@endsection