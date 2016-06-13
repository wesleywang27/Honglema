@extends('star.star')
@section('back', '&nbsp;')
@section('title', '活动广场')

@section('nav')
    <div id="" class="nav">
    <div class="cell">  <a href="#">价格排序</a><i class="icon-long-arrow-up"></i></div>
    <div class="cell">  <a href="#">即将开始</a></div>
    <div class="cell">  <a href="#">火热推荐</a></div>
        </div>
@endsection

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
                    <button>抢单</button>
                </div>
            </div>
        </div>
    @endforeach



@endsection

    @section('footer')
@@parent
@endsection
