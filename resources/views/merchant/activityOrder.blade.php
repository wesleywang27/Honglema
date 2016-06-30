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
<?php 
	$merchant = App\Models\Merchant::where('merchant_id',$_SESSION['merchant_id'])->first();
?>
<header class="bar bar-nav">
  <h1 class='title'>红了吗商家端</h1>
  <button class="button pull-right"  <?php if($merchant['status']!=1){ ?> onclick="javascript:alert('您的信息仍在审核中，不能创建活动');" <?php }else{ ?>onclick="window.location.href='/Merchant/activityOrder/addActivity'" <?php } ?>>
    新建
  </button>
</header>
<div class="content" style="bottom:2.5rem">
  <div class="buttons-tab">
    <a href="#tab1" class="tab-link active button">未审核</a>
    <a href="#tab2" class="tab-link button">进行中</a>
    <a href="#tab3" class="tab-link button">已结束</a>
  </div>
 
    <div class="tabs">
      <div id="tab1" class="tab active">
      @foreach ($list as $vo)
      <?php
      	if($vo['activity_status'] == 0){
      ?>
        <div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">{{$merchant['name']}}></div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				      <div class="item-content" onclick="window.location.href='/Merchant/activityOrder/activityDetail/{{$vo['activity_id']}}'">
				          <div class="item-media"><img src="{{$vo['picture']}}" style='width: 4rem;'></div>
				          <div class="item-inner">
				            <div class="item-title-row">
				              <div class="item-subtitle">{{$vo['title']}}</div>
				              <div class="item-after">¥&nbsp;{{$vo['total_price']}}</div>
				            </div>
				            <div class="item-subtitle">&nbsp;</div>
				           <div class="item-subtitle">
				            </div>
				          </div>
				        </div>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
      <?php } ?>
      @endforeach
      </div>
      <div id="tab2" class="tab">
      @foreach ($list as $vo)
      <?php
      	if($vo['activity_status'] == 1){
      ?>
      	<div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">{{$merchant['name']}}></div>
					                <div id="f_address" class="item-after"></div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				      	<!-- <a href="/Merchant/activityOrder/activityDetail/{{$vo['activity_id']}}" class="blackfont item-content">  -->
				        <div class="item-content" onclick="window.location.href='/Merchant/activityOrder/activityDetail/{{$vo['activity_id']}}'">
				          <div class="item-media"><img src="{{$vo['picture']}}" style='width: 4rem;'></div>
				          <div class="item-inner">
				            <div class="item-title-row">
				              <div class="item-subtitle">{{$vo['title']}}</div>
				              <div class="item-after">¥&nbsp;{{$vo['total_price']}}</div>
				            </div>
				            <div class="item-subtitle">&nbsp;</div>
				           <div class="item-subtitle">
				            </div>
				          </div>
				        </div>
				        <!-- </a> -->
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
        <?php } ?>
      @endforeach
      </div>
      <div id="tab3" class="tab">
        @foreach ($list as $vo)
      <?php
      	if($vo['activity_status'] == 2){
      ?>
      	<div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">{{$merchant['name']}}></div>
					                <div id="f_address" class="item-after">已结束</div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				        <div class="item-content" onclick="window.location.href='/Merchant/activityOrder/activityDetail/{{$vo['activity_id']}}'">
				          <div class="item-media"><img src="{{$vo['picture']}}" style='width: 4rem;'></div>
				          <div class="item-inner">
				            <div class="item-title-row">
				              <div class="item-subtitle">{{$vo['title']}}</div>
				              <div class="item-after">¥&nbsp;{{$vo['total_price']}}</div>
				            </div>
				            <div class="item-subtitle">&nbsp;</div>
				           <div class="item-subtitle">
				            	<button class="button pull-right button-fill" style="margin-left:1rem;width:5rem;background:#ec9108">查看详情</button>
				            </div>
				          </div>
				        </div>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
        <?php } ?>
      @endforeach
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
</body>
</html>