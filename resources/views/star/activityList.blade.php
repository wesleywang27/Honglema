@extends('star.star_layouts')

@section('title', "活动广场（试用版）")

@section('body')
@section('page-main')
	<header class="bar bar-nav">
		<h1 class="title">活动广场</h1>
	</header>
<div class="content infinite-scroll infinite-scroll-bottom" data-distance="50" style="top: 2rem;">
      @foreach ($list as $vo)
      <?php
      	$merchant = App\Models\Merchant::where('merchant_id',$vo->merchant_id)->first();
      ?>
        <div class="content-block content-block-my content-no-margin ">
         	<div class="content-block content-block-my">
		   		<div class="list-block content-no-margin" style="margin-top: -1.3rem;">
				  	<ul>
					   	<li>
					        <div class="item-content">
					            <div class="item-inner">
					                <div class="item-title">{{$merchant['name']}}</div>
					            </div>
					        </div>
					    </li>
				   	</ul>
		   		</div>
		  		<div class="list-block media-list content-no-margin">
				    <ul>
				      <li>
				        <a href="/star/activityDetail/{{$vo['activity_id']}}" class="blackfont item-content">
				          <div class="item-media" style="margin-left:-0.3rem; margin-right:0"><img src="{{$vo['picture']}}" style='width: 6rem;'></div>
				          <div class="item-inner" style="background-color:#f0f0f0; margin: 0.4rem; padding-bottom:0">
				            <div class="item-title" style="margin-left:0.3rem; text-align: center;">{{$vo['title']}}</div>
				            <div class="item-subtitle" style="margin-left:0.3rem; text-align: center;">¥&nbsp;{{$vo['total_price']}}</div>
				            <div class="item-title" style="background-color:#ee5555; color:#ffffff; text-align:center;width:100%;  position:absolute; bottom:0; left:0; right:0;">马上抢单</div>
				          </div>
				        </a>
				      </li>
				    </ul>
			  	</div>
			</div>
      	</div>
      	@endforeach
		  <div class="infinite-scroll-preloader" style="margin-top:-20px">
			  <div class="preloader"></div>
		  </div>
  </div>
@include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "main"])