@extends('star.star_layouts')

@section('title', "我的任务")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">我的任务</h1>
    </header>
    <div class="content" style="top: 2.5rem;">
        <div class="buttons-tab">
            <a href="#tab1" class="tab-link active button">抢单中</a>
            <a href="#tab2" class="tab-link button">待付款</a>
            <a href="#tab3" class="tab-link button">待发货</a>
        </div>
        <div class="content-block">
            <div class="tabs">
                <div id="tab1" class="tab active">
                    <div class="content-block">



                    </div>
                </div>
                <div id="tab2" class="tab">
                    <div class="content-block">
                        <p>This is tab 2 content</p>
                    </div>
                </div>
                <div id="tab3" class="tab">
                    <div class="content-block">
                        <p>This is tab 3 content</p>
                    </div>
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
        <h1 class="title">提交结果</h1>
        <a class="button button-link button-nav pull-right back" href="#main" onclick="">
            保存
            <span class="save"></span>
        </a>
    </header>
    <div class="content" style="top: 1.2rem;">
        <div class="list-block">
        <ul>
            <li>
                <div class="item-content">
                    <div class="weui_uploader" style="margin-top: .5rem;margin-right: 1.5rem;">
                        <div class="weui_uploader_hd weui_cell">
                            <div class="weui_cell_bd weui_cell_primary">上传6张照片</div>
                        </div>
                        <div class="weui_uploader_bd">
                            <ul class="weui_uploader_files" id="imgfiles" style="padding-left: 0;float: left;">
                                <li class="weui_uploader_file images" style='width:80px;height:80px;background-image: url("/images/nike.jpg")'>
                                    <input type="hidden" id="manyimg1" value="/images/nike.jpg"></li>
                                <li class="weui_uploader_file images" style='width:80px;height:80px;background-image: url("/images/nike.jpg")'>
                                    <input type="hidden" id="manyimg2" value="/images/nike.jpg"></li>
                                <li class="weui_uploader_file images" style='width:80px;height:80px;background-image: url("/images/nike.jpg")'>
                                    <input type="hidden" id="manyimg3" value="/images/nike.jpg"></li>
                            </ul>
                            <div class="weui_uploader_input_wrp" style="width: 80px;height: 80px;float: left;">
                                <input class="weui_uploader_input" id="imgupload" name="imgs[]" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">直播回放链接</div>
                            <div class="item-input">
                                <input id="dnickname" type="text" value="aa">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">观看人数</div>
                            <div class="item-input">
                                <input id="dnickname" type="text" value="aa">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon icon-form-name"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">直播人数</div>
                            <div class="item-input">
                                <input id="dnickname" type="text" value="aa">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="list-block" style="margin-top: -1rem;">
              &nbsp;
        </div>
    </div>

    @include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "result"])



