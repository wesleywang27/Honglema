@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">网红信息列表</h2>
</div>
<table class="table">
    <tr>
        <th>网红ID</th>
        <th>网红昵称</th>
        <th>真实姓名</th>
        <th>性别</th>
        <th>地区</th>
        <th>年龄</th>
        <th>微信账号</th>
        <th>手机号码</th>
        <th>操作</th>
    </tr>
    @foreach ($stars as $star)
    <tr>
        <td style="width:80px;text-align:center">{{ $star->star_id }}</td>
        <td style="width:180px;text-align:center">{{ $star->name }}</td>
        <td style="width:180px;text-align:center">{{ $star->real_name }}</td>
        <td style="width:100px;text-align:center">
            @if($star->sex == 0)
            未知
            @elseif($star->sex == 1)
            男
            @else($star->sex == 2)
            女
            @endif
        </td>
        <td style="width:180px;text-align:center">{{ $star->location }}</td>
        <td style="width:100px;text-align:center">{{ $star->age }}</td>
        <td style="width:180px;text-align:center">{{ $star->wechat }}</td>
        <td style="width:180px;text-align:center">{{ $star->cellphone }}</td>
        <td style="width:180px;text-align:center">
            <a href="{{URL::action('StarController@starInfo', ['id' => $star->star_id]) }}"><input type="button" value="查看" class="link_btn"/></a>
            <a href="{{URL::action('StarController@starDelete', ['id' => $star->star_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a href="#" style="float: left;">添加网红</a>

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
    <a class="{{ ($stars->currentPage() == $stars->lastPage()) ? ' disabled' : '' }}" href="#">后一页</a>
    @else
    <a class="{{ ($stars->currentPage() == $stars->lastPage()) ? ' disabled' : '' }}"
       href="{{ $stars->url($stars->currentPage()+1) }}">后一页</a>
    @endif

    <a class="{{ ($stars->currentPage() == $stars->lastPage()) ? ' disabled' : '' }}"
       href="{{ $stars->url($stars->lastPage()) }}">尾页</a>
</aside>

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection