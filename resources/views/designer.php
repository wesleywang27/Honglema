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
        红了吗网红供应链合作报名
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
                <div class="weui_cell_hd"><label class="">
                    设计师类型
                        </label>
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
        <div class="weui_cells_title">公司信息<span class="am-text-danger">(必填)</span></div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">公司名称</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="company" placeholder="请输入公司名称" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">公司地址</label></div>
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
                        <select class="weui_select city" id="city" name="city"></select>
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
        </div>

        <div class="weui_cells_title">个人设计经历<span class="am-text-danger">(必填)</span></div>
        <div class="weui_cells">
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
            <div class="weui_cells_title">设计品牌名称</div>
            <div class="weui_cells weui_cells_form">
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <textarea class="weui_textarea" name="designBrand" placeholder="设计的品牌" rows="5">无</textarea>
                    </div>
                </div>
            </div>
            <div class="weui_cells_title">设计经历</div>
            <div class="weui_cells weui_cells_form">
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <textarea class="weui_textarea" name="designExperience" placeholder="设计经历" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <div class="weui_uploader">
                        <div class="weui_uploader_hd weui_cell">
                            <div class="weui_cell_bd weui_cell_primary">设计作品(一次上传最多选6张照片)</div>
                        </div>
                        <div class="weui_uploader_bd">
                            <ul class="weui_uploader_files" id="files">
                            </ul>
                            <div class="weui_uploader_input_wrp">
                                <input class="weui_uploader_input" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="weui_cells_title">备注(选填)</div>
        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <textarea class="weui_textarea" name="description" placeholder="请输入备注" rows="5"></textarea>
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
<script type="text/javascript" src="/js/ajaxfileupload.js" charset="utf-8"></script>
<script type="text/javascript" src="http://y.wcc.cn/statics/js/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="http://y.wcc.cn/statics/js/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.cxselect.min.js" type="text/javascript"></script>
<script src="http://y.wcc.cn/statics/js/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script>
    jQuery.cxSelect.defaults.url = '/js/city.json';
    jQuery('#global_location').cxSelect({
        selects: ['country', 'province', 'city', 'region'],
        nodata: 'none'
    });


    //上传多图
    jQuery('#fileupload').change(function(){
        $.AMUI.progress.start();
        jQuery.ajaxFileUpload({
            url:"/productpicture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:"fileupload",//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                var $htmls = '';
                for(var i=0; i<urls.length; i++){
                    $htmls += '<li class="weui_uploader_file images" style="background-image:url('+urls[i]+')"><input type="hidden" id="itemImage" name="itemImage[]" value="'+urls[i]+'"/></li>';
                }
                $('#files').append($htmls);
                $.AMUI.progress.done();
                $('.weui_uploader_input_wrp').hide();
            }
        });
    });

</script>


<script src="http://y.wcc.cn/statics/amazeui/js/amazeui.min.js"></script>
</body>
</html>