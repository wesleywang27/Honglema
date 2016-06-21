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
  <h1 class='title'>红了吗商家端</h1>
  <button class="button pull-right" onclick="window.location.href='/Merchant/activityOrder/addOrder'">
    新建
  </button>
</header>
<div class="content">
  <div class="buttons-tab">
    <a href="#tab1" class="tab-link active button">已发布</a>
    <a href="#tab2" class="tab-link button">已确定</a>
    <a href="#tab3" class="tab-link button">评价并付款</a>
  </div>
 
    <div class="tabs">
      <div id="tab1" class="tab active">
      <?php 
      	$merchant = App\Models\Merchant::where('merchant_id',$_SESSION['merchant_id'])->first();
      ?>
      @foreach ($list as $vo)
      <?php

      	$commodity_id = App\Models\ActivityCommodityList::where('activity_id',$vo['activity_id'])->first()['commodity_id'];
		$commodity_pic = App\Models\CommodityPicture::where('commodity_id',$commodity_id)->first();
      ?>
        <div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">{{$merchant['name']}}></div>
					                <div id="f_address" class="item-after">抢单中</div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				        <a href="/Merchant/activityOrder/activityDetail/1" class="blackfont item-content">
				          <div class="item-media"><img src="{{$commodity_pic['url']}}" style='width: 4rem;'></div>
				          <div class="item-inner">
				            <div class="item-title-row">
				              <div class="item-subtitle">{{$vo['title']}}</div>
				              <div class="item-after">¥{{$vo['total_price']}}</div>
				            </div>
				            <div class="item-subtitle">&nbsp;</div>
				           <div class="item-subtitle">
				            	<button class="button pull-right button-fill button-danger" style="margin-left:1rem;width:4rem">已抢单1/2</button>
				            	<button class="button pull-right" style="margin-left:1rem;width:4rem">再来一单</button>
				            </div>
				          </div>
				        </a>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
      @endforeach
      </div>
      <div id="tab2" class="tab">
      	<div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">韩束用品官方店 ></div>
					                <div id="f_address" class="item-after">录入物流</div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				        <div class="item-content">
				          <div class="item-media"><img src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg" style='width: 4rem;'></div>
				          <div class="item-inner">
				            <div class="item-title-row">
				              <div class="item-subtitle">韩束保湿乳推广活动</div>
				              <div class="item-after">$15</div>
				            </div>
				            <div class="item-subtitle">&nbsp;</div>
				           <div class="item-subtitle">
				            	<button class="button pull-right button-fill button-danger" style="margin-left:1rem;width:5rem">录入物流信息</button>
				            </div>
				          </div>
				        </div>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
        <div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">韩束用品官方店 ></div>
					                <div id="f_address" class="item-after">等待直播中</div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				        <div class="item-content">
				          <div class="item-media"><img src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg" style='width: 4rem;'></div>
				          <div class="item-inner">
				            <div class="item-title-row">
				              <div class="item-subtitle">韩束保湿乳推广活动</div>
				              <div class="item-after">$15</div>
				            </div>
				            <div class="item-subtitle">&nbsp;</div>
				           <div class="item-subtitle">
				            	<button class="button pull-right button-fill button-danger" style="margin-left:1rem;width:4rem">查看物流</button>
				            </div>
				          </div>
				        </div>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
      </div>
      <div id="tab3" class="tab">
        <div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">韩束用品官方店 ></div>
					                <div id="f_address" class="item-after">待评价</div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				        <div class="item-content">
				          <div class="item-media"><img src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg" style='width: 4rem;'></div>
				          <div class="item-inner">
				            <div class="item-title-row">
				              <div class="item-subtitle">韩束保湿乳推广活动</div>
				              <div class="item-after">$15</div>
				            </div>
				            <div class="item-subtitle">&nbsp;</div>
				           <div class="item-subtitle">
				            	<button class="button pull-right button-fill button-danger" style="margin-left:1rem;width:4rem">去评价</button>
				            </div>
				          </div>
				        </div>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
      	<div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">韩束用品官方店 ></div>
					                <div id="f_address" class="item-after">已评价</div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				        <div class="item-content">
				          <div class="item-media"><img src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg" style='width: 4rem;'></div>
				          <div class="item-inner">
				            <div class="item-title-row">
				              <div class="item-subtitle">韩束保湿乳推广活动</div>
				              <div class="item-after">$15</div>
				            </div>
				            <div class="item-subtitle">&nbsp;</div>
				           <div class="item-subtitle">
				            	<button class="button pull-right button-fill button-danger" style="margin-left:1rem;width:4rem">查看评价</button>
				            </div>
				          </div>
				        </div>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
      </div>
    </div>
  </div>
  <nav class="bar bar-tab">
        <a class="tab-item external" href="#">
            <span class="icon icon-home"></span>
            <span class="tab-label">热门活动</span>
        </a>
        <a class="tab-item external active" href="/Merchant/activityOrder">
            <span class="icon icon-star"></span>
            <span class="tab-label">活动订单</span>
        </a>
        <a class="tab-item external" href="/Merchant/user">
            <span class="icon icon-settings"></span>
            <span class="tab-label">我的</span>
        </a>
    </nav>
</div>
</body>
</html>