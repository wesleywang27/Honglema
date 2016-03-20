<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{URL::asset('css/sm.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sm-extend.min.css')}}">
</head>
<body>
    @yield("body")
    <script type='text/javascript' src="{{URL::asset('js/zepto.min.js')}}" charset='utf-8'></script>
    <script type='text/javascript' src="{{URL::asset('js/sm.min.js')}}" charset='utf-8'></script>
    <script type='text/javascript' src="{{URL::asset('js/sm-extend.min.js')}}" charset='utf-8'></script>
    <script type="text/javascript" src="{{URL::asset('js/sm-city-picker.min.js')}}" charset="utf-8"></script>
    <script>
        //    $(function() {
        //        $('#test').click(function() {
        //            $.ajax({
        //                url: "/celebrity/6",
        //                method: "PATCH",
        //                data: {sex: 0},
        //                success: function($data) {
        //                    console.log($data);
        //                }
        //            });
        //        });
        //    });

        //验证码页面,倒计时按钮,点击确认事件
        var waittime = 60;
        var countdown = waittime;
        function settime(me) {
            var obj=$(me);
            if (countdown <= 0) {
                obj.css('color','#0894ec');
                obj.text("获取验证码");
                countdown = waittime;
                return ;
            } else {
                obj.css('color','gray');
                obj.text("重新发送(" + countdown + ")");
                countdown--;
            }
            setTimeout(function() {
                settime(obj);
            },1000);
        }
        $('#sendcode').click(function(){
            if(countdown == waittime) {
                $.toast("发送成功",1000);
                settime(this);
            }
        });
        $("#confirmcode").click(function(){
            if(true){
                $.showPreloader('正在验证中...')
                setTimeout(function () {
                    $.hidePreloader();
                    $.toast("验证成功",1000);
                }, 2000);
                setTimeout(function(){
                    document.getElementById("codecfm").click();
                },3000);
            }else{
                $.toast("验证失败,请重新输入!");
            }
        });

        //地区选择器
        $(function () {
            $("#city-picker").cityPicker({
                toolbarTemplate: '<header class="bar bar-nav">\
            <button class="button button-link pull-right close-picker">确定</button>\
            <h1 class="title">地区</h1>\
            </header>'
            });
        });

        //头像修改页面编辑按钮
        $(document).on('click','.create-actions', function () {
            var buttons1 = [
                {
                    text: '从手机相册选择',
                    onClick: function() {
                        $.alert("从手机相册选择");
                    }
                }
            ];
            var buttons2 = [
                {
                    text: '取消'
                }
            ];
            var groups = [buttons1, buttons2];
            $.actions(groups);
        });
    </script>
</body>
</html>