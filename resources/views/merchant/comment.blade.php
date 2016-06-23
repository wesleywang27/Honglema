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
      <a class="button button-link button-nav pull-left back" href="javascript:history.go(-1)">
            <span class="icon icon-left"></span>
      </a>
      <h1 class='title'>查看并评价</h1>
  </header>
  <div class="content">
    <div class="list-block content-no-margin">
        <ul>
            <li>
              <div valign="bottom" class="card-header color-white no-border no-padding" style="height:6rem">
                <img class='card-cover' style="height:100%" src="" alt="">
              </div>
            </li>
        </ul>
        <ul>
        
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title">s</div>
                        <div id="f_merchant_name" class="item-after">123</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">活动时间</div>
                        <div class="item-input">
                            <p>12</p>
                        </div>
                    </div>
                </div>
                <div class="item-content">
                    <div class="item-inner">
                        <div class="item-title label">活动要求</div>
                        <div class="item-input">
                            <p></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </div>
  <script>
  // function setOrder(id){
  //     $.ajax({
  //       url: "/star/setOrder",
  //       type: "POST",
  //       traditional: true,
  //       dataType: "JSON",
  //       data: {
  //           "task_id"   : id
  //       },
  //       success: function(data) {
  //           $.toast("抢单成功，请等待回复!",1000);
  //           setTimeout(function(){
  //               location.href="/star/activityList";
  //           },1000);
  //       },
  //       headers: {
  //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //       }
  //   });
  // }
  
  </script>
</body>
</html>