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
        <a class="button button-link button-nav pull-left back" onclick="history.go(-1)">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">直播评论</h1>
    </header>
    <div class="content" style="top: 2.2rem;">
        <div class="list-block content-no-margin">
        <ul>
            <li>
              <div valign="bottom" class="card-header color-white no-border no-padding" style="height:6rem">
              <?php 
                  $count = 0;
                  foreach ($taskPics as $key => $tp) {
                    $count++; 
              ?>
                  <div class="task_pic_div" style="height:4rem;width:25%;margin-top:1rem;margin-bottom:1rem;margin-left:4.5px;margin-right:4.5px">
                        <img style="height:100%;width:100%" src="{{$tp['url']}}" >
                  </div>
              <?php
                }
                if($count<4){
                    for($i = 0;$i < 4 - $count;$i ++){
                      //填充空图片，div中必须有4个图片！
              ?>
                  <div class="task_pic_div" style="height:4rem;width:25%;margin-top:1rem;margin-bottom:1rem;margin-left:4.5px;margin-right:4.5px">
                  </div>
              <?php

                    }
                }
              ?>
              </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">直播回看网址</div>
                        <div class="item-input">
                            <input readonly style="width: 85%;display:inline;" type="text" value="<?php echo $task_result['playback_url'] ? $task_result['playback_url'] : '暂无'; ?>">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">直播观看人数</div>
                        <div class="item-input">
                            <input readonly style="width: 85%;display:inline;" type="text" value="<?php echo $task_result['views'] ? $task_result['views'] : '暂无'; ?>">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">直播时长</div>
                        <div class="item-input">
                            <input readonly style="width: 85%;display:inline;" type="text" value="<?php echo $task_result['duration'] ? $task_result['duration'] : '暂无'; ?>">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </div>

    <script>
    

    </script>
    <script>
  
  </script>
</body>
</html>