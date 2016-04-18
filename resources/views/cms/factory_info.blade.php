@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">工厂信息详情</h2>
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
                <td width="17%">{{ $factory->username}}</td>
                <th width="15%">手机号码：</th>
                <td width="17%">{{ $factory->mobile}}</td>
                <th width="15%">微信号：</th>
                <td>{{ $factory->weixinNo}}</td>
            </tr>
            <tr>
                <th>职位：</th>
                <td>{{ $factory->title}}</td>
                <th>公司名称：</th>
                <td>{{ $factory->company}}</td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th>公司地址：</th>
                <td colspan="5">{{ $factory->country}}{{ $factory->province}}{{ $factory->city}}{{ $factory->region}}{{ $factory->address}}</td>
            </tr>
            <tr>
                <th>产品类目：</th>
                <td>{{ $factory->category}}</td>
                <th>优势子类目：</th>
                <td>{{ $factory->advantageSubcategory}}</td>
                <th>工厂面积：</th>
                <td>{{ $factory->ext1}}</td>
            </tr>
            <tr>
                <th>工人数：</th>
                <td>{{ $factory->ext2}}</td>
                <th>打样速度：</th>
                <td>{{ $factory->ext5}}</td>
                <th>最小起订量：</th>
                <td>{{ $factory->orderCount}}</td>
            </tr>
            <tr>
                <th>日生产量：</th>
                <td>{{ $factory->productCount}}</td>
                <th>是否有设计团队：</th>
                @if ($factory->design == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>是否支持退换：</th>
                @if ($factory->refund == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
            </tr>
            <tr>
                <th>是否支持一件代发：</th>
                @if ($factory->shipmentOK == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>是否接受贴牌：</th>
                @if ($factory->tie == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>备注：</th>
                <td>{{ $factory->description}}</td>
            </tr>
        </table>
        <a href="/cms/factory" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
        <input type="button" value="修改" class="link_btn"/>
        <a href="{{URL::action('CMSController@deleteFactory', ['id' => $factory->factory_id]) }}"><input type="button" value="删除" class="link_btn"/></a>
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