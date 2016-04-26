<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>红了吗网红供应链合作报名</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="http://y.wcc.cn/statics/amazeui/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/weui.css">
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
    <h1 class="am-header-title" style="margin: 0px; font-size: 20px;">
        红了吗网红供应链合作报名
    </h1>
</header>

<div>
    <div class="am-intro-default am-padding-sm am-text-center" style="margin-top: -10px; margin-bottom: -20px; font-size: 20px;">
        <span class="am-intro-title">
            档口报名表
        </span>
    </div>

    <form action="/stall" id="baseInfoForm" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="weui_cells_title">个人信息<span class="am-text-danger">(必填)</span></div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">姓名</label></div>
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
        </div>
        <div class="weui_cells_title">档口信息<span class="am-text-danger">(必填)</span></div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">档口名称</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="stallName" placeholder="请输入档口名称" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">档口号</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="stallNum" placeholder="请输入档口号" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">档口地址</label></div>
            </div>
            <div class="weui_cells" id="global_location1">
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select city" id="city" name="city"></select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select stall" id="stall" name="stall"></select>
                    </div>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">若以上档口地址选择"其它"请填写以下部分</label></div>
            </div>
            <div class="weui_cells" id="global_location">
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select country" id="country" name="country"></select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select province" id="province" name="province"></select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select city" id="city" name="stallCity"></select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select">
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select region" id="region" name="region"></select>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <textarea class="weui_textarea" name="address" placeholder="请输入详细地址" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">
                        档口服装风格
                    </label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="style">
                        <option value="甜美">甜美</option>
                        <option value="欧美">欧美</option>
                        <option value="韩版">韩版</option>
                        <option value="淑女">淑女</option>
                        <option value="文艺">文艺</option>
                        <option value="复古">复古</option>
                        <option value="嘻哈">嘻哈</option>
                        <option value="波西米亚">波西米亚</option>
                        <option value="民族">民族</option>
                        <option value="中性">中性</option>
                        <option value="简约">简约</option>
                        <option value="其他">其他</option>
                    </select>

                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">档口服装类目</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="category" placeholder="请输入服装类目 ">
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd">
                    <label class="">是否支持一件代发</label>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="shipmentOK">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <div class="weui_uploader">
                        <div class="weui_uploader_hd weui_cell">
                            <div class="weui_cell_bd weui_cell_primary">商品照片(最多选6张照片)</div>
                        </div>
                        <div class="weui_uploader_bd">
                            <ul class="weui_uploader_files" id="files" style="display: inline;padding-left: 0;">
                            </ul>
                            <div class="weui_uploader_input_wrp" id="file_upload">
<!--                                <input class="weui_uploader_input" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">-->
                            </div>
                        </div>
                    </div>
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
                <img src="/images/fdcode.jpg">

                <p>负责人飞电微信</p>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="http://y.wcc.cn/statics/js/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="http://y.wcc.cn/statics/js/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="/js/jquery.cxselect.min.js" type="text/javascript"></script>
<script src="http://y.wcc.cn/statics/js/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" charset="utf-8">
    wx.config(<?php echo $js->config(array('chooseImage', 'uploadImage','previewImage')) ?>);
</script>
<script>
    jQuery.cxSelect.defaults.url = '/js/stall.json';
    jQuery('#global_location1').cxSelect({
        selects: ['city', 'stall'],
        nodata: 'none'
    });

    jQuery.cxSelect.defaults.url = '/js/city.json';
    jQuery('#global_location').cxSelect({
        selects: ['country', 'province', 'city', 'region'],
        nodata: 'none'
    });

    var count = 0;
    //图片需一张一张上传
    wx.ready(function () {
        jQuery('#file_upload').click(function () {
            var images = {
                localId: [],
                serverId: []
            };
            $html = '';
            if(count < 6) {
                wx.chooseImage({
                    count: 1, // 限制每次只能选择一张
                    success: function (res) {
                        $.AMUI.progress.start();
                        images.localId = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
                        jQuery.each(images.localId, function (i, n) {
                            wx.uploadImage({
                                localId: n,
                                success: function (res) {
                                    images.serverId[0] = res.serverId;
                                    jQuery.each(images.serverId, function (i, m) {
                                        jQuery.ajax({
                                            url: "/productpicture",
                                            data: {"media_id": m},
                                            success: function (data) {
                                                count = count + 1;
                                                $html += '<li class="weui_uploader_file images" style="background-image:url(' + data + ')"><input type="hidden" id="itemImage" name="itemImage[]" value="' + data + '"/></li>';
                                                $("#files").append($html);
                                                $.AMUI.progress.done();
                                                if(count == 6)
                                                    jQuery("#file_upload").hide();
                                            }
                                        });
                                    });
                                },
                                fail: function (res) {
                                    alert(JSON.stringify(res));
                                }
                            });
                        });
                    }
                });

            }
        });
    });

</script>

<script src="http://y.wcc.cn/statics/amazeui/js/amazeui.min.js"></script>
</body>
</html>