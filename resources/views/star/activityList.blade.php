<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>红了吗网红端（试用版）</title>
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
  	<h1 class='title'>活动广场</h1>
</header>
<div class="content" style="top: 2rem;">
    <div class="tabs">
      <div id="tab3" >
      <?php
  //     	echo "<pre>";
		// var_dump(count($list));die;
      ?>
      @foreach ($list as $vo)
      <?php
      	$merchant = App\Models\Merchant::where('merchant_id',$vo->merchant_id)->first();
      ?>
        <div class="content-block content-block-my content-no-margin">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1.3rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">{{$merchant['name']}}</div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				        <a href="/star/activityDetail/{{$vo['activity_id']}}" class="blackfont item-content">
				          <div class="item-media" style="margin-left:-0.3rem; margin-right:0"><img src="{{$vo['picture']}}" style='width: 6rem;'></div>
				          <div class="item-inner" style="background-color:#f0f0f0; margin: 0.4rem">
				            <div class="item-title" style="text-align: center;height:50%">{{$vo['title']}}</div>
				            <div class="item-subtitle" style="text-align: center;height:50%">¥&nbsp;{{$vo['total_price']}}</div>
				            <div class="item-title"
style="background-color:#ee5555; color=#ffffff; text-align:center; margin-left:0; margin-right:0; margin-bottom:0">马上抢单</div>
				          </div>
				        </a>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
      	@endforeach
      </div>
    </div>
  </div>
   @include("star.star_footer")
</div>

</body>
</html>