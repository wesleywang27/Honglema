@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">添加推广活动</h2>
</div>
<form action="{{URL::action('ActivityController@activityStore', ['id' => $merchant_id]) }}" method="post" style="margin-left: 30%">
    <?php echo csrf_field(); ?>
    <div style="margin-top: 20px;">
        <label>活动名称：</label>
        <input class="textbox textbox_225" type="text" name="title" placeholder="请输入活动名称" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>活动要求：</label>
        <input class="textbox textbox_225" type="text" name="claim" placeholder="请输入活动要求" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>活动时间：</label>
        <input class="textbox textbox_225" type="text" name="time_within" placeholder="收货后多久直播" value="" required>
    </div>
    <div style="margin-top: 20px;">
        <label>活动形式：</label>
        <select class="select" name="level">
            @foreach ($price_levels as $price_level)
            <option value="{{ $price_level->pl_id }}">{{ $price_level->level }}</option>
            @endforeach
        </select>
    </div>
    <div class="container">
        <label style="float: left">活动图片：</label>
        <label id="up" class="uploadImg" style="margin-top:10px; margin-left:10px;">
            <span>上传图片</span>
            <input type="file" id="fileupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="" />
        </label>
        <ul class="gallery" id="files" style="display: inline;padding-left: 0;">
        </ul>
        <div class="clear"></div>
    </div>
    <div style="margin-top: 20px;">
        <input name="commit" type="submit" value="确认" class="link_btn" style="margin-left: 14%"/>
        <a href="/didi/MerchantList"  class="link_btn" style="margin-left: 5%">取消</a>
    </div>
</form>
<script type="text/javascript" src="/js/ajaxfileupload.js" charset="utf-8"></script>
<script>
    var count = 0;
    jQuery('#fileupload').change(function(){
        jQuery.ajaxFileUpload({
            url:"/productPicture",//需要链接到服务器地址
            secureuri:false,
            fileElementId:"fileupload",//文件选择框的id属性
            dataType: 'json',   //json
            success: function (data, status) {
                var urls = data.urls;
                var $htmls = '';
                var i = 0;
                $htmls += '<li><img src="'+urls[i]+'" style="width: 80px; height: 80px;"/><input type="hidden" id="itemImage" name="itemImage[]" value="'+urls[i]+'"/></li>';
                $('#files').append($htmls);
                count++;
                if(count == 2){
                    document.getElementById('up').style.display='none';
                }
            }
        });
    });
</script>
@endsection