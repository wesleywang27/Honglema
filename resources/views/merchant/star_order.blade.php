@extends('star.star')

@section('title', '活动订单')

@section('nav1')
    <a href="#">抢单中</a></i>
@endsection
@section('nav2')
    <a href="#">进行中</a>
@endsection
@section('nav3')
    <a href="#">待评价</a>
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
                <button>查看</button>
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
                <button>查看</button>
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
                <button>查看</button>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @@parent
@endsection


