@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">红人信息详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
        <li><a>统计信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@updateCelebrityInfo', ['id' => $celebrity->id]) }}" method="post">
            <?php echo csrf_field(); ?>
            <table border="2" width="95%" height="360" style="margin: 20px;">
                <tr>
                    <th width="12%">网络昵称：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="nickname" value="{{ $celebrity->nickname}}"/></td>
                    <th width="12%">真实姓名：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="realname" value="{{ $celebrity->realname}}"/></td>
                    <th width="12%">性别：</th>
                    @if ($celebrity->sex == 1)
                    <td width="13%"><input style="width: 98%;height: 100%;" name="sex" value="女"/></td>
                    @else
                    <td width="13%"><input style="width: 98%;height: 100%;" name="sex" value="男"/></td>
                    @endif
                    <th width="12%">生日：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="birthday" value="{{ $celebrity->birthday}}"/></td>
                </tr>
                <tr>
                    <th width="12%">城市：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="city" value="{{ $celebrity->city}}"/></td>
                    <th width="12%">学历：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="education" value="{{ $celebrity->education}}"/></td>
                    <th width="12%">身高：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="height" value="{{ $celebrity->height}}"/></td>
                    <th width="12%">体重：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="weight" value="{{ $celebrity->weight}}"/></td>
                </tr>
                <tr>
                    <th width="12%">胸围：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="bust" value="{{ $celebrity->bust}}"/></td>
                    <th width="12%">腰围：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="waist" value="{{ $celebrity->waist}}"/></td>
                    <th width="12%">臀围：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="hop" value="{{ $celebrity->hop}}"/></td>
                    <th width="12%">年收入：</th>
                    @if ($celebrity->annual_income == 0)
                    <td width="13%"><input style="width: 98%;height: 100%;" name="annual_income" value="10万以下"/></td>
                    @elseif ($celebrity->annual_income == 1)
                    <td width="13%"><input style="width: 98%;height: 100%;" name="annual_income" value="10~30万"/></td>
                    @elseif ($celebrity->annual_income == 2)
                    <td width="13%"><input style="width: 98%;height: 100%;" name="annual_income" value="30~50万"/></td>
                    @elseif ($celebrity->annual_income == 3)
                    <td width="13%"><input style="width: 98%;height: 100%;" name="annual_income" value="50万以上"/></td>
                    @endif
                </tr>
                <tr>
                    <th width="12%">职业：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="occupation" value="{{ $celebrity->occupation}}"/></td>
                    <th width="12%">手机号码：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="cellphone" value="{{ $celebrity->cellphone}}"/></td>
                    <th width="12%">微信账号：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="wechat_id" value="{{ $celebrity->wechat_id}}"/></td>
                    <th width="12%">微博账号：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="weibo_nickname" value="{{ $celebrity->weibo_nickname}}"/></td>
                </tr>
                <tr>
                    <th width="12%">全网粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="total_fans_num" value="{{ $celebrity->total_fans_num}}"/></td>
                    <th width="12%">微博粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="weibo_fans_num" value="{{ $celebrity->weibo_fans_num}}"/></td>
                    <th width="12%">微拍粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="weipai_fans_num" value="{{ $celebrity->weipai_fans_num}}"/></td>
                    <th width="12%">美拍粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="meipai_fans_num" value="{{ $celebrity->meipai_fans_num}}"/></td>
                </tr>
                <tr>
                    <th width="12%">快手粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="kuaishou_fans_num" value="{{ $celebrity->kuaishou_fans_num}}"/></td>
                    <th width="12%">秒拍粉丝数量：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="miaopai_fans_num" value="{{ $celebrity->miaopai_fans_num}}"/></td>
                    <th width="12%">标签：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="tags" value="{{ $celebrity->tags}}"/></td>
                    <th width="12%">特长：</th>
                    <td width="13%"><input style="width: 98%;height: 100%;" name="skills" value="{{ $celebrity->skills}}"/></td>
                </tr>
                <tr>
                    <th width="12%">联系地址：</th>
                    <td colspan="3"><textarea style="width: 98.5%;height: 40px;margin-top: -8px; margin-bottom: -10px;" name="address" >{{ $celebrity->address}}</textarea></td>
                    <th width="12%">性格：</th>
                    <td colspan="3"><textarea style="width: 98.5%;height: 40px;margin-top: -8px; margin-bottom: -10px;" name="personality" >{{ $celebrity->personality}}</textarea></td>
                </tr>
                <tr>
                    <th width="12%">经历：</th>
                    <td colspan="7"><textarea style="width: 99.5%;height: 40px;margin-top: -8px; margin-bottom: -10px;" name="experience" >{{ $celebrity->experience}}</textarea></td>
                </tr>
            </table>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 40px;"/>
            <a href="javascript:history.back();" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
        </form>
    </div>

    <div class="admin_tab_cont">
        <form action="{{URL::action('CMSController@updateCelebrityImg', ['id' => $celebrity->id]) }}" method="post">
            <div class="container">
                <ul class="gallery">
                    @foreach ($pictures as $picture)
                    <li><a href="{{ $picture->url }}"><img src="{{ $picture->url }}" style="width: 80px; height: 80px;"/></a><label><input name="img[]" type="checkbox" value="{{ $picture->url }}" style="margin-top:5px;"/></label></li>
                    @endforeach
                </ul>
                <label class="uploadImg" style="margin-top:10px; margin-left:10px;">
                    <input type="file" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple=""/>
                    <span>上传图片</span>
                </label>
                <ul class="gallery" id="files" style="display: inline;padding-left: 0;">
                </ul>
                <div class="clear"></div>
            </div>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 15%;"/>
            <input type="submit" value="删除" class="link_btn" style="float: right; margin-right: 5px;"/>
            <a href="javascript:history.back();" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
        </form>
        <script src="/js/jquery-1.9.1.min.js"></script>
        <script src="/js/zoom.min.js"></script>
    </div>

    <div class="admin_tab_cont">

    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/ajaxfileupload.js" charset="utf-8"></script>
<script>
    $(document).ready(function(){
        //tab
        $(".admin_tab li a").click(function(){
            var liindex = $(".admin_tab li a").index(this);
            $(this).addClass("active").parent().siblings().find("a").removeClass("active");
            $(".admin_tab_cont").eq(liindex).fadeIn(150).siblings(".admin_tab_cont").hide();
        });
    });

    jQuery('#fileupload').change(function(){
        jQuery.ajaxFileUpload({
            url:"/productPicture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:"fileupload",//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                var $htmls = '';
                for(var i=0; i<urls.length; i++){
                    $htmls += '<li><img src="'+urls[i]+'" style="width: 80px; height: 80px;"/><input type="hidden" id="itemImage" name="itemImage[]" value="'+urls[i]+'"/></li>';
                }
                $('#files').append($htmls);
            }
        });
    });
</script>

@endsection