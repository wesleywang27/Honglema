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

        $(function () {
            $("#city-picker").cityPicker({
                toolbarTemplate: '<header class="bar bar-nav">\
            <button class="button button-link pull-right close-picker">确定</button>\
            <h1 class="title">地区</h1>\
            </header>'
            });
        });
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