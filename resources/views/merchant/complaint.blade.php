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
        <a class="button button-link button-nav pull-left back" href="javascript:history.go(-1);">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">商家投诉</h1>
    </header>
    <div class="content">
        <div class="list-block" style="margin: 1.2rem 0 0 0;">
            <ul>
                <li>
                        <div class="weui_cells" id="global_location">
                            <div class="weui_cell">
                                <div class="weui_cell_bd weui_cell_primary">
                                    <textarea class="weui_textarea" id="content" name="content" placeholder="请输入您的投诉内容" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                   
                </li>
            </ul>
        </div>
        <div class="list-block" style="margin: 1.2rem 0 1.2rem 0;">
            <ul>
                <li>
                    <div class="item-content">
                            <div class="title button-danger" onclick="submitComplaint()">我要投诉</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
    function submitComplaint(){
        $.ajax({
            url : "/Merchant/activityOrder/saveComplaint",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {
                "content"   : $.trim($('#content').val()),
                "task_id"   : {{$task_id}},
                "star_id" : {{$star_id}}
            },
            success: function(data) {
                var obj = $.parseJSON(data);
                if(obj.error==0){
                    $.toast(obj.msg,1000);
                        setTimeout(function(){
                        window.location.href = '/Merchant/activityOrder/taskDetail/{{$task_id}}';
                    },1000);
                }else{
                    alert(obj.msg);
                    window.location.href = '/Merchant/activityOrder/taskDetail/{{$task_id}}';
                }
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
    }
    </script>
</body>
</html>