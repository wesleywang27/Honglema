<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{URL::asset('css/sm.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sm-extend.min.css')}}">
    <style>
        .content .content-block-my{
            padding: 0;
        }
        .blackfont{
	        color : #333;
        }
        .content-no-margin{
	        margin: 0;
        }
        .list-block .item-title.label{
            width:25%;
        }
        .weui_uploader_hd {
            padding-top: 0;
            padding-right: 0;
            padding-left: 0;
        }
        .weui_uploader_hd .weui_cell_ft {
            font-size: 1em;
        }
        .weui_uploader_bd {
            overflow: hidden;
        }
        .weui_uploader_files {
            list-style: none;
        }
        .weui_uploader_file {
            margin-top: .5rem;
            float: left;
            margin-right: 9px;
            margin-bottom: 9px;
            width: 100%;
            height: 160px;
            background: no-repeat center center;
            background-size: cover;
        }
        .weui_uploader_status {
            position: relative;
        }
        .weui_uploader_status:before {
            content: " ";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .weui_uploader_status .weui_uploader_status_content {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: #FFFFFF;
        }
        .weui_uploader_status .weui_icon_warn {
            display: block;
        }
        .weui_uploader_input_wrp {
            margin-top: .5rem;
            float: left;
            position: relative;
            margin-right: 9px;
            margin-bottom: 9px;
            width: 100%;
            height: 160px;
            border: 1px solid #D9D9D9;
        }
        .weui_uploader_input_wrp:before,
        .weui_uploader_input_wrp:after {
            content: " ";
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: #D9D9D9;
        }
        .weui_uploader_input_wrp:before {
            width: 2px;
            height: 39.5px;
        }
        .weui_uploader_input_wrp:after {
            width: 39.5px;
            height: 2px;
        }
        .weui_uploader_input_wrp:active {
            border-color: #999999;
        }
        .weui_uploader_input_wrp:active:before,
        .weui_uploader_input_wrp:active:after {
            background-color: #999999;
        }
        .weui_uploader_input {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        .save{
            margin-right: .9rem;
        }
    </style>
</head>
<body>
@yield("body")
<script type='text/javascript' src="{{URL::asset('js/zepto.min.js')}}" charset='utf-8'></script>
<script type='text/javascript' src="{{URL::asset('js/sm.min.js')}}" charset='utf-8'></script>
<script type='text/javascript' src="{{URL::asset('js/sm-extend.min.js')}}" charset='utf-8'></script>
<script type="text/javascript" src="{{URL::asset('js/sm-city-picker.min.js')}}" charset="utf-8"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery-1.8.3.min.js')}}" charset="utf-8"></script>
<script type="text/javascript" src="{{URL::asset('js/ajaxfileupload.js')}}" charset="utf-8"></script>
<script>
    $j=jQuery.noConflict();
    //上传身份证
    $('#fileupload').change(function(){
        $('#idfile').append('<li class="weui_uploader_file images" style="background-image:url(http://oss-cn-hangzhou.aliyuncs.com/hzfx10000/1458541178099imgFiles.png)">\
                <input type="hidden" id="id_image" name="id_image" value="http://oss-cn-hangzhou.aliyuncs.com/hzfx10000/1458541178099imgFiles.png">\
                </li>');
        $(this).parent('div').hide();
        $.toast("添加成功",1000);
    });

    //上传多图
    $('#imgupload').change(function(){
        $.showPreloader('正在上传...');
        $j.ajaxFileUpload({
            url:"/picture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:"imgupload",//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                var $htmls = '';
                for(var i=0; i<urls.length; i++){
                    $htmls += '<li class="weui_uploader_file images" style="width:80px;height:80px;background-image:url('+urls[i]+')">\
                    <input type="hidden" id="manyimg" value="'+urls[i]+'"></li>';
                }
                $('#imgfiles').append($htmls);
                $.hidePreloader();
                $.toast("添加成功", 1000);
            },error:function(data, status, e){
                $.hidePreloader();
                $.toast("添加失败", 1000);
            }
        });
    });

    //上传网红照片

    $('#uploadalbum').change(function(){
        $.showPreloader('正在上传...');
        $j.ajaxFileUpload({
            url:"/picture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:"uploadalbum",//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                for(var i=0; i<urls.length; i++){
                    $.ajax({
                        url: "/star/uploadimg",
                        type: "POST",
                        traditional: true,
                        dataType: "JSON",
                        data: {url:urls[i]}
                        ,success: function(data) {
                            $.toast("提交成功!",1000);
                        },headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $htmls += '<li class="weui_uploader_file images" style="width:80px;height:80px;background-image:url('+urls[i]+')">\
                    <input type="hidden" id="task"+i value="'+urls[i]+'"></li>';

                }
                $('#album').append($htmls);
                $.hidePreloader();
                $.toast("添加成功", 1000);
            },error:function(data, status, e){
                $.hidePreloader();
                $.toast("添加失败", 1000);
            }
        });
    });

//upload task picture
 $('#taskimgupload').change(function(){
        $.showPreloader('正在上传...');
        $j.ajaxFileUpload({
            url:"/picture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:"taskimgupload",//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                var $htmls = '';
                for(var i=0; i<urls.length; i++){
                    $htmls += '<li class="weui_uploader_file images" style="width:80px;height:80px;background-image:url('+urls[i]+')">\
                    <input type="hidden" id="task"+i value="'+urls[i]+'"></li>';
                }
                $('#taskimg').append($htmls);
                $.hidePreloader();
                $.toast("添加成功", 1000);
            },error:function(data, status, e){
                $.hidePreloader();
                $.toast("添加失败", 1000);
            }
        });
    });
//submit task result



 //star album upload
 

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
            $.showPreloader('正在验证中...');
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


    $(function () {
        $("#city-picker").cityPicker({
            toolbarTemplate: '<header class="bar bar-nav">\
            <button class="button button-link pull-right close-picker">确定</button>\
            <h1 class="title">地区</h1>\
            </header>'
        });
    });

    //地区选择器
    $(function () {
        $("#address-picker").cityPicker({
            toolbarTemplate: '<header class="bar bar-nav">\
            <button class="button button-link pull-right close-picker">确定</button>\
            <h1 class="title">地区</h1>\
            </header>'
        });
    });

    //日期选择器
    $("#datetime-picker").calendar({
        value: ['1993-01-01']
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

    //保存单行内容按钮
    $.set_value = function(va){
        $('#f_'+va).text($('#'+va).val());
    }

    //设置性别
    $.set_sex = function(){
        var text = $("input[name='sex-radio']:checked").val();
        if(text == '1')
            $('#f_sex').text('男');
        else if(text =='2')
            $('#f_sex').text('女');
        else
            $('#f_sex').text('未知');
    }
//设置地址
    $.set_address = function(v1,v2){
        $('#f_dizhi').text($('#'+v1).val() +$('#'+v2).val());
    }

    //设置尺寸
    $.set_size = function(v1,v2,v3){
        $('#f_chicun').text($('#'+v1).val()+'/'+$('#'+v2).val()+'/'+$('#'+v3).val());
    }

    //设置支付宝
    $.setAlipay = function(){
        $('#f_zhifubao').text($('#zhifubao').val()+'/'+$('#zhifubaoname').val());
    }

    //编辑尺寸
    $.save_size = function(){
        $('#f_cloth').text($('#f_shirt').val()+'/'+$('#f_pants').val()+'/'+$('#f_shoe').val());
        $.ajax({
            url: "/star/update",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {
                'shirt_size': $("#f_shirt").val(),
                'pants_size': $("#f_pants").val(),
                'shoes_size': $("#f_shoe").val(),}
            ,success: function(data) {
                $.toast("提交成功!",1000);
            },headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }
//保存性别
    $.save_sex = function(){
        var text = $("input[name='sex-radio']:checked").val();
        if(text == '1')
            $('#f_dsex').text('男');
        else if(text =='2')
            $('#f_dsex').text('女');
        else
            $('#f_dsex').text('未知');

        $.ajax({
            url: "/star/update",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {  'sex': text}
            ,success: function(data) {
                $.toast("提交成功!",1000);
            },headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }
//保存编辑地址
    $.save_address =function(v1,v2){
        $('#f_dizhi').text($('#'+v1).val() +$('#'+v2).val());
        $.ajax({
            url: "/star/update",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {  'address': $('#'+v1)+val().$('#'+v2).val()}
            ,success: function(data) {
                $.toast("提交成功!",1000);
            },headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }
        );
    }
//保存编辑资料(单项)
    $.save_edit = function(va1,tag){
        $('#f_'+va1).text($('#'+va1).val());
        var data = {};
        data[tag]=$('#'+va1).val();
        $.ajax({
            url: "/star/update",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data:  data
            ,success: function(data) {
                $.toast("修改成功!",1000);
            },headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    //完成注册
    $('#finish').click(function() {
        var imgdata = new Array();
        var i = 0;
        $('[id=manyimg]').each(function(){
            imgdata[i] = $(this).val();
            i++;
        });
        var citypicks =  $('#f_dizhi').text().split(" ");
        var region = citypicks[citypicks.length-1];
        var sex = $('#sexvalue').val();
        $.ajax({
            url: "/star/register",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {
                "name": $('#f_nickname').text(),
                "sex": sex,
                "location": $('#f_city-picker').text(),

                "cup": $('#f_zhaobei').text(),
                "weight": $('#f_tizhong').text(),
                "height": $('#f_shengao').text(),
                "age": $('#f_nianling').text(),
                "occupation": $('#f_zhiye').text(),
                "education": $('#f_xueli').text(),

                "experience": $('#jingli').val(),

                "real_name": $('#id_name').val(),
                "ID_number": $('#id_code').val(),

                "shirt_size": $('#shangyi').val(),
                "pants_size": $('#xiayi').val(),
                "shoes_size": $('#shoe').val(),

                "cellphone": $('#phonenum').val(),
                "address": $('#f_dizhi').text(),

                "weibo_id": $('#f_weiboid').text(),
                "weipai_id": $('#f_weipaiid').text(),
                "miaopai_id": $('#f_miaopaiid').text(),
                "meipai_id": $('#f_meipaiid').text(),
                "kuaishou_id": $('#f_kuaishouid').text(),

                "region":region,
                "wechat":$('#f_weixin').text(),
                "alipay_name":$('#zhifubao').val(),
                "alipay_account":$('#zhifubaoname').val(),
                "imgdata[]":imgdata

            },success: function(data) {
                 if(data=="exist"){
                    $.toast("已注册",1000);
                    window.location.href="/star/activityList";
                }else{
                $.toast("注册成功!",1000);
                setTimeout(function(){
                    window.location.href="/star/activityList";
                },1000);}
            },headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    //网红提交任务结果
$.submmitTaskResult=function(id){
    $.ajax({
        url: "/star/submitTaskResult",
        type: "POST",
        traditional: true,
        dataType: "JSON",
        data: {  order_id:id,
            img1:$('#task1').val(),
            img2:$('#task2').val(),
            img3:$('#task3').val(),
            img4:$('#task4').val(),}
        ,success: function(data) {
            $.toast("提交成功!",1000);
        },headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

//网红取消抢单
$.cancelOrder=function(id){
    $.ajax({
        url: "/star/cancelOrder",
        type: "POST",
        traditional: true,
        dataType: "JSON",
        data: {order_id:id}
        ,success: function(data) {
            $.toast("取消成功!",1000);
            setTimeout(function(){
                location.href="/star/order";
            },1000);
        },headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}


</script>
<script>
    //网红修改头像

    function changeHeadImg(){
        $('#headimgInput').click();

    }
    $('#changeheadimg').change(function(){
         $.showPreloader('正在上传...');
        $j.ajaxFileUpload({
            url:"/picture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:"changeheadimg",//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                for(var i=0; i<urls.length; i++){
                    $.ajax({
                        url: "/star/update",
                        type: "POST",
                        traditional: true,
                        dataType: "JSON",
                        data:  {"avatar":urls[i]}
                        ,success: function(data) {
                            $('#wx_headimg').attr("src",urls[i]);
                            $.toast("修改成功!",1000);
                        },headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                }
                $('#album').append($htmls);
                $.hidePreloader();
                $.toast("添加成功", 1000);
            },error:function(data, status, e){
                $.hidePreloader();
                $.toast("添加失败", 1000);
            }
        });
    });
</script>
</body>
</html>