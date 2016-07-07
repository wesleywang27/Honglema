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
        <h1 class="title">任务详情</h1>
    </header>
    <div class="content">
        <div class="list-block" style="margin: 1.2rem 0 0 0;">
            <ul>
                <li>
                    <div class="item-content">
                            <div class="title">任务信息</div>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">活动时间</div>
                             <div class="item-input">收货后{{$activity['time_within']}}</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">合作网红</div>
                             <div class="item-input">{{$star['name']}}</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">任务状态</div>
                            <?php 
                                switch ($task['status']) {
                                    case '1':
                                        $status = '待发货';
                                        break;

                                    case '2 ':
                                        $status = '推广中';
                                        break;

                                    case '3':
                                        $status = '待评价';
                                        break;

                                    case '4':
                                        $status = '已结束';
                                        break;

                                    default:
                                        $status = '状态暂无';
                                        break;
                                }
                            ?>
                             <div class="item-input">{{$status}}</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="list-block" style="margin: 1.2rem 0 0 0;">
            <ul>
                <li>
                    <div class="item-content">
                            <div class="title">物流信息</div>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">物流快递</div>
                            <div class="item-input">
                                <select id="company" <?php if($task['status'] > 2){ ?>disabled<?php } ?>>
                                  <option value="0">请选择...</option>
                                  <option value="圆通速递">圆通速递</option>
                                  <option value="韵达速递">韵达速递</option>
                                  <option value="申通快递">申通快递</option>
                                  <option value="中通快递">中通快递</option>
                                  <option value="顺丰速运">顺丰速运</option>
                                  <option value="EMS">EMS</option>
                                  <option value="宅急送">宅急送</option>
                                  <option value="全峰快递">全峰快递</option>
                                  <option value="天天快递">天天快递</option>
                                  <option value="优速物流">优速物流</option>
                                  <option value="如风达">如风达</option>
                                  <option value="百世汇通">百世汇通</option>
                                  <option value="京东快递">京东快递</option>
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
                                <input id="num" style="width: 85%;display:inline;" type="text" placeholder="快递单号" <?php if($task['status'] > 2){ ?>disabled<?php } ?>>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-input">
                                <input id="need_express" type="checkbox" onclick="needExpress()">&nbsp;&nbsp;&nbsp;不提供样品
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                    <div class="item-inner">
                    </div>
                    <div class="item-inner">
                    </div>
                    <div class="item-inner" style="padding-right:0">
                      <?php if($task['status']==1 || $task['status']==2){ ?>
                      <button class="button pull-right" style="margin-right:1rem;width:5rem" onclick="saveLogistic()">提交快递单号</button>
                      <?php } ?>
                    </div>
                </div>
                </li>
            </ul>
        </div>

        <div class="list-block" style="margin: 1.2rem 0 1.2rem 0;">
            <ul>
                <li>
                    <div class="item-content">
                            <div class="title">直播信息</div>
                    </div>
                </li>
            </ul>
            <?php 
                $count = 1;
                if(count($task_result)==0){ 
            ?>
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title">该网红尚未提交结果</div>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>
            @foreach ($task_result as $result)
            <ul onclick="window.location.href='/Merchant/activityOrder/showDetail/{{$result['task_result_id']}}'">
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title">直播场次{{$count++}}</div>
                        </div>
                    </div>
                </li>
            </ul>
            @endforeach
        </div>

        <div class="list-block content-no-margin">
        <ul>
            <li>
                <div class="item-content">
                        <div class="title">任务评论</div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>  
                    <div class="item-inner">
                        <div class="item-title label" style="width:100%"><span style="color:red">* </span>您对此次活动：</div>
                    </div>
                </div>
                <div class="item-content">
                    <div class="item-inner">
                        <div>
                            <input type="radio" name="evaluation_level" value="1" <?php if($task['status']!=3){ ?>disabled="disabled"<?php } ?> ><label style="font-size:0.65rem">&nbsp;不满意</label>
                        </div>
                        <div>
                            <input type="radio" name="evaluation_level" value="2" <?php if($task['status']!=3){ ?>disabled="disabled"<?php } ?>><label style="font-size:0.65rem">&nbsp;较不满意</label>
                        </div>
                        <div>
                            <input type="radio" name="evaluation_level" value="3" <?php if($task['status']!=3){ ?>disabled="disabled"<?php } ?>><label style="font-size:0.65rem">&nbsp;一般</label>
                        </div>
                        <div>
                            <input type="radio" name="evaluation_level" value="4" <?php if($task['status']!=3){ ?>disabled="disabled"<?php } ?>><label style="font-size:0.65rem">&nbsp;较满意</label>
                        </div>
                        <div>
                            <input type="radio" name="evaluation_level" value="5" <?php if($task['status']!=3){ ?>disabled="disabled"<?php } ?>><label style="font-size:0.65rem">&nbsp;非常满意</label>
                        </div>
                        
                    </div>
                </div>
                <div class="item-content" style="height:6rem">
                    <div class="item-inner">
                        <textarea style="background:#EEEEEE" <?php if($task['status']!=3){ ?> placeholder="您现在还不能发表评论 !" disabled="disabled"<?php }else{ ?>placeholder="请留下您的评价 !"<?php } ?>id="comment">{{$task['evaluation']}}</textarea>
                    </div>
                </div>

                <div class="item-content">
                    <div class="item-inner">
                    </div>
                    <div class="item-inner">
                    </div>
                    <div class="item-inner" style="padding-right:0">
                      <?php if($task['status']==3){ ?>
                      <button class="button pull-right" style="margin-right:1rem;width:5rem" onclick="saveComment()">提交</button>
                      <?php } ?>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </div>

    <script>
    var need_express = 1;
    $(function(){
        
        $("input[name='evaluation_level'][value='{{$task['evaluation_level']}}']").attr("checked",true);  

        
        
        
        if('{{$task->is_shipping}}'==1){
            var company = "{{$task['express_company']}}";
            if(company != ''){
                $("#company option[value='"+company+"']").attr("selected",true);
            }
        var express_num = "{{$task['express_num']}}";
        $('#num').val(express_num);
        }else if('{{$task->is_shipping}}'==0){
            $("#need_express").attr("checked",true);
            $('#num').attr('disabled',"disabled");
            $('#company').attr('disabled',"disabled");
            $('#company').parent().parent().parent().css("background",'#e2e2e2');
            $('#num').parent().parent().parent().css("background",'#e2e2e2');
        }
    });
   
    function needExpress(){
        if($("#need_express").attr("checked")==true){
                $('#num').attr('disabled',"disabled");
                $('#company').attr('disabled',"disabled");
                $('#company').parent().parent().parent().css("background",'#e2e2e2');
                $('#num').parent().parent().parent().css("background",'#e2e2e2');
                $("#need_express").attr("checked",true);
                need_express = 0;
            }else{
                $('#num').removeAttr('disabled');
                $('#company').removeAttr('disabled');
                $('#company').parent().parent().parent().css("background",'');
                $('#num').parent().parent().parent().css("background",'');
                $("#need_express").removeAttr("checked");
                need_express = 1;
            }
    }

    function saveLogistic(){

      $.ajax({
            url: "/Merchant/activityOrder/saveLogistic",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {
                "task_id"      : {{$task['task_id']}},
                "company"     : $('#company').val(),
                "num"         : $('#num').val(),
                "is_shipping" : need_express,
            },
            success: function(data) {
                $.toast("快递信息保存成功!",1000);
                setTimeout(function(){
                   location.reload();
                },1000);
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    </script>
    <script>
  function saveComment(){
    var comment = $('#comment').val();
    var level = $('input[name="evaluation_level"]:checked').val();
    if(!level){
        alert("请为网红打分");
    }else if($.trim(comment)==''){
        alert('请填写您的评价');
    }else{
       $.ajax({
            url: "/Merchant/activityOrder/saveComment",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {
                "task_id"   : {{$task['task_id']}},
                "comment"   : $.trim(comment),
                "evaluation_level" : level
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
  }
  
  </script>
</body>
</html>