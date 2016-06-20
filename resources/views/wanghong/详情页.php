<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{URL::asset('css/sm.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/weui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sm-extend.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/merchant/myStyle.css')}}">
    <script type='text/javascript' src="{{URL::asset('js/zepto.min.js')}}" charset='utf-8'></script>
	<script type='text/javascript' src="{{URL::asset('js/sm.min.js')}}" charset='utf-8'></script>
	<script type='text/javascript' src="{{URL::asset('js/sm-extend.min.js')}}" charset='utf-8'></script>
</head>
<body>
  <header class="bar bar-nav">
      <h1 class='title'>订单详情</h1>
      <span class="icon icon-left pull-left" onclick="history.go(-1)"></span>
  </header>
  <div class="content">
    <div class="list-block content-no-margin">
        <ul>
            <li>
              <div valign="bottom" class="card-header color-white no-border no-padding" style="height:6rem">
                <img class='card-cover' style="height:100%" src="//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg" alt="">
              </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title">韩束保湿乳推广活动</div>
                        <div id="f_merchant_name" class="item-after">$5W</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">活动时间</div>
                        <div class="item-input">
                            <p>收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日</p>
                        </div>
                    </div>
                </div>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">活动要求</div>
                        <div class="item-input">
                            <p>收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>


    </div>
    <div class="list-block">
      <ul>
          <li>
              <div class="item-content">
                  <div class="item-inner">
                        <div class="item-title label">商品信息</div>
                         <div class="item-input">
                            <p>收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日收货后1～3日</p>
                        </div>
                  </div>
              </div>
          </li>
      </ul>
    </div>
    <p><a href="#" class="button button-fill button-warning">抢单</a></p>

  </div>
</body>
</html>