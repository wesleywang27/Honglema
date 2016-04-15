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
    <h1 class="am-header-title" style="margin: 0px; font-size: 20px;">
        红了吗网红供应链合作报名
    </h1>
</header>

<div>
    <div class="am-intro-default am-padding-sm am-text-center" style="margin-top: -10px; margin-bottom: -20px; font-size: 20px;">
        <span class="am-intro-title">
            品牌商报名表
        </span>
    </div>

    <form action="brand" id="baseInfoForm" method="post" enctype="multipart/form-data">
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
            </div>
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <textarea class="weui_textarea" name="address" placeholder="请输入详细地址" rows="5"></textarea>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">品牌名称</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="brand" placeholder="品牌名称" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">2015年线上销售额</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="sales" placeholder="2015年线上销售额" required>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">
                    类目
                        </label>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="category">
                        <option value="女装">女装</option>
                        <option value="男装">男装</option>
                        <option value="内衣">内衣</option>
                        <option value="鞋靴">鞋靴</option>
                        <option value="帽子">帽子</option>
                        <option value="食品">食品</option>
                        <option value="数码家电">数码家电</option>
                        <option value="家居家纺">家居家纺</option>
                        <option value="家具建材">家具建材</option>
                        <option value="珠宝饰品">珠宝饰品</option>
                        <option value="户外运动">户外运动</option>
                        <option value="母婴">母婴</option>
                        <option value="美妆">美妆</option>
                        <option value="箱包">箱包</option>
                        <option value="汽车">汽车</option>
                        <option value="百货">百货</option>
                        <option value="情趣用品">情趣用品</option>
                        <option value="其他">其他</option>
                    </select>

                </div>
            </div>
            <!--
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd">
                    是否有天猫店铺
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="tMall">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd">
                    是否接受贴牌
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="tie">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>
            -->
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">
                    是否自有工厂
                        </label>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="factory">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>

            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">厂房面积</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="factorySize" placeholder="厂房面积">
                </div>
            </div>
            <!--
            <div class="weui_cell">
                <div class="weui_cell_hd">外发工厂数量</div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="number" name="factoryOut" placeholder="外发工厂数量" required>
                </div>
            </div>
            -->
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">
                    是否有设计团队
                        </label>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="design">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
            </div>
            <!--
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">账期(可选)</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="zhangqi" placeholder="账期">
                </div>
            </div>
            -->
        </div>

        <div class="weui_cells_title">产品信息<span class="am-text-danger">(必填)</span></div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">主营产品</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="product" placeholder="主营产品" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">客单价</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="price" placeholder="客单价" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">商品风格</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="style" placeholder="商品风格" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">客户人群定位</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="customPosition" placeholder="客户人群定位" required>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">客户年龄段</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="customAge" placeholder="客户年龄段" required>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">
                    是否支持退换
                        </label>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="refund">
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
                            <div class="weui_cell_bd weui_cell_primary">商品照片(一次上传最多选6张照片)</div>
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

    wx.config({"debug":false,"appId":"wx024e9c8cc8941ef3","timestamp":"1460007211","nonceStr":"fc861053-7043-4a3a-bccd-2f9c7bddf4e7","signature":"460d84e121808057c769349dbeb24a453a1337f2","jsApiList":["onMenuShareTimeline","onMenuShareAppMessage"]});

    wx.ready(function () {
        wx.onMenuShareAppMessage({
            title : "网红合作商家报名",
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
            title : "网红合作商家报名",
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