@extends('star.star')
@section('back', '&nbsp;')
@section('title', '活动订单')
@section('header_handle', '<a href="/star/all_order">全部</a>')
@section('nav')
    <div id="" class="nav">
        <div class="cell">  <a href="contention">抢单中</a></div>
        <div class="cell">  <a href="process">进行中</a></div>
        <div class="cell">  <a href="comment">待评价</a></div>
    </div>
@endsection
@if($type=='contention')
@section('context')
    @foreach($items as $item)
        <div id="" class="item">
            <div class="shop">
                <a href="#">{{$item[0]}} </a>
            </div>
            <div class="item_detail">
                <div class="item_pic"><img src="/images/{{$item[4]}}"></div>
                <div class="item_info">
                    <div class="info_font1">{{$item[1]}}</div>
                    <div class="info_font2">{{$item[2]}}</div>
                </div>
                <div class="price">
                    <div class="price_font">{{$item[3]}}</div>
                    <a href="/star/show_contention"> <button>查看</button></a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@endif

@if($type=='process')
@section('context')
    @foreach($items as $item)
        <div id="" class="item">
            <div class="shop">
                <a href="#">{{$item[0]}} </a>
            </div>
            <div class="item_detail">
                <div class="item_pic"><img src="/images/{{$item[4]}}"></div>
                <div class="item_info">
                    <div class="info_font1">{{$item[1]}}</div>
                    <div class="info_font2">{{$item[2]}}</div>
                </div>
                <div class="price">
                    <div class="price_font">{{$item[3]}}</div>
                    <a href="/star/show_process"> <button>查看进度</button></a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@endif

@if($type=='comment')
@section('context')
    @foreach($items as $item)
        <div id="" class="item">
            <div class="shop">
                <a href="#">{{$item[0]}} </a>
            </div>
            <div class="item_detail">
                <div class="item_pic"><img src="/images/{{$item[4]}}"></div>
                <div class="item_info">
                    <div class="info_font1">{{$item[1]}}</div>
                    <div class="info_font2">{{$item[2]}}</div>
                </div>
                <div class="price">
                    <div class="price_font">{{$item[3]}}</div>
                    <a href="/star/show_comment"> <button>评论</button></a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@endif

@section('footer')
    @@parent
@endsection


