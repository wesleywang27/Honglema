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
    <style>
    .task_pic_div {
      float: left;
      position: relative;
      margin-right: 9px;
      /* margin-bottom: 9px; */
      width: 77px;
      height: 77px;
    } 
    </style>
</head>
<body>

  <header class="bar bar-nav">
      <a class="button button-link button-nav pull-left back" href="javascript:history.go(-1)">
            <span class="icon icon-left"></span>
      </a>
      <h1 class='title'>查看并评价</h1>
  </header>
  <div class="content">
    <div class="list-block content-no-margin">
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">活动时间</div>
                        <div class="item-input">
                            2016-06-06
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
              <div valign="bottom" class="card-header color-white no-border no-padding" style="height:6rem">
              <?php 
                  $count = 0;
                  foreach ($taskPics as $key => $tp) {
                    $count++; 
              ?>
                  <div class="task_pic_div" style="height:4rem;margin-top:1rem;margin-bottom:1rem;margin-left:9px">
                        <img style="height:100%;width:100%" src="{{$tp['url']}}" >
                  </div>
              <?php
                }
                if($count<4){
                    for($i = 0;$i < 4 - $count;$i ++){
                      //填充空图片，div中必须有4个图片！
              ?>
                  <div class="task_pic_div" style="height:4rem;margin-top:1rem;margin-bottom:1rem;margin-left:9px">
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
                <div class="item-content" style="height:6rem">
                    <div class="item-inner">
                        <textarea style="background:#EEEEEE" placeholder="请留下你的评价 !" <?php if($task['status']==4){ ?>disabled="disabled"<?php } ?>id="comment">{{$task['evaluation']}}</textarea>
                    </div>
                </div>
                <div class="item-content">
                    <div class="item-inner">
                    </div>
                    <div class="item-inner">
                    </div>
                    <div class="item-inner" style="padding-right:0">
                      <?php if($task['status']!=4){ ?>
                      <button class="button pull-right" style="margin-right:1rem;width:5rem" onclick="saveComment()">提交</button>
                      <?php } ?>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
  <script>
  function saveComment(){
      $.ajax({
        url: "/Merchant/activityOrder/saveComment",
        type: "POST",
        traditional: true,
        dataType: "JSON",
        data: {
            "task_id"   : {{$task['task_id']}},
            "comment"   : $('#comment').val()
        },
        success: function(data) {
            alert('保存成功');
           location.reload();
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  }
  
  </script>
</body>
</html>