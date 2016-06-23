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
        <h1 class="title">支付宝</h1>
        <a class="button button-link button-nav pull-right back" onclick="saveLogistic();">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">物流快递</div>
                            <div class="item-input">
                                <select id="company">
                                  <option value="0">请选择...</option>
                                  <option value="申通快递">申通快递</option>
                                  <option value="圆通快递">圆通快递</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">快递单号</div>
                            <div class="item-input">
                                <input id="num" style="width: 85%;display:inline;" type="text" placeholder="快递单号" value="{{$task['express_num']}}">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
    $(function(){
      var company = "{{$task['express_company']}}";
      if(company != ''){
        $("#company option[value='"+company+"']").attr("selected",true);
      }
    });

    function saveLogistic(){
      $.ajax({
            url: "/Merchant/activityOrder/saveLogistic",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {
                "task_id"      : {{$task['task_id']}},
                "company"     : $('#company').val(),
                "num"         : $('#num').val()
            },
            success: function(data) {
                $.toast("快递信息保存成功!",1000);
                setTimeout(function(){
                    history.go(-1);
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