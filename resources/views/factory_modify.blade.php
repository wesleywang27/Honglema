<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>红了吗网红供应链合作报名</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/weui.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/admin.css">

    <script src="/js/jquery.min.js"></script>
    <script src="/js/handlebars.min.js"></script>
    <script src="/js/amazeui.widgets.helper.js"></script>
</head>
<body>
<header data-am-widget="header" class="am-header am-header-default" style="background-color: #DD514C">
    <div class="am-header-left am-header-nav">
        <a href="/">
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
            工厂报名信息
        </span>
    </div>

    <form action="/factory_modify" id="baseInfoForm" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="weui_cells_title">个人信息</div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">姓名：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="username" value="{{ $factory->username}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">手机号码：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="mobile" value="{{ $factory->mobile}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">微信号：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="weixinNo" value="{{ $factory->weixinNo}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">职位：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="title" value="{{ $factory->title}}" readonly/>
                </div>
            </div>
        </div>
        <div class="weui_cells_title">公司信息</div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">公司名称：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="company" value="{{ $factory->company}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">公司地址：</label></div>
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
                        <textarea class="weui_textarea" name="address" placeholder="请输入详细地址" rows="5">{{ $factory->address}}</textarea>
                    </div>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">产品类目：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="category">
                        <option value="{{ $factory->category}}">{{ $factory->category}}</option>
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
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">优势子类目：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="advantageSubcategory" value="{{ $factory->advantageSubcategory}}" readonly/>
                </div>
            </div>
        </div>
        <div class="weui_cells_title">工厂信息</div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">工厂面积(m2)：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="ext1" value="{{ $factory->ext1}}" readonly/>
                </div>
            </div>

            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">工人数：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="ext2" value="{{ $factory->ext2}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">打样速度：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="ext5" value="{{ $factory->ext5}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">最小起订量：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" name="orderCount" value="{{ $factory->orderCount}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">日生产量：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" name="productCount" value="{{ $factory->productCount}}" readonly/>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">是否有设计师或设计团队：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="design">
                        @if ($factory->design == 1)
                        <option value="1">是</option>
                        <option value="0">否</option>
                        @else
                        <option value="0">否</option>
                        <option value="1">是</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">是否支持退换：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="refund">
                        @if ($factory->refund == 1)
                        <option value="1">是</option>
                        <option value="0">否</option>
                        @else
                        <option value="0">否</option>
                        <option value="1">是</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd"><label class="">是否支持一件代发：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="shipmentOK">
                        @if ($factory->shipmentOK == 1)
                        <option value="1">是</option>
                        <option value="0">否</option>
                        @else
                        <option value="0">否</option>
                        <option value="1">是</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">工厂主要付款方式：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="zhangqi" value="{{ $factory->zhangqi}}" readonly/>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd">
                    <label class="">红了吗对接人：</label>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="contact">
                        <option value="{{ $factory->contact}}">{{ $factory->contact}}</option>
                        <option value="地文">地文</option>
                        <option value="零陵">零陵</option>
                        <option value="左权">左权</option>
                        <option value="三清">三清</option>
                        <option value="天闲">天闲</option>
                        <option value="静宁">静宁</option>
                        <option value="紫荆">紫荆</option>
                        <option value="千岛">千岛</option>
                        <option value="飞电">飞电</option>
                        <option value="其他">其他</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="">图片信息：</label></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <ul class="gallery">
                    @foreach ($pictures as $picture)
                    <img src="{{ $picture->url }}" style="width: 80px; height: 80px;"/>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <div class="weui_uploader">
                        <div class="weui_uploader_hd weui_cell">
                            <div class="weui_cell_bd weui_cell_primary">继续上传</div>
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
        <div class="weui_cells_title">备注：</div>
        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <textarea class="weui_textarea" name="description" rows="5" readonly>{{ $factory->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="weui_btn_area">
            <input class="am-btn am-btn-danger am-btn-block am-round" id="saveSubmit" name="commit" type="submit" value="保存"/>
        </div>
        <div class="weui_btn_area">
            <a href="/" class="am-btn am-btn-primary am-btn-block am-round">返回</a>
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
<script type="text/javascript" src="/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="/js/jquery.fileupload.js"></script>
<script src="/js/jquery.cxselect.min.js" type="text/javascript"></script>
<script src="/js/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" charset="utf-8">
    wx.config(<?php echo $js->config(array('chooseImage', 'uploadImage','previewImage')) ?>);
</script>
<script>
    jQuery.cxSelect.defaults.url = '/js/city.json';
    jQuery('#global_location').cxSelect({
        selects: ['country', 'province', 'city', 'region'],
        nodata: 'none'
    });

    //上传多图
    //    jQuery('#fileupload').change(function(){
    //        $.AMUI.progress.start();
    //        jQuery.ajaxFileUpload({
    //            url:"/productpicture",//需要链接到服务器地址
    //            secureuri:false,
    //            fileElementId:"fileupload",//文件选择框的id属性
    //            dataType: 'json',   //json
    //            success: function (data, status) {
    //                var urls = data.urls;
    //                var $htmls = '';
    //                for(var i=0; i<urls.length; i++){
    //                    $htmls += '<li class="weui_uploader_file images" style="background-image:url('+urls[i]+')"><input type="hidden" id="itemImage" name="itemImage[]" value="'+urls[i]+'"/></li>';
    //                }
    //                $('#files').append($htmls);
    //                $.AMUI.progress.done();
    //            }
    //        });
    //    });
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
                        //$.AMUI.progress.start();
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
                                                //$.AMUI.progress.done();
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

<script src="/js/amazeui.min.js"></script>
</body>
</html>