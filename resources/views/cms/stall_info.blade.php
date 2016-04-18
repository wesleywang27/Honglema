@extends('cms.banner')

@section('content')

<h2><strong style="color:grey;">红人信息管理</strong></h2>
<div class="page_title">
    <h2 class="fl">红人信息详情</h2>
</div>
</section>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
        <li><a>其他信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <table border="2" width="700", height="700" style="margin: 20px;">
            <tr>
                <th rowspan=4 width="110">粘贴相片</th>
                <th>姓名：</th>
                <th colspan=3></th>
            </tr>
            <tr>
                <th>年龄：</th>
                <th colspan=3></th>
            </tr>
            <tr>
                <th>性别：</th>
                <th colspan=3>
                    <form>
                        <input type="radio" name="sex" value="male" /> Male
                        <input type="radio" name="sex" value="female" /> Female
                    </form>
                </th>
            </tr>
            <tr>
                <th colspan=4 height="40">学历</th>
            </tr>
            <tr>
                <th rowspan=4>中学阶段</th>
                <th height="40">起止时间</th>
                <th colspan=3>学校名字</th>
            </tr>
            <tr>
                <td height="40"></td>
                <td colspan=3> </td>
            </tr>
            <tr>
                <td height="40"></td>
                <td colspan=3> </td>
            </tr>
            <tr>
                <td height="40"></td>
                <td colspan=3> </td>
            </tr>
            <tr>
                <th rowspan=4>大学阶段</th>
                <th height="40">起止时间</th>
                <th colspan=2>学校名字</th>
                <th>院系</th>
            </tr>
            <tr>
                <td height="40"></td>
                <td colspan=2></td>
                <td></td>
            </tr>
            <tr>
                <td height="40"></td>
                <td colspan=2></td>
                <td></td>
            </tr>
            <tr>
                <td height="40"></td>
                <td colspan=2></td>
                <td></td>
            </tr>
            <tr>
                <th colspan=5 height="40">职历</th>
            </tr>
            <tr>
                <th height="40">起止时间</th>
                <th colspan=3>单位名称</th>
                <th>职位</th>
            </tr>
            <tr>
                <td height="40"></td>
                <th colspan=3></th>
                <th></th>
            </tr>
            <tr>
                <td height="40"></td>
                <th colspan=3></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <th colspan=3></th>
                <td height="40"></td>
            </tr>
        </table>
        <a href="modify_hr.html" style=" margin-left:600px;"><input type="button" value="修改" class="link_btn"/></a>
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
    </div>
    <div class="admin_tab_cont">
        <div class="container">
            <ul class="gallery">

                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
                <li><a href="images/b3.jpg"><img src="images/3.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b4.jpg"><img src="images/4.jpg" /></a></li>
                <li><a href="images/b5.jpg"><img src="images/5.jpg" /></a></li>
                <li><a href="images/b1.jpg"><img src="images/1.jpg" /></a></li>
                <li><a href="images/b2.jpg"><img src="images/2.jpg" /></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/zoom.min.js"></script>
    </div>
    <div class="admin_tab_cont">其他信息</div>
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