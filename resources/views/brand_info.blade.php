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
            品牌商报名信息
        </span>
    </div>

    <form enctype="multipart/form-data">
        <div class="weui_cells_title">个人信息</div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">姓名：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="username" value="{{ $brand->username}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">手机号码：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="mobile" value="{{ $brand->mobile}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">微信号：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="weixinNo" value="{{ $brand->weixinNo}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">职位：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="title" value="{{ $brand->title}}" readonly/>
                </div>
            </div>
        </div>
        <div class="weui_cells_title">公司信息</div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">公司名称：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="company" value="{{ $brand->company}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">公司地址：</label></div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <textarea class="weui_textarea" name="address" rows="5" readonly>{{ $brand->province }}{{ $brand->city}}{{ $brand->region}}{{ $brand->address}}</textarea>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">品牌名称：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="brand" value="{{ $brand->brand}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">2015年线上销售额：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="sales" value="{{ $brand->sales}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">类目：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="category" value="{{ $brand->category}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">是否自有工厂：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    @if ($brand->factory == 1)
                    <input class="weui_input" type="text" name="factory" value="是" />
                    @else
                    <input class="weui_input" type="text" name="factory" value="否" />
                    @endif
                </div>
            </div>

            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">厂房面积：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="factorySize" value="{{ $brand->factorySize}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">是否有设计团队：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    @if ($brand->designTeam == 1)
                    <input class="weui_input" type="text" name="designTeam" value="是" />
                    @else
                    <input class="weui_input" type="text" name="designTeam" value="否" />
                    @endif
                </div>
            </div>
        </div>

        <div class="weui_cells_title">产品信息</div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">主营产品：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="product" value="{{ $brand->product}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">客单价：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="price" value="{{ $brand->price}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">商品风格：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="style" value="{{ $brand->style}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">客户人群定位：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="customPosition" value="{{ $brand->customPosition}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">客户年龄段：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="customAge" value="{{ $brand->customAge}}" readonly/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">是否支持退换：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    @if ($brand->refund == 1)
                    <input class="weui_input" type="text" name="refund" value="是" />
                    @else
                    <input class="weui_input" type="text" name="refund" value="否" />
                    @endif
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="">红了吗对接人：</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="contact" value="{{ $brand->contact}}" readonly/>
                </div>
            </div>
        </div>

        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="">图片信息：</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <ul class="gallery">
                    @foreach ($pictures as $picture)
                    <img src="{{ $picture->url }}" style="width: 80px; height: 80px;"/>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="weui_cells_title">备注：</div>
        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_bd weui_cell_primary">
                    <textarea class="weui_textarea" name="description" rows="5" readonly>{{ $brand->description}}</textarea>
                </div>
            </div>
        </div>

        <!--
        <div class="weui_btn_area">
            <a href="#"><input class="am-btn am-btn-danger am-btn-block am-round" value="修改"/></a>
        </div>
        -->
        <div class="weui_btn_area">
            <a href="/"><input class="am-btn am-btn-primary am-btn-block am-round" value="返回"/></a>
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
<script type="text/javascript" src="/js/jweixin-1.0.0.js"></script>

<script src="/js/amazeui.min.js"></script>
</body>
</html>