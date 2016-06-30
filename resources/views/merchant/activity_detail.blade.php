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
                <img class='card-cover' style="height:100%" src="{{$detail['banner_picture']}}" alt="">
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
          @foreach ($data['commodity_ids'] as $cid)
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


    <div class="content-block content-block-my content-no-margin">
        <div class="content-block content-block-my">
          <div class="list-block content-no-margin" style="margin-top: -1rem;">
            <ul>
              <li>
                  <div class="item-content">
                      <div class="item-inner">
                          <div class="item-title">任务列表</div>
                      </div>
                  </div>
              </li>
            </ul>
          </div>
          <div class="list-block media-list content-no-margin">

          <?php if(count($data['doing_order'])==0){ ?>
            <ul>
              <li>
                <a href="#" class="blackfont item-content">
                  <div class="item-media">&nbsp;&nbsp;&nbsp;</div>
                  <div class="item-media"></div>
                  <div class="item-inner">
                    <div style="margin-top: 1rem;">  
                    </div>
                  </div>
                </a>
              </li>
            </ul>

          <?php  }else{ ?>

          <?php $count = 0 ?>
            @foreach ($data['doing_order'] as $doing_vo)
          <?php 
            $count ++;
            $task = \App\Models\Task::where('task_id',$doing_vo['task_id'])->first();
            switch ($task['status']) {
              case '1':
                $buttonString = '待发货';
                $buttonColor = '#ec9108';
                break;

              case '2':
                $buttonString = '推广中';
                $buttonColor = '#5aca21';
                break;

              case '3':
                $buttonString = '待评价';
                $buttonColor = '#ec9108';
                break;

              case '4':
                $buttonString = '待打款';
                $buttonColor = '#ec9108';
                break;
              
              default:
                $buttonString = '';
                $buttonColor = '';
                break;
            }
            $star = \App\Models\Star::where('star_id',$doing_vo['star_id'])->first();
          ?>
              <ul>
              <li>
                <a onclick="window.location.href='#'" class="blackfont item-content">
                  <div class="item-media">任务{{$count}}&nbsp;&nbsp;&nbsp;</div>
                  <div class="item-media"><img src="{{$star['avatar']}}" style='width: 4rem;border-radius:50%'></div>
                  <div class="item-inner">
                    <div style="margin-top: 1rem;">  
                      {{$star['name']}}
                      <button class="button pull-right button-fill" style="margin-left:1rem;width:4rem;background-color:{{$buttonColor}}" onclick="taskDetail({{$task['task_id']}})">{{$buttonString}}</button>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          @endforeach

          <?php } ?>
          </div>
      </div>
    </div>

    <?php 
      //获取该活动下task的所有已抢单网红
      if($detail['confirm_num'] < $detail['task_num']){
        $flag = 0;
  ?>
  <div class="content-block content-block-my content-no-margin">
        <div class="content-block content-block-my">
          <div class="list-block content-no-margin" style="margin-top: -1rem;">
            <ul>
              <li>
                  <div class="item-content">
                      <div class="item-inner">
                          <div class="item-title">待合作</div>
                      </div>
                  </div>
              </li>
            </ul>
          </div>
          <div class="list-block media-list content-no-margin">
          <?php if(count($data['waiting_order']) > 0){ ?>
          @foreach ($data['waiting_order'] as $waiting_vo)
          <?php 
            $flag ++;
            $star = \App\Models\Star::where('star_id',$waiting_vo['star_id'])->first();
          ?>
              <ul>
              <li>
                <a href="/Merchant/activityOrder/starDetail/{{$star['star_id']}}/{{$detail['activity_id']}}" class="blackfont item-content">
                  <div class="item-media">{{$flag}}&nbsp;&nbsp;&nbsp;</div>
                  <div class="item-media"><img src="{{$star['avatar']}}" style='width: 4rem;border-radius:50%'></div>
                  <div class="item-inner">
                    <div style="margin-top: 1rem;">  
                      {{$star['name']}}
                      <button class="button pull-right button-fill button-danger" style="margin-left:1rem;width:4rem" onclick="setOrder({{$detail['activity_id']}},{{$star['star_id']}},2);return false;">合作</button>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          @endforeach
          <?php
            }
          ?>
          </div>
      </div>
    </div>
  <?php
    }
  ?>
  </div>

  <script>
  function setOrder(activity_id,star_id,status){
    $.ajax({
        url: "/Merchant/activityOrder/setOrder",
        type: "POST",
        traditional: true,
        dataType: "JSON",
        data: {
            "activity_id"   : activity_id,
            "star_id"   : star_id,
            "order_status" : status
        },
        success: function(data) {
            $.toast("合作成功!",1000);
            setTimeout(function(){
                location.reload();
            },1000);
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  }
  
  function taskDetail(task_id){
    window.location.href = "/Merchant/activityOrder/taskDetail/"+task_id;
  }

  </script>
</body>
</html>