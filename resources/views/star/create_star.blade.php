@extends('star.star')
@section('back', '&nbsp;')
@section('title', '注册')
<style>
    .create_profile{
        height: 150px;
        width: 100%;
    }
    .profile_cell{
        background-color: white;
        height: 90px;
        width: 100%;
        border-bottom: 1px lightgrey solid;
        border-top: 1px lightgrey solid;
    }
    .profile_label{
        margin-left: 10px;
        height: 100%;
        float: left;
    }
    .profile_label span{
        height: 90px;
        float: left;
        line-height: 90px;
    }
    .profile_cell img{
        margin-left: 20px;
        margin-top: 15px;
        height: 60px;
        width: 60px;
        border-radius: 50%;
    }
    .edit_icon a
    {
        margin-right: 10px;
        height: 90px;
        float: right;
        line-height: 90px;
    }
    .input_cell{
        background-color: white;
        height: 40px;
        width: 100%;
        border-bottom: 1px lightgrey solid;
        border-top: 1px lightgrey solid;
    }
    .input_cell input{
        border: none;
        height: 30px;;
    }
    .input_label{
        margin-left: 10px;
        height: 100%;
        float: left;
    }
    .input_label span{
        height: 40px;
        float: left;
        line-height: 40px;
    }
    .input_icon a{
        margin-right: 10px;
        height: 40px;
        float: right;
        line-height: 40px;
    }
    .next{
        margin: 0 auto;
        width: 70px;
        height: 40px;
        display: block;
        line-height: 40px;
    }
    .album{
        height: 150px;
        border: 1px solid lightgrey;
    }
    .album_cell{
        margin-top: 10px;;
        margin-left: 10px;
        height: 60px;
        width: 60px;
        float: left;
    }
    .album img{
        height: 60px;
        width: 60px;
        border: 1px solid black;
    }
    </style>
<script>
function next(i){
    $('#register'+i).css("display","none");
    i++;
    $('#register'+i).css("display","block");
}

function submitForm(){
        $("#registerform").submit();
    }
    </script>
@section('nav')
    <form id="registerform" action="{{ URL::action('StarController@register') }}" method="post">
        <div id="register1">
    <div id="" class="create_profile">
        <div class="profile_cell">
        <div class="profile_label"><span>头像</span><a href="#"><img src="/images/profile.jpg"></a></div>
        <div class="edit_icon">  <a href="#">&nbsp;<i class="icon-angle-right "></i>&nbsp;</a></div>
    </div>
        <div class="input_cell">
            <div class="input_label">
            <span>昵称</span>
            </div>
            <div class="input_icon">  <a href="#">&nbsp;<input name="name" placeholder="sex">&nbsp;</a></div>
        </div>
        <div class="input_cell">
            <div class="input_label">
                <span>性别</span>
            </div>
            <div class="input_icon">  <a href="#">&nbsp;<input name="sex" placeholder="sex">&nbsp;</a></div>
        </div>
        <div class="input_cell">
            <div class="input_label">
                <span>地区</span>
            </div>
            <div class="input_icon">  <a href="#">&nbsp;<input name="location" placeholder="location">&nbsp;</a></div>
        </div>

        <br>

        <div class="input_cell">
            <div class="input_label">
                <span>罩杯</span>
            </div>
            <div class="input_icon">
                <a href="javascript:showInput('罩杯')">&nbsp;&nbsp;<i class="icon-angle-right "></i>&nbsp;</a></div>
        </div>
        <div class="input_cell">
            <div class="input_label">
                <span>体重</span>
            </div>
            <div class="input_icon">  <a href="#">&nbsp;<input name="weight" placeholder="weight">&nbsp;</a></div>
        </div>
        <div class="input_cell">
            <div class="input_label">
                <span>身高</span>
            </div>
            <div class="input_icon">  <a href="#">&nbsp;<input name="height" placeholder="height">&nbsp;</a></div>
        </div>

        <div class="input_cell">
            <div class="input_label">
                <span>年龄</span>
            </div>
            <div class="input_icon">  <a href="#">&nbsp;<input name="age" placeholder="age">&nbsp;</a></div>
        </div>
        <div class="input_cell">
            <div class="input_label">
                <span>职业</span>
            </div>
            <div class="input_icon">  <a href="#">&nbsp;<input name="occupation" placeholder="occupation">&nbsp;</a></div>
        </div>
        <div class="input_cell">
            <div class="input_label">
                <span>学历</span>
            </div>
            <div class="input_icon">  <a href="#">&nbsp;<input name="education" placeholder="education">&nbsp;</a></div>
        </div>
        <br>
        <div class="input_cell">
          <a href="javascript:next(1)"> <span class="next"> 下一步 </span></a>
        </div>
    </div>
   </div>

        <div id="register2" style="display: none">
            <div id="" class="album">
                <div class="album_cell"><img src="/images/profile.jpg"></div>
                <div class="album_cell"><img src="/images/profile.jpg"></div>
                <div class="album_cell"><img src="/images/profile.jpg"></div>
                <div class="album_cell"><img src="/images/profile.jpg"></div>
                <div class="album_cell"><img src="/images/profile.jpg"></div>
                <div class="album_cell"><img src="/images/profile.jpg"></div>
                </div>

                <div class="input_cell">
                    <div class="input_label">
                        <span>经历</span>
                    </div>
                    <div class="input_icon">
                        <a href="#">&nbsp;<input name="experience" placeholder="experience">&nbsp;</a></div>
                </div>
                <div class="input_cell">
                    <div class="input_label">
                        <span>身份认证</span>
                    </div>
                    <div class="input_icon">  <a href="#">&nbsp;<input name="ID_number" placeholder="ID_number">&nbsp;</a></div>
                </div>
                <div class="input_cell">
                    <div class="input_label">
                        <span>手机认证</span>
                    </div>
                    <div class="input_icon">  <a href="#">&nbsp;<input name="cellphone" placeholder="cellphone">&nbsp;</a></div>
                </div>

                <div class="input_cell">
                    <div class="input_label">
                        <span>微博ID</span>
                    </div>
                    <div class="input_icon">  <a href="#">&nbsp;<input name="weibo_id" placeholder="weibo_id">&nbsp;</a></div>
                </div>
            <div class="input_cell">
                <div class="input_label">
                    <span>微拍ID</span>
                </div>
                <div class="input_icon">  <a href="#">&nbsp;<input name="weipai_id" placeholder="weipai_id">&nbsp;</a></div>
            </div>
            <div class="input_cell">
                <div class="input_label">
                    <span>秒拍ID</span>
                </div>
                <div class="input_icon">  <a href="#">&nbsp;<input name="miaopai_id" placeholder="miaopai_id">&nbsp;</a></div>
            </div>
                <div class="input_cell">
                    <div class="input_label">
                        <span>美拍ID</span>
                    </div>
                    <div class="input_icon">  <a href="#">&nbsp;<input name="meipai_id" placeholder="meipai_id">&nbsp;</a></div>
                </div>
            <div class="input_cell">
                <div class="input_label">
                    <span>快手ID</span>
                </div>
                <div class="input_icon">  <a href="#">&nbsp;<input name="kuaishou_id" placeholder="kuaishou_id">&nbsp;</a></div>
            </div>
                <br>
                <div class="input_cell">
                    <a href="javascript:next(2)"> <span class="next"> 下一步 </span></a>
                </div>
            </div>

        <div id="register3" style="display: none">
            <div id="" class="album">
                <button>社交达人</button> <button>社交达人</button> <button>社交达人</button> <button>社交达人</button>s
            </div>

            <div class="input_cell">
                <div class="input_label">
                    <span>衣服尺寸</span>
                </div>
                <div class="input_icon">
                    <a href="#">&nbsp;<input name="experience" placeholder="experience">&nbsp;</a></div>
            </div>
            <div class="input_cell">
                <div class="input_label">
                    <span>收货地址</span>
                </div>
                <div class="input_icon">  <a href="#">&nbsp;<input name="ID_number" placeholder="ID_number">&nbsp;</a></div>
            </div>
            <div class="input_cell">
                <div class="input_label">
                    <span>微信号</span>
                </div>
                <div class="input_icon">  <a href="#">&nbsp;<input name="cellphone" placeholder="cellphone">&nbsp;</a></div>
            </div>
            <div class="input_cell">
                <div class="input_label">
                    <span>支付宝账号</span>
                </div>
                <div class="input_icon">  <a href="#">&nbsp;<input name="weibo_id" placeholder="weibo_id">&nbsp;</a></div>
            </div>

            <br>
            <div class="input_cell">
                <a href="javascript:submitForm()"> <span class="next"> 下一步 </span></a>
            </div>
        </div>
        </form>
    @endsection