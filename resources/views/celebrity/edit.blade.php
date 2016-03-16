@extends('layouts.jquery_mobile_app')

@section('title', "创建用户")

@section('additional_head')
<script>
    $(function() {
        $('#test').click(function() {
            $.ajax({
                url: "/celebrity/6",
                method: "PATCH",
                data: {sex: 0},
                success: function($data) {
                    console.log($data);
                }
            });
        });
    });
</script>
@endsection


@section('body')
    @section('page-main')
        <ul data-role="listview">
            <li>
                    <div id='test' class="ui-grid-a">
                        <div class="ui-block-a">头像</div>
                        <div class="ui-block-b">微信头像</div>
                    </div>
            </li>

            <li>
                <a href="#nickname">
                    <div class="ui-grid-a">
                        <div class="ui-block-a">昵称</div>
                        <div class="ui-block-b">小玩子</div>
                    </div>
                </a>
            </li>

            <li>
                <a href="#gender">
                    <div class="ui-grid-a">
                        <div class="ui-block-a">性别<div style="color:#ECA96E;">注册后性别无法更改</div></div>
                        <div class="ui-block-b">
                            <a href="#" class="ui-btn ui-btn-inline">男</a>
                            <a href="#" class="ui-btn ui-btn-inline">女</a>
                        </div>
                    </div>
                </a>
            </li>

            <li>
                <a href="#gender">
                    <div class="ui-grid-a">
                        <div class="ui-block-a">地区</div>
                        <div class="ui-block-b">北京海滨区</div>
                    </div>
                </a>
            </li>
        </ul>
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "main"])


    @section('page-main')
        头像页面
    @overwrite
    @include('partial/jquery_mobile_page', ["page_id" => "img"])
@endsection
