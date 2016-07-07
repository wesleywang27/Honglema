@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">红人信息修改</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('StarController@starUpdate', ['id' => $star->star_id]) }}" method="post">
            <table border="2" width="95%" height="400" style="margin: 20px;">
            <tr>
                <th width="10%">红人昵称</th>
                <td width="13%" style="text-align:center"><input style="width: 98%;height: 100%;" name="name" value="{{ $star->name}}" /></td>
                <th width="12%">性别</th>
                <td width="13%" style="text-align:center">
                  <select style="width: 98%;height: 100%;" name="sex">
                      <option value="0" @if ($star->sex == 0) selected @endif >未知</option>
                      <option value="1" @if ($star->sex == 1) selected @endif >男</option>
                      <option value="2" @if ($star->sex == 2) selected @endif >女</option>
                  </select>
                </td>
                <th width="12%">所在地区：</th>
                <td width="13%" style="text-align:center"><input style="width: 98%;height: 100%;" name="location" value="{{ $star->location}}" /></td>
            </tr>
            <tr>
                <th>真实姓名</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="real_name" value="{{ $star->real_name}}" /></td>
                <th>身份证号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="ID_number" value="{{ $star->ID_number}}" /></td>
                <th>手机号码</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="cellphone" value="{{ $star->cellphone}}" /></td>
            </tr>
            <tr>
                <th>红了吗编号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="honglema_id" value="{{ $star->honglema_id}}" /></td>
                <th>支付宝账号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="alipay_account" value="{{ $star->alipay_account}}" /></td>
                <th>红人标签</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="tag" value="{{ $star->tag}}" /></td>
            </tr>
            <tr>
                <th colspan="6" style="height:10px;"></th>
            </tr>
            <tr>
                <th>身高</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="height" value="{{ $star->height}}" /></td>
                <th>体重</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="weight" value="{{ $star->weight}}" /></td>
                <th>罩杯</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="cup" value="{{ $star->cup}}" /></td>
            </tr>
            <tr>
                <th>年龄</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="age" value="{{ $star->age}}" /></td>
                <th>职业</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="occupation" value="{{ $star->occupation}}" /></td>
                <th>学历</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="education" value="{{ $star->education}}" /></td>
            </tr>
            <tr>
                <th colspan="6" style="height:10px;"></th>
            </tr>
            <tr>
                <th>微信账号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="wechat" value="{{ $star->wechat}}" /></td>
                <th>微博账号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="weibo_id" value="{{ $star->weibo_id}}" /></td>
                <th>微拍账号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="weipai_id" value="{{ $star->weipai_id}}" /></td>
            </tr>
            <tr>
                <th>秒拍账号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="miaopai_id" value="{{ $star->miaopai_id}}" /></td>
                <th>美拍账号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="maipai_id" value="{{ $star->meipai_id}}" /></td>
                <th>快手账号</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="kuaishou_id" value="{{ $star->kuaishou_id}}" /></td>
            </tr>
            <tr>
                <th colspan="6" style="height:10px;"></th>
            </tr>
            <tr>
                <th>上衣尺寸</th>
                <td style="text-align:center">
                    <select style="width: 98%;height: 100%;" name="shirt_size">
                      <option value="S" @if ($star->shirt_size == 'S') selected @endif >S</option>
                      <option value="M" @if ($star->shirt_size == 'M') selected @endif >M</option>
                      <option value="L" @if ($star->shirt_size == 'L') selected @endif >L</option>
                      <option value="XL" @if ($star->shirt_size == 'XL') selected @endif >XL</option>
                      <option value="XXL" @if ($star->shirt_size == 'XXL') selected @endif >XXL</option>
                      <option value="XXXL" @if ($star->shirt_size == 'XXXL') selected @endif >XXXL</option>
                  </select>
                </td>
                <th>下衣尺寸</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="pants_size" value="{{ $star->pants_size}}" /></td>
                <th>鞋子尺寸</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="shoes_size" value="{{ $star->shoes_size}}" /></td>
            </tr>
            <tr>
                <th colspan="6" style="height:10px;"></th>
            </tr>
            <tr>
                <th>省</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="province" value="{{ $star->province}}" /></td>
                <th>市</th>
                <td style="text-align:center"><input style="width: 98%;height: 100%;" name="city" value="{{ $star->city}}" /></td>
                <th style="text-align:center">区</th>
                <td><input style="width: 98%;height: 100%;" name="region" value="{{ $star->region}}" /></td>
            </tr>
            <tr>
                <th>详细地址</th>
                <td colspan="5"><input style="width: 98%;height: 100%;" name="address" value="{{ $star->address}}" /></td>
            </tr>
            <tr>
                <th width="12%">经历：</th>
                <td colspan="5"><input style="width: 98%;height: 100%;" name="experience" value="{{ $star->experience}}" /></td>
            </tr>
            </table>
            <a href="/didi/StarInfo/{{ $star->star_id }}" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 40px;"/>
        </form>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection
