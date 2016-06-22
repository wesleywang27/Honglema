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
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">活动时间</div>
                        <div class="item-input">
                            <p>{{$detail['time_within']}}</p>
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
      $task_id = \App\Models\Task::where('activity_id',$detail['activity_id'])->first()['task_id'];
      switch ($detail['activity_status']) {
        case '1':
          $order = \App\Models\Order::where('task_id',$task_id)->where('status',1)->get();
          $star_ids = array();
          foreach ($order as $key => $value) {
            array_push($star_ids, $value['star_id']);
          }
          $star = \App\Models\Star::whereIn('star_id',$star_ids);
          $starString = '已报名&nbsp;'.count($star);;
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
            <ul>
              <li>
                <a href="/Merchant/activityOrder/activityDetail/1" class="blackfont item-content">
                  <div class="item-media"><img src="http://img4.imgtn.bdimg.com/it/u=3609012104,1449130698&fm=11&gp=0.jpg" style='width: 4rem;'></div>
                  <div class="item-inner">
                    <div class="item-title-row">
                      <div class="item-subtitle">小丸子</div>
                      <div class="item-after">¥1234</div>
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
          @foreach ($star as $svo)
              
          @endforeach
            
      </div>
    </div>
  <?php
    }

  ?>
  </div>

  <script>
  
  
  </script>
</body>
</html>