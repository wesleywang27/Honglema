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
      <span class="icon icon-left pull-left" onclick="window.location.href='/Merchant/activityOrder'"></span>
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
                        <div class="item-title">{{ $detail['title']}}</div>
                        <div id="f_merchant_name" class="item-after">¥&nbsp;{{$detail['total_price']}}</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <?php
      $task = \App\Models\Task::where('activity_id',$detail['activity_id'])->first();

      if($detail['activity_status']==0||$detail['activity_status']==1){
        $commentString = $detail['activity_status']==0 ? '待审核' : '抢单中';
      }else{

        if($detail['activity_status']==2){
          if($task['status']==1){
            $buttonString = '录入快递单号';
            $commentString = "待发货";
          }else{
            $buttonString = '查看快递单号';
            $commentString = "已发货";
          }
        }else if($detail['activity_status']==3){
           $buttonString = '查看快递单号';
           $commentString = $task['status'] == 3 ? '待评价' : '已评价';
        }
      
    ?>
    <div class="content-block content-block-my content-no-margin">
      <div class="content-block content-block-my">
        <div class="list-block content-no-margin">
          <ul>
              <li>
                  <div class="item-content">
                      <div class="item-inner">
                          <div class="item-title label">查看物流</div>
                          <div class="item-input">
                              <button class="button pull-right" style="margin-left:1rem;width:5rem" onclick="window.location.href='/Merchant/activityOrder/logistic/{{$detail['activity_id']}}'">{{$buttonString}}</button>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
    <div class="content-block content-block-my content-no-margin">
      <div class="content-block content-block-my">
        <div class="list-block content-no-margin">
          <ul>
              <li>
                  <div class="item-content">
                      <div class="item-inner">
                          <div class="item-title label">活动时间</div>
                          <div class="item-input">
                              <p>{{$detail['time_within']}}</p>
                          </div>
                          <div class="item-input">
                              <button class="button pull-right" style="margin-left:1rem;width:5rem" <?php if($detail['activity_status']==3){ ?>onclick="window.location.href='/Merchant/activityOrder/comment/{{$task['task_id']}}'"<?php } ?>>{{$commentString}}</button>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
        </div>
        <div class="list-block content-no-margin">
          <ul>
              <li>
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
      </div>
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
            <ul>
          @foreach ($commodity_ids as $cid)
          <?php 
             $commodity = App\Models\Commodity::where('commodity_id',$cid['commodity_id'])->first();
             
          ?>
              <li onclick="window.location.href='<?php echo (strpos($commodity['url'],'http') === 0) ? $commodity['url'] : 'http://'.$commodity['url']; ?>'">
                <div class="item-content">
                  <div class="item-inner">
                    <div class="item-title">{{$commodity['name']}}</div>
                  </div>
                </div>
              </li>
          @endforeach
            </ul>
          </div>
      </div>
    </div>

    <?php 
      //获取该活动下task的所有已抢单网红
      if($detail['activity_status'] != 0){
      // $star = array();
         
      $flag = 0;
      switch ($detail['activity_status']) {
        case '1':
          $order = \App\Models\Order::where('task_id',$task['task_id'])->where('status',1)->get();
          $star_ids = array();
          foreach ($order as $key => $value) {
            array_push($star_ids, $value['star_id']);
          }
          $star = \App\Models\Star::whereIn('star_id',$star_ids)->get();
          $starString = '已报名&nbsp;'.count($star);
          break;

        case '2':
          $order = \App\Models\Order::where('task_id',$task['task_id'])->where('status',2)->first();
          $star = \App\Models\Star::where('star_id',$order['star_id'])->get();
          $starString = '合作中';
          break;

        case '3':
          $order = \App\Models\Order::where('task_id',$task['task_id'])->where('status',2)->first();
          $star = \App\Models\Star::where('star_id',$order['star_id'])->get();
          $starString = '合作';
          break;

        default:
          # code...
          break;
      }
  ?>
  <div class="content-block content-block-my content-no-margin">
        <div class="content-block content-block-my">
          <div class="list-block content-no-margin" style="margin-top: -1rem;">
            <ul>
              <li>
                  <div class="item-content">
                      <div class="item-inner">
                          <div class="item-title">{{$starString}}</div>
                      </div>
                  </div>
              </li>
            </ul>
          </div>
          <div class="list-block media-list content-no-margin">
          @foreach ($star as $svo)
          <?php 
            $flag ++;
          ?>
              <ul>
              <li>
                <a href="/Merchant/activityOrder/starDetail/{{$svo['star_id']}}" class="blackfont item-content">
                  <div class="item-media">{{$flag}}&nbsp;&nbsp;&nbsp;</div>
                  <div class="item-media"><img src="{{$svo['avatar']}}" style='width: 4rem;border-radius:50%'></div>
                  <div class="item-inner">
                    <div style="margin-top: 1rem;">  
                      {{$svo['name']}}
                      <?php 
                        if($detail['activity_status'] != 2){
                      ?>
                      <button class="button pull-right button-fill button-danger" style="margin-left:1rem;width:4rem" onclick="setOrder({{$task['task_id']}},{{$svo['star_id']}},2)">合作</button>
                      <?php 
                        }
                      ?>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          @endforeach
          </div>
      </div>
    </div>
  <?php
    }

  ?>
  </div>

  <script>
  function setOrder(task_id,star_id,status){
    $.ajax({
        url: "/Merchant/activityOrder/setOrder",
        type: "POST",
        traditional: true,
        dataType: "JSON",
        data: {
            "task_id"   : task_id,
            "star_id"   : star_id,
            "order_status" : status
        },
        success: function(data) {
            $.toast("已和该网红合作!",1000);
            setTimeout(function(){
                location.href="/Merchant/activityOrder";
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