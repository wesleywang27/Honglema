<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>红了吗合作意向报名</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="http://y.wcc.cn/statics/amazeui/css/amazeui.min.css">
    <link rel="stylesheet" href="http://weui.github.io/weui/weui.css">
    <link rel="stylesheet" href="http://y.wcc.cn/statics/amazeui/css/app.css?v=2016030801">
    <link rel="stylesheet" href="http://y.wcc.cn/statics/amazeui/css/admin.css">

    <script src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>
    <script src="http://y.wcc.cn/statics/amazeui/js/handlebars.min.js"></script>
    <script src="http://y.wcc.cn/statics/amazeui/js/amazeui.widgets.helper.js"></script>
</head>
<body>
<header data-am-widget="header" class="am-header am-header-default" style="background-color: #DD514C">
    <div class="am-header-left am-header-nav">
        <a href="index.php">
            <span class="am-header-nav-title" style="margin-right: 5px">返回</span>
        </a>
    </div>
    <h1 class="am-header-title" style="margin: 0px">
        红了吗合作意向报名
    </h1>
</header>

<div>
    <div class="am-intro-default am-padding-sm am-text-center">
        <span class="am-intro-title">
            设计师报名表
        </span>
    </div>

    <form action="/designer" id="baseInfoForm" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="weui_cells_title">个人信息<span class="am-text-danger">(必填)</span></div>
        <div class="weui_cells">
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd">
                    设计师类型
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="designType">
                        <option value="职业设计师">职业设计师</option>
                        <option value="贴牌设计师">贴牌设计师</option>
                        <option value="高级定制设计师">高级定制设计师</option>
                        <option value="个体设计师">个体设计师</option>
                        <option value="独立设计师">独立设计师</option>
                    </select>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd">姓名</div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="username" placeholder="请输入姓名"
                           value="" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">手机号码</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="number" name="mobile" pattern="[0-9]*" placeholder="请输入手机号码"
                           value="" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">微信号</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="weixinNo" placeholder="请输入微信号"
                           value="" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">职位</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="title" placeholder="请输入职位" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">设计经历</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="designExperience" placeholder="设计经历" required>
                </div>
            </div>
            <!--
            <div class="weui_cells weui_cells_form">
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <div class="weui_uploader">
                            <div class="weui_uploader_hd weui_cell">
                                <div class="weui_cell_bd weui_cell_primary">设计作品</div>
                            </div>
                            <div class="weui_uploader_bd">
                                <ul class="weui_uploader_files" id="files">
                                </ul>
                                <div class="weui_uploader_input_wrp">
                                    <input class="weui_uploader_input" id="fileupload" name="imgFiles" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd">
                    是否有设计团队
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="designTeam">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd">
                    是否有自己的设计品牌
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="brand">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="weui_cells_title">设计品牌名称</div>
        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <textarea class="weui_textarea" name="designBrand" placeholder="设计的品牌" rows="5">无</textarea>
                </div>
            </div>
        </div>
        <div class="weui_cells_title">备注</div>
        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <textarea class="weui_textarea" name="description" placeholder="请输入备注" rows="5">无</textarea>
                </div>
            </div>
        </div>

        <div class="weui_btn_area">
            <input class="am-btn am-btn-danger am-btn-block am-round" id="saveSubmit" name="commit" type="submit" value="提交信息"/>
        </div>
    </form>

    <div class="qrcode am-g am-text-center am-padding-top">
        <div class="am-u-sm-12">
            <div class="am-thumbnail">
                <img src="http://y.wcc.cn/statics/img/fdcode.jpg">

                <p>负责人飞电微信</p>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="http://y.wcc.cn/statics/js/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="http://y.wcc.cn/statics/js/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="http://y.wcc.cn/statics/js/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="http://y.wcc.cn/statics/js/select/js/jquery.cxselect.min.js" type="text/javascript"></script>
<script src="http://y.wcc.cn/statics/js/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script>
    jQuery.cxSelect.defaults.url = 'http://y.wcc.cn/statics/js/select/js/city.json';
    jQuery('#global_location').cxSelect({
        selects: ['country', 'province', 'city', 'region'],
        nodata: 'none'
    });


    jQuery('#fileupload').fileupload({
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 10000000, // 10MB
        url: "http://y.wcc.cn/apply/do-upload-image.htm",
        formData: {"x_token": "faeb184c573352a2406e4868a7cba81d"},
        dataType: 'json',
        done: function (e, data) {
            if(jQuery('.images').length>5){
                alert("商品图片最多6张哦!");
                return;
            }else{
                if (data.result.status) {
                    $('<li class="weui_uploader_file images" style="background-image:url('+data.result.url+')"><input type="hidden" id="itemImage" name="itemImage" value="'+data.result.url+'"/></li>').appendTo('#files');
                } else {
                    alert("上传失败!");
                }
            }
        }
    });

    /*
    jQuery('#saveSubmit').click(function () {
        jQuery('#baseInfoForm').ajaxSubmit(function (response) {
            if (response.status == true) {
                window.location.href = "http://y.wcc.cn/apply/success.htm";
            } else {
                alert(response.message);
                return false;
            }
        });
    });

    wx.config({"debug":false,"appId":"wx024e9c8cc8941ef3","timestamp":"1460007264","nonceStr":"94647d6a-8414-45ba-890b-90a1b3cfc316","signature":"4568fcbfa7f2351a7b0328248ac48fd0a4a8ca6d","jsApiList":["onMenuShareTimeline","onMenuShareAppMessage"]});

    wx.ready(function () {
        wx.onMenuShareAppMessage({
            title : "红了吗合作意向报名",
            desc : "我们目前正在运营一个由薛蛮子和徐小平投资了2千万的国内最大的网红项目，旗下有5万多优质网红...",
            link : "http://y.wcc.cn/apply/index.htm",
            imgUrl : "http://y.wcc.cn/statics/img/fdcode.jpg",
            success : function(res) {
                // 分享成功
            },
            cancel : function(res) {
                //分享取消
            }
        });

        wx.onMenuShareTimeline({
            title : "红了吗合作意向报名",
            link : "http://y.wcc.cn/apply/index.htm",
            imgUrl : "http://y.wcc.cn/statics/img/fdcode.jpg",
            success : function(res) {
                // 分享成功
            },
            cancel : function(res) {
                //分享取消
            }
        });
    })

    wx.error(function (res) {
        //alert(res.errMsg);
    });
     */

</script>


<script src="http://y.wcc.cn/statics/amazeui/js/amazeui.min.js"></script>
</body>
</html>