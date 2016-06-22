@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">处理活动信息</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">抢单信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        
        <table class="table">
            <tr>
                <th>网红ID</th>
                <th>活动标题</th>
                <th>推广费用</th>
                <th>活动状态</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
            @foreach ($stars as $star)
            <tr>
                <td style="width:80px;text-align:center">{{ $star->star_id }}</td>
                <td style="width:180px;text-align:center">{{ $star->title }}</td>
                <td style="width:180px;text-align:center">{{ $star->total_price }}</td>
                <td style="width:180px;text-align:center">
                    @if ($star->star_status == 0)
                    待审核
                    @elseif ($star->star_status == 1)
                    抢单中
                    @elseif ($star->star_status == 2)
                    推广中
                    @elseif ($star->star_status == 3)
                    待评价
                    @elseif ($star->star_status == 4)
                    已结束
                    @endif
                </td>
                <td style="width:180px;text-align:center">{{ $star->created_at }}</td>
                <td style="width:180px;text-align:center">
                    <a href="#" ><input type="button" value="查看" class="link_btn"/></a>
                    <a href="#" ><input type="button" value="处理" class="link_btn"/></a>
                    <a href="#" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
                </td>
            </tr>
            @endforeach
        </table>
        <aside class="paging">
            <a class="{{ ($stars->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $stars->url(1) }}">首页</a>

            @if ($stars->currentPage() == 1)
            <a class="" href="#">前一页</a>
            @else
            <a class="" href="{{ $stars->url($stars->currentPage() - 1) }}">前一页</a>
            @endif

            @if ($stars->lastPage() <= 9)
            @for ($i = 1; $i <= $stars->lastPage(); $i++)
            <a class="{{ ($stars->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars->url($i) }}">{{ $i }}</a>
            @endfor
            @elseif ($stars->currentPage() > 4)
            @for ($i = $stars->currentPage() - 4; $i <= $stars->currentPage() + 4; $i++)
            <a class="{{ ($stars->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars->url($i) }}">{{ $i }}</a>
            @endfor
            @else
            @for ($i = 1; $i <= 9; $i++)
            <a class="{{ ($stars->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars->url($i) }}">{{ $i }}</a>
            @endfor
            @endif

            @if ($stars->currentPage() == $stars->lastPage())
            <a class="{{ ($stars->currentPage() == $stars->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
            @else
            <a class="{{ ($stars->currentPage() == $stars->lastPage()) ? ' disabled' : '' }}" href="{{ $stars->url($stars->currentPage()+1) }}" >后一页</a>
            @endif

            <a class="{{ ($stars->currentPage() == $stars->lastPage()) ? ' disabled' : '' }}" href="{{ $stars->url($stars->lastPage()) }}" >尾页</a>
        </aside>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection