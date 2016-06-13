@extends('star.star')
@section('back', '&nbsp;')
@section('title', $act_name)

@if($type=='contention')
@section('square_header')
    <p class="order_status">商家选择中....</p>
    <img class="order_pic" src="/images/{{$pic}}">
    <div class="order_info">
    <span class="order_name">{{$act_name}}</span>
        <span class="order_price">{{$act_price}}</span>
    </div>
    <div class="order_detail">
        <div class="order_date">活动时间:{{$act_date}}</div>
        <div class="order_require">活动要求:{{$act_require}}</div>
        <div class="order_items">商品信息:{{$item_info}}</div>
    </div>
    @endsection
@endif

@if($type=='process')
@section('square_header')
    <img class="order_pic" src="/images/{{$pic}}">
    <div class="order_info">
        <span class="order_name">{{$act_name}}</span>
        <span class="order_price">{{$act_price}}</span>
    </div>
    <div class="order_detail">
        <div class="order_date">
            <div style="width:30%;">活动时间:</div>
            <div style="width:70%;">
            @foreach($act_schedule as $act_date)
               <div> {{$act_date[0]}} {!!$act_date[0]<date('Y-m-d H:i',time())?'<button>提交</button>':'<button>未开始</button>'!!}</div>
             @endforeach
            </div>
        </div>
        <div class="order_require">活动要求:{{$act_require}}</div>
        <div class="order_items">商品信息:{{$item_info}}</div>
    </div>

@endsection
@endif

@if($type=='comment')
@section('square_header')
    <div id="" class="item">
        <div class="shop">
            <a href="#">{{$company_name}} </a>
        </div>
        <div class="item_detail">
            <div class="item_pic"><img src="/images/adidas.jpg"></div>
            <div class="item_info">
                <div class="info_font1">{{$act_name}}</div>
            </div>
            <div class="price">
                <div class="price_font">{{$act_price}}</div>
            </div>
            <a href="/star/show_process"> </a>
        </div>
    </div>
    <div class="comment">
        <textarea></textarea>
        <button>提交</button>
    </div>
@endsection
    @endif