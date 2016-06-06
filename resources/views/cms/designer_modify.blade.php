@extends('cms.banner')

@section('content')

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
                    <td>
                        <select style="width: 100%;height: 100%;" name="designType">
                            <option value="{{ $designer->designType}}">{{ $designer->designType}}</option>
                            <option value="职业设计师">职业设计师</option>
                            <option value="贴牌设计师">贴牌设计师</option>
                            <option value="高级定制设计师">高级定制设计师</option>
                            <option value="个体设计师">个体设计师</option>
                            <option value="独立设计师">独立设计师</option>
                        </select>
                    </td>
                    <th>公司名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="company" value="{{ $designer->company}}" /></td>
                </tr>
                <tr>
                    <th>公司所在国家：</th>
                    <td><input style="width: 98%;height: 100%;" name="country" value="{{ $designer->country}}" /></td>
                    <th>公司所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="{{ $designer->province }}" /></td>
                    <th>公司所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="{{ $designer->city}}" /></td>
                </tr>
                <tr>
                    <th>公司所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="{{ $designer->region}}" /></td>
                    <th>公司详细地址：</th>
                    <td><input style="width: 98%;height: 100%;" name="address" value="{{ $designer->address}}" /></td>
                    <th>是否有设计团队：</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="designTeam">
                            @if ($designer->designTeam == 1)
                            <option value="1">是</option>
                            <option value="0">否</option>
                            @else
                            <option value="0">否</option>
                            <option value="1">是</option>
                            @endif
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>是否有自己设计的品牌：</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="brand">
                            @if ($designer->brand == 1)
                            <option value="1">是</option>
                            <option value="0">否</option>
                            @else
                            <option value="0">否</option>
                            <option value="1">是</option>
                            @endif
                        </select>
                    </td>
                    <th>设计品牌名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="designBrand" value="{{ $designer->designBrand }}" /></td>
                    <th>红了吗对接人：</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="contact">
                            <option value="{{ $designer->contact}}">{{ $designer->contact}}</option>
                            <option value="地文">地文</option>
                            <option value="零陵">零陵</option>
                            <option value="左权">左权</option>
                            <option value="三清">三清</option>
                            <option value="天闲">天闲</option>
                            <option value="静宁">静宁</option>
                            <option value="紫荆">紫荆</option>
                            <option value="千岛">千岛</option>
                            <option value="飞电">飞电</option>
                            <option value="其他">其他</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>已合作：</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="cooperation">
                            @if ($designer->cooperation == 1)
                            <option value="1">是</option>
                            <option value="0">否</option>
                            @else
                            <option value="0">否</option>
                            <option value="1">是</option>
                            @endif
                        </select>
                    </td>
                    <th></th>
                    <td></td>
                    <th></th>
                    <td></td>
                </tr>
                <tr>
                    <th>设计经历：</th>
                    <td colspan="2"><textarea name="designExperience" style="width: 98.2%; height: 60px; margin-top: -6px; margin-bottom: -8px;">{{ $designer->designExperience}}</textarea></td>
                    <th>备注：</th>
                    <td colspan="2"><textarea name="description" style="width: 98.4%; height: 60px; margin-top: -6px; margin-bottom: -8px;">{{ $designer->description}}</textarea></td>
                </tr>
            </table>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 40px;"/>
            <a href="javascript:history.back();" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
        </form>
    </div>
    <div class="admin_tab_cont">
        <form action="{{URL::action('CMSController@updateDesignerImg', ['id' => $designer->designer_id]) }}" method="post">
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
                <ul id="files" style="display: inline;padding-left: 0;">
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
                    $htmls += '<li style="width: 80px; height: 80px;background-image:url('+urls[i]+')"><input type="hidden" id="itemImage" name="itemImage[]" value="'+urls[i]+'"/></li>';
                }
                $('#files').append($htmls);
            }
        });
    });
</script>

@endsection