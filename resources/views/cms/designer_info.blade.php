@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">设计师信息详情</h2>
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
                <td width="17%">{{ $designer->username}}</td>
                <th width="15%">手机号码：</th>
                <td width="17%">{{ $designer->mobile}}</td>
                <th width="15%">微信号：</th>
                <td width="16%">{{ $designer->weixinNo}}</td>
            </tr>
            <tr>
                <th>职位：</th>
                <td>{{ $designer->title}}</td>
                <th>设计师类型：</th>
                <td>{{ $designer->designType}}</td>
                <th>公司名称：</th>
                <td>{{ $designer->company}}</td>
            </tr>
            <tr>
                <th>公司地址：</th>
                <td colspan="5">{{ $designer->country}}{{ $designer->province}}{{ $designer->city}}{{ $designer->region}}{{ $designer->address}}</td>
            </tr>
            <tr>
                <th>是否有设计团队：</th>
                @if ($designer->designTeam == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>是否有自己的设计品牌：</th>
                @if ($designer->brand == 1)
                <td>是</td>
                @else
                <td>否</td>
                @endif
                <th>设计品牌名称：</th>
                <td>{{ $designer->designBrand}}</td>
            </tr>
            <tr>
                <th>设计经历：</th>
                <td colspan="2"><textarea name="description" style="width: 98%; height: 100px; margin-top: -22px; margin-bottom: -25px;" readonly>{{ $designer->designExperience}}</textarea></td>
                <th>备注：</th>
                <td colspan="2"><textarea name="description" style="width: 98%; height: 100px; margin-top: -22px; margin-bottom: -25px;" readonly>{{ $designer->description}}</textarea></td>
            </tr>
        </table>
        <a href="/cms/designer" style=" margin-left:80%;"><input type="button" value="返回" class="link_btn"/></a>
        <input type="button" value="修改" class="link_btn"/>
        <a href="{{URL::action('CMSController@deleteDesigner', ['id' => $designer->designer_id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn"/></a>
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