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
    <link rel="stylesheet" href="{{URL::asset('css/merchant/back_color.css')}}">
    <script type='text/javascript' src="{{URL::asset('js/zepto.min.js')}}" charset='utf-8'></script>
    <script type='text/javascript' src="{{URL::asset('js/sm.min.js')}}" charset='utf-8'></script>
    <script type='text/javascript' src="{{URL::asset('js/sm-extend.min.js')}}" charset='utf-8'></script>
    <script type="text/javascript" src="{{URL::asset('js/sm-city-picker.min.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-1.8.3.min.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{URL::asset('js/ajaxfileupload.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery.cxselect.min.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jweixin-1.0.0.js')}}"></script>
    <style>
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

<script type="text/javascript" charset="utf-8">
   
</script>
<script>
    
    $j=jQuery.noConflict();

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

    //地区选择器
    $(function () {
        jQuery('#headimgupload').change(function(){
            upLoadPic('headimgupload');
        });
        jQuery('#licenseimgupload').change(function(){
            upLoadPic('licenseimgupload');
        });

        $("#city-picker").cityPicker({
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

    // //头像修改页面编辑按钮
    // $(document).on('click','.create-actions', function () {
    //     var buttons1 = [
    //         {
    //             text: '从手机相册选择',
    //             onClick: function() {
    //                 $.alert("从手机相册选择");
    //             }
    //         }
    //     ];
    //     var buttons2 = [
    //         {
    //             text: '取消'
    //         }
    //     ];
    //     var groups = [buttons1, buttons2];
    //     $.actions(groups);
    // });

    function clearEmply(id){
        if($('#'+id).val() == '请选择'){
            return '';
        }else{
            return $('#'+id).val();
        }
    }
    //保存单行内容按钮
    $.set_value = function(va){
        var value = '';
        if(va == 'category'){
            value = document.getElementById("category").value;
        }else{
            value = $('#'+va).val();
        }
        $('#f_'+va).text(value);
        $('#'+va+'_hidden').val(value);
    }

    //多值拼接（2值）
    $.set_values = function(v,v1,v2){
        $('#f_' + v).text($('#'+v1).val()+'/'+$('#'+v2).val());
        $('#'+v1+'_hidden').val($('#'+v1).val());
        $('#'+v2+'_hidden').val($('#'+v2).val());
    }


    //多值拼接（3值）
    $.set_three_values = function(v,v1,v2,v3){
        $('#f_' + v).text($('#'+v1).val()+'/'+$('#'+v2).val()+'/'+$('#'+v3).val());
        $('#'+v1+'_hidden').val($('#'+v1).val());
        $('#'+v2+'_hidden').val($('#'+v2).val());
        $('#'+v3+'_hidden').val($('#'+v3).val());
    }

    //设置性别
    $.set_sex = function(){
        var text = $("input[name='sex-radio']:checked").val();
        if(text == 'M')
            $('#f_sex').text('男');
        else
            $('#f_sex').text('女');
    }


    //设置地址
    $.set_address = function(v1,v2,v3,v4,v5){
        $('#f_address').text(clearEmply(v1) + clearEmply(v2) + clearEmply(v3) +clearEmply(v4) +clearEmply(v5));
    }

    //城市关联查询
    jQuery.cxSelect.defaults.url = '/js/city.json';
    jQuery('#global_location').cxSelect({
        selects: ['country', 'province', 'city', 'region'],
        nodata: 'none'
    });

    // //完成注册
    // $('#finish').click(function(){
    //     var contactValue = $('#f_contact').text();
    //     var contactValues = contactValue.split("/");
    //     if(contactValues == '未编辑'){
    //         contactValues = '';
    //     }
    //     var alipayValue = $('#f_alipay').text();
    //     var alipayValues = alipayValue.split("/");
    //     if(alipayValues == '未编辑'){
    //         alipayValues = '';
    //     }

    //     $.ajax({
    //         url: "/Merchant/register/save",
    //         type: "POST",
    //         traditional: true,
    //         dataType: "JSON",
    //         data: {
    //             "avatar"      : $('#f_avatar').attr('src'),
    //             "name"     : $('#merchant_name_hidden').val(),
    //             "country"     : clearEmply('country'),
    //             "province"     : clearEmply('province'),
    //             "city"     : clearEmply('city'),
    //             "region"     : clearEmply('region'),
    //             "address"     : $('#addressInput').val(),
    //             "wechat"     : $('#wechat_hidden').val(),
    //             "cellphone"     : $('#cellphone_hidden').val(),
    //             "alipay_name"     : $('#alipay_name_hidden').val(),
    //             "alipay_account"     : $('#alipay_account_hidden').val(),
    //             "license"     : $('#license_img').attr('src'),
    //             "open_id"     :  $('#openId').val()
    //         },
    //         success: function(data) {
    //             $.toast("操作成功!",1000);
    //             setTimeout(function(){
    //                 location.href="/Merchant/user/";
    //             },1000);
    //         },
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    // });
    
    // //保存修改信息
    // $('#save').click(function(){
    //     var contactValue = $('#f_contact').text();
    //     var contactValues = contactValue.split("/");
    //     if(contactValues == '未编辑'){
    //         contactValues = '';
    //     }
    //     var alipayValue = $('#f_alipay').text();
    //     var alipayValues = alipayValue.split("/");
    //     if(alipayValues == '未编辑'){
    //         alipayValues = '';
    //     }

    //     $.ajax({
    //         url: "/Merchant/user/updateUser",
    //         type: "POST",
    //         traditional: true,
    //         dataType: "JSON",
    //         data: {
    //             "avatar"      : $('#f_avatar').attr('src'),
    //             "name"     : $('#merchant_name_hidden').val(),
    //             "country"     : clearEmply('country'),
    //             "province"     : clearEmply('province'),
    //             "city"     : clearEmply('city'),
    //             "region"     : clearEmply('region'),
    //             "address"     : $('#addressInput').val(),
    //             "wechat"     : $('#wechat_hidden').val(),
    //             "cellphone"     : $('#cellphone_hidden').val(),
    //             "alipay_name"     : $('#alipay_name_hidden').val(),
    //             "alipay_account"     : $('#alipay_account_hidden').val(),
    //             "license"     : $('#license_img').attr('src'),
    //         },
    //         success: function(data) {
    //             $.toast("操作成功!",1000);
    //             setTimeout(function(){
    //                 location.href="/Merchant/user/";
    //             },1000);
    //         },
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    // });

    //完成注册
    $('#finishRegister').click(function(){
        

        $.ajax({
            url: "/Merchant/register/save",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {
                "avatar"      : $('#f_avatar').attr('src'),
                "name"     : $('#merchant_name_hidden').val(),
                "country"     : clearEmply('country'),
                "province"     : clearEmply('province'),
                "city"     : clearEmply('city'),
                "region"     : clearEmply('region'),
                "address"     : $('#addressInput').val(),
                "contact"     : $('#contact_hidden').val(),
                "contact_phone"     : $('#contact_phone_hidden').val(),
                "contact_email"     : $('#contact_email_hidden').val(),
                "brand_name"     : $('#brand_name_hidden').val(),
                "category"     : $('#category_hidden').val(),
                "shop_id"     : $('#shop_id_hidden').val(),
                "sales"     : $('#sale_hidden').val(),
                "introduction"     : $('#introduction_hidden').val(),
                "open_id"     :  $('#openId').val()
            },
            success: function(data) {
                $.toast("操作成功!",1000);
                setTimeout(function(){
                    location.href="/Merchant/user/";
                },1000);
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });


    //保存修改信息
    $('#save').click(function(){

        $.ajax({
            url: "/Merchant/user/updateUser",
            type: "POST",
            traditional: true,
            dataType: "JSON",
            data: {
                "avatar"      : $('#f_avatar').attr('src'),
                "name"     : $('#merchant_name_hidden').val(),
                "country"     : clearEmply('country'),
                "province"     : clearEmply('province'),
                "city"     : clearEmply('city'),
                "region"     : clearEmply('region'),
                "address"     : $('#addressInput').val(),
                "contact"     : $('#contact_hidden').val(),
                "contact_phone"     : $('#contact_phone_hidden').val(),
                "contact_email"     : $('#contact_email_hidden').val(),
                "brand_name"     : $('#brand_name_hidden').val(),
                "category"     : $('#category_hidden').val(),
                "shop_id"     : $('#shop_id_hidden').val(),
                "sales"     : $('#sale_hidden').val(),
                "introduction"     : $('#introduction_hidden').val(),
            },
            success: function(data) {
                $.toast("操作成功!",1000);
                setTimeout(function(){
                    location.href="/Merchant/user/";
                },1000);
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function upLoadPic(id){  

        $.showPreloader('正在上传...');
        $j.ajaxFileUpload({
            url:"/picture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:id,//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                
                if(id == 'headimgupload'){
                    $('#f_avatar').attr('src',urls[0]);
                }else{
                    $('#license_img').attr('src',urls[0]);
                }
                $.hidePreloader();
                $.toast("添加成功", 1000);
            },error:function(data, status, e){
                $.hidePreloader();
                $.toast("添加失败", 1000);
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // jQuery.ajaxFileUpload({
        //     url: '/Merchant/upLoadFile', //用于文件上传的服务器端请求地址
        //     type: 'post',
        //     secureuri: false, //一般设置为false
        //     fileElementId: id, //文件上传空间的id属性  <input type="file" id="file" name="file" />
        //     dataType: 'content', //返回值类型 一般设置为json
        //     success: function (data, status)  //服务器成功响应处理函数
        //     {
        //        if(id == 'headimgupload'){
        //             $('#f_avatar').attr('src',data);
        //        }else{
        //             $('#license_img').attr('src',data);
        //             // $('#license_div').css('background-image','url('+data+')');
        //             // $('#license_img_input').val(data);
        //        }
                
        //     },
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        //     // error: function (data, status, e)//服务器响应失败处理函数
        //     // {
        //     //     alert('上传失败');
        //     // }
        // });//这是ajax1结束Tags
                 return false;
    }
</script>
</body>
</html>