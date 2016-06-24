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
      <a class="button button-link button-nav pull-left back" href="/star/activityList">
            <span class="icon icon-left"></span>
            返回
      </a>
      <h1 class='title'>订单详情</h1>
  </header>
  <div class="content">
    <div class="list-block content-no-margin">
        <ul>
            <li>
              <div valign="bottom" class="card-header color-white no-border no-padding" style="height:6rem">
                <img class='card-cover' style="height:100%" src="{{$detail['picture']}}" alt="">
              </div>
            </li>
        </ul>
        <ul>
        
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title" style="font-size:90%;">{{ $detail['title']}}</div>
                        <div id="f_merchant_name" class="item-after" style="font-size:80%;">¥&nbsp;{{$detail['total_price']}}</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label" style="font-size:80%;">活动时间</div>
                        <div class="item-input" style="font-size:80%; color:#666666">
                            <p>{{$detail['time_within']}}</p>
                        </div>
                    </div>
                </div>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label" style="font-size:80%;">活动要求</div>
                        <div class="item-input" style="font-size:80%; color:#666666">
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
                          <div class="item-title" style="font-size:80%;">商品信息</div>
                      </div>
                  </div>
              </li>
            </ul>
          </div>
          <div class="list-block media-list content-no-margin">
            <ul>
          @foreach ($commodity_ids as $cid)
          <?php 
             $commodity = App\Models\Commodity::where('commodity_id',$cid['commodity_id'])->first();
             
          ?>
              <li>
                <a href="<?php echo (strpos($commodity['url'],'http') === 0) ? $commodity['url'] : 'http://'.$commodity['url']; ?>" style="">
                <div class="item-content">
                  <div class="item-inner">
                    <div class="item-title" style="font-size:80%;">{{$commodity['name']}}</div>
                  </div>
                </div>
                </a>
              </li>
          @endforeach
            </ul>
          </div>
      </div>
    </div>
    <?php
      $task_id = App\Models\Task::where('activity_id',$detail['activity_id'])->first()['task_id'];
    ?>

    <?php 
      //$star_id = 1;
    // session_start();
      //$star_id = $_SESSION['star_id'];
    
      $star_id = $_SESSION['star_id'];
      $star = App\Models\Star::where('star_id',$star_id)->first();
      $order = App\Models\Order::where('star_id',$star_id)->where('task_id',$task_id)->first();
      if($order){
    ?>
    <p><a href="#" class="button button-fill"
      style="background-color:gray;border-radius:0;z-index:999;
      position:fixed; bottom:0; left:0; width:100%; height:1.7rem; line-height:1.7rem;
      font-size:110%; text-align:center; _position:absolute;
 _top: expression_r(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight); overflow:visible;">已抢单</a></p>
    <?php
      }else{
    ?> 
      <p><a href="#" class="button button-fill button-warning"
      style="border-radius:0;z-index:999; position:fixed; bottom:0;
      left:0; width:100%; height:1.7rem; line-height:1.7rem; font-size:110%;
      text-align:center; background-color:#ee5555; _position:absolute;
 _top: expression_r(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight); overflow:visible;" onclick="setOrder({{$task_id}})">抢单</a></p>
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
            if(data=="NotAuth"){
                $.toast("账号未通过授权",1000);
            }else{
            $.toast("抢单成功，请等待回复!",1000);
            setTimeout(function(){
                location.href="/star/activityList";
            },1000);}
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  }
  
  </script>
</body>
</html>