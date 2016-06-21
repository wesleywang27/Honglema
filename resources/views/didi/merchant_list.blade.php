@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">商家信息列表</h2>
</div>
<table class="table">
    <tr>
        <th>商家ID</th>
        <th>商家名称</th>
        <th>微信账号</th>
        <th>手机号码</th>
        <th>操作</th>
    </tr>
    @foreach ($merchants as $merchant)
    <tr>
        <td style="width:80px;text-align:center">{{ $merchant->merchant_id }}</td>
        <td style="width:180px;text-align:center">{{ $merchant->name }}</td>
        <td style="width:180px;text-align:center">{{ $merchant->wechat }}</td>
        <td style="width:180px;text-align:center">{{ $merchant->cellphone }}</td>
        <td style="width:180px;text-align:center">
            <a href="{{URL::action('MerchantController@merchantInfo', ['id' => $merchant->merchant_id]) }}" ><input type="button" value="查看" class="link_btn"/></a>
            <a href="{{URL::action('ActivityController@activityCreate', ['merchant_id' => $merchant->merchant_id]) }}" ><input type="button" value="发布" class="link_btn"/></a>
            <a href="{{URL::action('MerchantController@merchantDelete', ['id' => $merchant->merchant_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a href="/didi/MerchantCreate" style="float: left;" >添加商家</a>

    <a class="{{ ($merchants->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $merchants->url(1) }}">首页</a>

    @if ($merchants->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $merchants->url($merchants->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($merchants->lastPage() <= 9)
    @for ($i = 1; $i <= $merchants->lastPage(); $i++)
    <a class="{{ ($merchants->currentPage() == $i) ? ' active' : '' }}" href="{{ $merchants->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($merchants->currentPage() > 4)
    @for ($i = $merchants->currentPage() - 4; $i <= $merchants->currentPage() + 4; $i++)
    <a class="{{ ($merchants->currentPage() == $i) ? ' active' : '' }}" href="{{ $merchants->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($merchants->currentPage() == $i) ? ' active' : '' }}" href="{{ $merchants->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($merchants->currentPage() == $merchants->lastPage())
    <a class="{{ ($merchants->currentPage() == $merchants->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
    @else
    <a class="{{ ($merchants->currentPage() == $merchants->lastPage()) ? ' disabled' : '' }}" href="{{ $merchants->url($merchants->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($merchants->currentPage() == $merchants->lastPage()) ? ' disabled' : '' }}" href="{{ $merchants->url($merchants->lastPage()) }}" >尾页</a>
</aside>

@endsection