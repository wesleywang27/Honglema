@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">品牌商信息详情</h2>
</div>
</section>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <table border="2" width="95%" height="360" style="margin: 20px;">
            <tr>
                <th width="15%">姓名：</th>
                <td width="17%">{{ $brand->username}}</td>
                <th width="15%">手机号码：</th>
                <td width="17%">{{ $brand->mobile}}</td>
                <th width="15%">微信号：</th>
                <td width="16%">{{ $brand->weixinNo}}</td>
            </tr>
            <tr>
                <th>职位：</th>
                <td>{{ $brand->title}}</td>
                <th>公司名称：</th>
                <td>{{ $brand->company}}</td>
                <th>品牌名称：</th>
                <td>{{ $brand->brand}}</td>
            </tr>
            <tr>
                <th>公司地址：</th>
                <td colspan="5">{{ $brand->country}}{{ $brand->province}}{{ $brand->city}}{{ $brand->region}}{{ $brand->address}}</td>
            </tr>
            <tr>
                <th>2015年线上销售额：</th>
                <td>{{ $brand->sales}}</td>
                <th>类目：</th>
                <td>{{ $brand->category}}</td>
                <th>是否自有工厂：</th>
                @if ($brand->factory == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
            </tr>
            <tr>
                <th>厂房面积：</th>
                <td>{{ $brand->factorySize}}</td>
                <th>是否有设计团队：</th>
                @if ($brand->design == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>主营产品：</th>
                <td>{{ $brand->product}}</td>
            </tr>
            <tr>
                <th>客单价：</th>
                <td>{{ $brand->price}}</td>
                <th>商品风格：</th>
                <td>{{ $brand->style}}</td>
                <th>客户人群定位：</th>
                <td>{{ $brand->customPosition}}</td>
            </tr>
            <tr>
                <th>客户年龄段：</th>
                <td>{{ $brand->customAge}}</td>
                <th>是否支持退换：</th>
                @if ($brand->refund == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th>备注：</th>
                <td colspan="5"><textarea name="description" style="width: 99%; height: 60px; margin-top: -13px; margin-bottom: -15px;" readonly>{{ $brand->description}}</textarea></td>
            </tr>
        </table>
        <a href="/cms/brand" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
        <input type="button" value="修改" class="link_btn"/>
        <a href="{{URL::action('CMSController@deleteBrand', ['id' => $brand->brand_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
    </div>
    <div class="admin_tab_cont">
        <div class="container">
            <ul class="gallery">
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/zoom.min.js"></script>
    </div>
</section>
<!--tabStyle-->
<script>
    $(document).ready(function(){
        //tab
        $(".admin_tab li a").click(function(){
            var liindex = $(".admin_tab li a").index(this);
            $(this).addClass("active").parent().siblings().find("a").removeClass("active");
            $(".admin_tab_cont").eq(liindex).fadeIn(150).siblings(".admin_tab_cont").hide();
        });
    });
</script>
</div>

@endsection