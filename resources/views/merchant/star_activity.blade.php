@extends('star.star')

@section('title', '活动广场')

@section('nav1')
    <a href="#">价格排序</a><i class="icon-long-arrow-up"></i>
@endsection
@section('nav2')
    <a href="#">即将开始</a>
@endsection
@section('nav3')
    <a href="#">火热推荐</a>
@endsection

@section('context')
    @@parent
    <div id="" class="item">
        <div class="shop">
            <a href="#">Adidas3 ></a>
        </div>
        <div class="item_detail">
            <div class="item_pic"><img src=""></div>
            <div class="item_info">
                <div class="info_font1">阿迪达斯推广活动</div>
                <div class="info_font2">倒计时 00:10:59</div>
            </div>
            <div class="price">
                <div class="price_font">￥5W</div>
                <button>抢单</button>
            </div>
        </div>
    </div>

    <div id="" class="item">
        <div class="shop">
            <a href="#">Adidas2 ></a>
        </div>
        <div class="item_detail">
            <div class="item_pic"><img src=""></div>
            <div class="item_info">
                <div class="info_font1">阿迪达斯推广活动</div>
                <div class="info_font2">倒计时 00:10:59</div>
            </div>
            <div class="price">
                <div class="price_font">￥5W</div>
                <button>抢单</button>
            </div>
        </div>
    </div>

    <div id="" class="item">
        <div class="shop">
            <a href="#">Adidas2 ></a>
        </div>
        <div class="item_detail">
            <div class="item_pic"><img src=""></div>
            <div class="item_info">
                <div class="info_font1">阿迪达斯推广活动</div>
                <div class="info_font2">倒计时 00:10:59</div>
            </div>
            <div class="price">
                <div class="price_font">￥5W</div>
                <button>抢单</button>
            </div>
        </div>
    </div>
@endsection

    @section('footer')
@@parent
@endsection
