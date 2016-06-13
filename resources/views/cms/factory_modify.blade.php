@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">工厂信息修改</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
        <li><a>图片信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@updateFactoryInfo', ['id' => $factory->factory_id]) }}" method="post">
            <table border="2" width="95%" height="360" style="margin: 20px;">
                <tr>
                    <th width="15%">姓名：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="username" value="{{ $factory->username}}" /></td>
                    <th width="15%">手机号码：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="mobile" value="{{ $factory->mobile}}" /></td>
                    <th width="15%">微信号：</th>
                    <td><input style="width: 98%;height: 100%;" name="weixinNo" value="{{ $factory->weixinNo}}" /></td>
                </tr>
                <tr>
                    <th>职位：</th>
                    <td><input style="width: 98%;height: 100%;" name="title" value="{{ $factory->title}}" /></td>
                    <th>公司名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="company" value="{{ $factory->company}}" /></td>
                    <th>公司所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="{{ $factory->province }}" /></td>
                </tr>
                <tr>
                    <th>公司所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="{{ $factory->city}}" /></td>
                    <th>公司所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="{{ $factory->region}}" /></td>
                    <th>公司详细地址：</th>
                    <td><input style="width: 98%;height: 100%;" name="address" value="{{ $factory->address}}" /></td>
                </tr>
                <tr>
                    <th>类目：</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="category">
                            <option value="{{ $factory->category}}">{{ $factory->category}}</option>
                            <option value="女装">女装</option>
                            <option value="男装">男装</option>
                            <option value="内衣">内衣</option>
                            <option value="鞋靴">鞋靴</option>
                            <option value="帽子">帽子</option>
                            <option value="食品">食品</option>
                            <option value="数码家电">数码家电</option>
                            <option value="家居家纺">家居家纺</option>
                            <option value="家具建材">家具建材</option>
                            <option value="珠宝饰品">珠宝饰品</option>
                            <option value="户外运动">户外运动</option>
                            <option value="母婴">母婴</option>
                            <option value="美妆">美妆</option>
                            <option value="箱包">箱包</option>
                            <option value="汽车">汽车</option>
                            <option value="百货">百货</option>
                            <option value="情趣用品">情趣用品</option>
                            <option value="其他">其他</option>
                        </select>
                    </td>
                    <th>优势子类目：</th>
                    <td><input style="width: 98%;height: 100%;" name="advantageSubcategory" value="{{ $factory->advantageSubcategory}}" /></td>
                    <th>工厂面积：</th>
                    <td><input style="width: 98%;height: 100%;" name="ext1" value="{{ $factory->ext1}}" /></td>
                </tr>
                <tr>
                    <th>工人数：</th>
                    <td><input style="width: 98%;height: 100%;" name="ext2" value="{{ $factory->ext2}}" /></td>
                    <th>打样速度：</th>
                    <td><input style="width: 98%;height: 100%;" name="ext5" value="{{ $factory->ext5}}" /></td>
                    <th>最小起订量：</th>
                    <td><input style="width: 98%;height: 100%;" name="orderCount" value="{{ $factory->orderCount}}" /></td>
                </tr>
                <tr>
                    <th>日生产量：</th>
                    <td><input style="width: 98%;height: 100%;" name="productCount" value="{{ $factory->productCount}}" /></td>
                    <th>是否有设计团队：</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="design">
                            @if ($factory->design == 1)
                            <option value="1">是</option>
                            <option value="0">否</option>
                            @else
                            <option value="0">否</option>
                            <option value="1">是</option>
                            @endif
                        </select>
                    </td>
                    <th>是否支持退换：</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="refund">
                            @if ($factory->refund == 1)
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
                    <th>是否支持一件代发：</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="shipmentOK">
                            @if ($factory->shipmentOK == 1)
                            <option value="1">是</option>
                            <option value="0">否</option>
                            @else
                            <option value="0">否</option>
                            <option value="1">是</option>
                            @endif
                        </select>
                    </td>
                    <th>主要付款方式：</th>
                    <td><input style="width: 98%;height: 100%;" name="zhangqi" value="{{ $factory->zhangqi}}" /></td>
                    <th>红了吗对接人</th>
                    <td>
                        <select style="width: 100%;height: 100%;" name="contact">
                            <option value="{{ $factory->contact}}">{{ $factory->contact}}</option>
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
                            @if ($factory->cooperation == 1)
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
                    <th>备注：</th>
                    <td colspan="5"><textarea name="description" style="width: 99.3%; height: 60px; margin-top: -6px; margin-bottom: -8px;">{{ $factory->description}}</textarea></td>
                </tr>
            </table>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 40px;"/>
            <a href="javascript:history.back();" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
        </form>
    </div>
    <div class="admin_tab_cont">
        <form action="{{URL::action('CMSController@updateFactoryImg', ['id' => $factory->factory_id]) }}" method="post">
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