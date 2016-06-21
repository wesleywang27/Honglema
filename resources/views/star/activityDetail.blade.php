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
      <span class="icon icon-left pull-left" onclick="window.location.href='/star/activityList'"></span>
  </header>
  <?php

        $commodity_id = App\Models\ActivityCommodityList::where('activity_id',$detail['activity_id'])->first()['commodity_id'];
        $commodity_pic = App\Models\CommodityPicture::where('commodity_id',$commodity_id)->first();
  ?>
  <div class="content">
    <div class="list-block content-no-margin">
        <ul>
            <li>
              <div valign="bottom" class="card-header color-white no-border no-padding" style="height:6rem">
                <img class='card-cover' style="height:100%" src="{{$commodity_pic['url']}}" alt="">
              </div>
            </li>
        </ul>
        <ul>
        
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title">{{ $detail['title']}}</div>
                        <div id="f_merchant_name" class="item-after">${{$detail['total_price']}}</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">活动时间</div>
                        <div class="item-input">
                            <p>{{$detail['time_within']}}</p>
                        </div>
                    </div>
                </div>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">活动要求</div>
                        <div class="item-input">
                            <p>{{$detail['claim']}}</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
  
    </div>
    <div class="content-block content-block-my content-no-margin">
        <div class="content-block content-block-my">
          <div class="list-block content-no-margin" style="margin-top: -1rem;">
            <ul>
              <li>
                  <div class="item-content">
                      <div class="item-inner">
                          <div class="item-title">商品信息</div>
                      </div>
                  </div>
              </li>
            </ul>
          </div>
          <div class="list-block media-list content-no-margin">
          @foreach ($commodity_ids as $cid)
          <?php 
             $commodity = App\Models\Commodity::where('commodity_id',$cid['commodity_id'])->first();
             $title_pic = App\Models\CommodityPicture::where('commodity_id',$cid['commodity_id'])->first()['url'];
          ?>
          
            <ul>
              <li>
                <a href="#" class="blackfont item-content">
                  <div class="item-media"><img src="{{$title_pic}}" style='width: 4rem;'></div>
                  <div class="item-inner">
                    <div class="item-title-row">
                      <div class="item-subtitle">{{$commodity['name']}}</div>
                    </div>
                    <div class="item-subtitle">&nbsp;</div>
                    <div class="item-text">{{$commodity['introduction']}}</div>
                  </div>
                </a>
              </li>
            </ul>
          
          @endforeach
          </div>
      </div>
    </div>
    <?php
      $task_id = App\Models\Task::where('activity_id',$detail['activity_id'])->first()['task_id'];
    ?>

    <?php 
      //$star_id = 1;
      $star_id = $_SESSION['star_id'];
      $order = App\Models\Order::where('star_id',$star_id)->where('task_id',$task_id)->first();
      if($order){
    ?>
    <p><a href="#" class="button button-fill" style="background-color:gray;border-radius:0">已抢单</a></p>
    <?php
      }else{
    ?> 
     <p><a href="#" class="button button-fill button-warning" style="border-radius:0" onclick="setOrder({{$task_id}})">抢单</a></p>
    <?php
      }
    ?>

  </div>
  <script>
  function setOrder(id){
      $.ajax({
        url: "/star/setOrder",
        type: "POST",
        traditional: true,
        dataType: "JSON",
        data: {
            "task_id"   : id
        },
        success: function(data) {
            $.toast("抢单成功，请等待回复!",1000);
            setTimeout(function(){
                location.href="/star/activityList";
            },1000);
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  }
  
  </script>
</body>
</html>