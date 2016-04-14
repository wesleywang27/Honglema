@extends('cms.banner')

@section('content')
<h2><strong style="color:grey;">商家信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">设计师信息列表</h2>
    <a class="fr top_rt_btn" style="float:right">查找</a>
    <input type="text" class="textboxsearch" placeholder="红人搜索"/>
</div>
<table class="table">
    <tr>
        <th>设计师ID</th>
        <th>红人昵称</th>
        <th>项目3</th>
        <th>项目4</th>
        <th>项目5</th>
        <th>项目6</th>
        <th>项目7</th>
    </tr>
    @foreach($designer as $designer)
    <tr>
        <td>{{ $designer->designer_id}}</td>
        <td>{{ $designer->username}}</td>
        <td>{{ $designer->mobile}}</td>
        <td>内容四</td>
        <td>内容五</td>
        <td>内容六</td>
        <td style="text-align:center">
            <a href="view_hr.html"><input type="button" value="查看" class="link_btn" /></a>
            <a href="modify_hr.html"><input type="button" value="修改" class="link_btn"/></a>
            <button class="link_btn" id="showPopTxt">删除</button>
            <!--提示框效果-->
            <script>
                $(document).ready(function(){
                    //弹出文本性提示框
                    $("#showPopTxt").click(function(){
                        $(".pop_bg").fadeIn();
                    });
                    //弹出：确认按钮
                    $(".trueBtn").click(function(){
                        //alert("你点击了确认！");//测试
                        $(".pop_bg").fadeOut();
                    });
                    //弹出：取消或关闭按钮
                    $(".falseBtn").click(function(){
                        //alert("你点击了取消！");//测试
                        $(".pop_bg").fadeOut();
                    });
                });
            </script>
            <section class="pop_bg">
                <div class="pop_cont">
                    <!--title-->
                    <h3>操作提示</h3>
                    <div class="pop_cont_text" style="text-align:center">
                        请确认删除操作
                    </div>
                    <!--bottom:operate->button-->
                    <div class="btm_btn">
                        <input type="button" value="确认" class="input_btn trueBtn"/>
                        <input type="button" value="取消" class="input_btn falseBtn"/>
                    </div>
                </div>
            </section>
            <!--结束：提示框效果-->
        </td>
    </tr>
    @endforeach
</table>
<aside class="paging">
    <a>第一页</a>
    <a>1</a>
    <a>2</a>
    <a>3</a>
    <a>…</a>
    <a>100</a>
    <a>最后一页</a>
</aside>
@endsection