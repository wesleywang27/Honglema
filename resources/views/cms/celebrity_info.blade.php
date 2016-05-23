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
        <table border="2" width="95%" height="360" style="margin: 20px;">
            <tr>
                <th width="12%">网络昵称：</th>
                <td width="13%">{{ $celebrity->nickname}}</td>
                <th width="12%">真实姓名：</th>
                <td width="13%">{{ $celebrity->realname}}</td>
                <th width="12%">性别：</th>
                @if ($celebrity->sex == 1)
                <td width="13%">女</td>
                @else
                <td width="13%">男</td>
                @endif
                <th width="12%">生日：</th>
                <td width="13%">{{ $celebrity->birthday}}</td>
            </tr>
            <tr>
                <th width="12%">城市：</th>
                <td width="13%">{{ $celebrity->city}}</td>
                <th width="12%">学历：</th>
                <td width="13%">{{ $celebrity->education}}</td>
                <th width="12%">身高：</th>
                <td width="13%">{{ $celebrity->height}}</td>
                <th width="12%">体重：</th>
                <td width="13%">{{ $celebrity->weight}}</td>
            </tr>
            <tr>
                <th width="12%">胸围：</th>
                <td width="13%">{{ $celebrity->bust}}</td>
                <th width="12%">腰围：</th>
                <td width="13%">{{ $celebrity->waist}}</td>
                <th width="12%">臀围：</th>
                <td width="13%">{{ $celebrity->hop}}</td>
                <th width="12%">年收入：</th>
                @if ($celebrity->annual_income == 0)
                <td width="13%">10万以下</td>
                @elseif ($celebrity->annual_income == 1)
                <td width="13%">10~30万</td>
                @elseif ($celebrity->annual_income == 2)
                <td width="13%">30~50万</td>
                @elseif ($celebrity->annual_income == 3)
                <td width="13%">50万以上</td>
                @endif
            </tr>
            <tr>
                <th width="12%">职业：</th>
                <td width="13%">{{ $celebrity->occupation}}</td>
                <th width="12%">手机号码：</th>
                <td width="13%">{{ $celebrity->cellphone}}</td>
                <th width="12%">微信账号：</th>
                <td width="13%">{{ $celebrity->wechat_id}}</td>
                <th width="12%">微博账号：</th>
                <td width="13%">{{ $celebrity->weibo_nickname}}</td>
            </tr>
            <tr>
                <th width="12%">全网粉丝数量：</th>
                <td width="13%">{{ $celebrity->total_fans_num}}</td>
                <th width="12%">微博粉丝数量：</th>
                <td width="13%">{{ $celebrity->weibo_fans_num}}</td>
                <th width="12%">微拍粉丝数量：</th>
                <td width="13%">{{ $celebrity->weipai_fans_num}}</td>
                <th width="12%">美拍粉丝数量：</th>
                <td width="13%">{{ $celebrity->meipai_fans_num}}</td>
            </tr>
            <tr>
                <th width="12%">快手粉丝数量：</th>
                <td width="13%">{{ $celebrity->kuaishou_fans_num}}</td>
                <th width="12%">秒拍粉丝数量：</th>
                <td width="13%">{{ $celebrity->miaopai_fans_num}}</td>
                <th width="12%">标签：</th>
                <td width="13%">{{ $celebrity->tags}}</td>
                <th width="12%">特长：</th>
                <td width="13%">{{ $celebrity->skills}}</td>
            </tr>
            <tr>
                <th width="12%">联系地址：</th>
                <td colspan="3">{{ $celebrity->address}}</td>
                <th width="12%">性格：</th>
                <td colspan="3">{{ $celebrity->personality}}</td>
            </tr>
            <tr>
                <th width="12%">经历：</th>
                <td colspan="7">{{ $celebrity->experience}}</td>
            </tr>
        </table>
        <a href="{{URL::action('CMSController@deleteCelebrity', ['id' => $celebrity->id]) }}" onclick="return confirm('确定要删除吗？')"><input type="button" value="删除" class="link_btn" style="float: right; margin-right: 40px;"/></a>
        <a href="{{URL::action('CMSController@modifyCelebrityInfo', ['id' => $celebrity->id]) }}"><input type="button" value="修改" class="link_btn" style="float: right; margin-right: 5px;"/></a>
        <a href="javascript:history.back();" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
    </div>

    <div class="admin_tab_cont">
        <form action="#" method="post">
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