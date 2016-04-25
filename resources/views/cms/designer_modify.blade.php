@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">设计师信息修改</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@updateDesignerInfo', ['id' => $designer->designer_id]) }}" method="post">
            <table border="2" width="95%" height="300" style="margin: 20px;">
                <tr>
                    <th width="15%">姓名：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="username" value="{{ $designer->username}}" /></td>
                    <th width="15%">手机号码：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="mobile" value="{{ $designer->mobile}}" /></td>
                    <th width="15%">微信号：</th>
                    <td><input style="width: 98%;height: 100%;" name="weixinNo" value="{{ $designer->weixinNo}}" /></td>
                </tr>
                <tr>
                    <th>职位：</th>
                    <td><input style="width: 98%;height: 100%;" name="title" value="{{ $designer->title}}" /></td>
                    <th>设计师类型：</th>
                    <td><input style="width: 98%;height: 100%;" name="designType" value="{{ $designer->designType}}" /></td>
                    <th>公司名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="company" value="{{ $designer->company}}" /></td>
                </tr>
                <tr>
                    <th>公司地址：</th>
                    <td></td>
                    <th>公司所在国家：</th>
                    <td><input style="width: 98%;height: 100%;" name="country" value="{{ $designer->country}}" /></td>
                    <th>公司所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="{{ $designer->province }}" /></td>
                </tr>
                <tr>
                    <th>公司所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="{{ $designer->city}}" />
                    <th>公司所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="{{ $designer->region}}" />
                    <th>公司详细地址：</th>
                    <td><input style="width: 98%;height: 100%;" name="address" value="{{ $designer->address}}" /></td>
                </tr>
                <tr>
                    <th>是否有设计团队：</th>
                    @if ($designer->designTeam == 1)
                    <td><input style="width: 98%;height: 100%;" name="designTeam" value="是" /></td>
                    @else
                    <td><input style="width: 98%;height: 100%;" name="designTeam" value="否" /></td>
                    @endif
                    <th>是否有自己设计的品牌：</th>
                    @if ($designer->brand == 1)
                    <td><input style="width: 98%;height: 100%;" name="brand" value="是" /></td>
                    @else
                    <td><input style="width: 98%;height: 100%;" name="brand" value="否" /></td>
                    @endif
                    <th>设计品牌名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="designBrand" value="{{ $designer->designBrand }}" /></td>
                </tr>
                <tr>
                    <th>设计经历：</th>
                    <td colspan="2"><textarea name="designExperience" style="width: 98%; height: 60px; margin-top: -10px; margin-bottom: -10px;">{{ $designer->designExperience}}</textarea></td>
                    <th>备注：</th>
                    <td colspan="2"><textarea name="description" style="width: 98%; height: 60px; margin-top: -10px; margin-bottom: -10px;">{{ $designer->description}}</textarea></td>
                </tr>
            </table>
            <a href="javascript:history.go(-1);" style=" margin-left:85%;"><input type="button" value="返回" class="link_btn"/></a>
            <input type="submit" value="保存" class="link_btn" style="margin-top: -10px; margin-bottom: -10px;"/>
        </form>
    </div>
    <div class="admin_tab_cont">
        <div class="container">
            <ul class="gallery">
                @foreach ($pictures as $picture)
                <li><a href="{{ $picture->url }}"><img src="{{ $picture->url }}" style="width: 80px;"/></a></li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
        <a href="javascript:history.go(-1);" style=" margin-left:85%;"><input type="button" value="返回" class="link_btn"/></a>
        <script src="/js/jquery-1.9.1.min.js"></script>
        <script src="/js/zoom.min.js"></script>
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

@endsection