@extends('star.star_layouts')

@section('title', "提交结果")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
     <a class="button button-link button-nav pull-left back" href="window.history(-1)">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">提交结果</h1>
        <a class="button button-link button-nav pull-right" href="#" onclick="$.submmitTaskResult({{$order_id}})">
  保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 2.5rem;">
        <div class="content-block"  style="padding: 0px;margin:0">
       <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="weui_uploader" style="margin-top: .5rem;margin-right: 1.5rem;">
                            <div class="weui_uploader_hd weui_cell">
                                <div class="weui_cell_bd weui_cell_primary">上传4张照片</div>
                            </div>
                            <div class="weui_uploader_bd">
                                <ul class="weui_uploader_files" id="taskimgs" style="padding-left: 0;float: left;">

                                </ul>
                                <div class="weui_uploader_input_wrp" style="width: 80px;height: 80px;float: left;">
                                    <input class="weui_uploader_input" id="taskimgupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                </ul>
                </div>

        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#linkurl" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">直播回放链接</div>
                            <div id="f_url" class="item-after"> </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="list-block" style="margin-top: -1rem;">
            <ul>
                <li>
                    <a href="#totalAudiance" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">观看人数 </div>
                            <div id="f_viewnumber" class="item-after"> </div>
                        </div>
                    </a>
                </li>
                 <li>
                    <a href="#time" class="item-link item-content">
                        <div class="item-inner">
                            <div class="item-title">直播时长</div>
                            <div id="f_dtime" class="item-after"> </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
                </div>
        </div>                
    </div>
    @include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "main"])

@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">直播回放链接</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('url')">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">直播回放链接</div>
                            <div class="item-input">
                                <textarea rows="3" cols="20" id="url" type="text" ></textarea>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "linkurl"])


@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">观看人数</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('viewnumber')">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">观看人数</div>
                            <div class="item-input">
                                <input id="viewnumber" type="text" value="">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "totalAudiance"])



@section('page-main')
    <header class="bar bar-nav">
        <a class="button button-link button-nav pull-left back" href="#main">
            <span class="icon icon-left"></span>
            返回
        </a>
        <h1 class="title">直播时长</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="$.set_value('dtime')">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">直播时长</div>
                            <div class="item-input">
                                <input id="dtime" type="text" value="">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "time"])



 

