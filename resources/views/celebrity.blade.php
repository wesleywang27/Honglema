@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>single-page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
	<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/fav-icon.png')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/swiper.min.css')}}">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	</script>
	<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
			<script src="{{URL::asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript">
		var $ = jQuery.noConflict();
		$(function() {
			$('#activator').click(function(){
				$('#box').animate({'top':'0px'},500);
			});
			$('#boxclose').click(function(){
				$('#box').animate({'top':'-700px'},500);
			});
		});
		$(document).ready(function(){
			//Hide (Collapse) the toggle containers on load
			$(".toggle_container").hide();
			//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
			$(".trigger").click(function(){
				$(this).toggleClass("active").next().slideToggle("slow");
				return false; //Prevent the browser jump to the link anchor
			});

		});
	</script>
	<style>
		html, body {
			position: relative;
			height: 100%;
		}
		body {
			background: #eee;
			font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
			font-size: 14px;
			color:#000;
			margin: 0;
			padding: 0;
		}
		.swiper-container {
			width: 100%;
			height: 500px;
			background-color: #f0f0f0;
		}
		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #f6f6f6;

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
			background-size: auto 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		.chart{
			width: 100%;
			margin: 0 auto;
			margin-bottom: 0;
		}
		.titlelabel{
			display: inline-block;
			margin-top: 10px;
			border-color: darkgray #FFFFFF darkgray darkgray;
			border-style: solid;
			border-width: 10px 5px 10px 5px;
			width:60%;
			height:0;
			line-height: 0px;
		}
		@media screen and (max-width: 720px){
			.swiper-container {
				width: 100%;
				height: 600px;
			}
		}
		@media screen and (max-width: 400px){
			.swiper-container {
				width: 100%;
				height: 500px;
			}
		}
		@media screen and (max-width: 330px){
			.swiper-container {
				width: 100%;
				height: 430px;
			}
		}
		.boysandgirls{
			width:100%;
			margin-top: 8px;
			padding-bottom: 5px;
		}
		.girls {
			color: #f3bac9;
			padding-left: 10px;
		}
		.boys {
			float:right;
			color: #ccdc83;
			padding-right: 10px;
		}
		.n19{
			color: #9acff7;
			padding-left: 5px;
		}
		.n49{
			float:right;
			color: #45aaf2;
			padding-right: 10px;
		}
		.n29n39{
			width:100%;
			padding-top: 5px;
		}
		.n29{
			color: #4390c8;
		}
		.n39{
			float:right;
			color: #74c1f9;
			padding-right: 4px;
		}
	</style>
</head>
<body>
<div class="content">
	<div class="wrap">
		<div class="single-page">
			<div class="single-page-artical">
				<div class="artical-content">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							@foreach ( $celebrity->pictures as $picture)
							<div class="swiper-slide" style="background-image: url('{{ $picture->url }}')"></div>
							@endforeach
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
					<h3><a style="margin-left:1em;color:black;padding-bottom: 10px;" href="#">红了吗红人&nbsp;|&nbsp;{{$celebrity->nickname}}&nbsp;&nbsp;
							@if( $celebrity->sex == 1)
							<img src="{{URL::asset('images/girl.png')}}" style="width:0.8em;">
							@else
							<img src="{{URL::asset('images/boy.png')}}" style="width:0.8em;">
							@endif
							<img src="{{URL::asset('images/vdaren.png')}}" style="width:3em;"></a>
					</h3>
					<div style="padding-top:10px;padding-bottom: 15px;">
						<ul>
							<li style="font-size: 12px;">标签：&nbsp;
								<?php
								$tmp = explode("、",$celebrity->tags);
								foreach($tmp as $t){
									echo "#".$t."  ";
								}
								?>
							</li>
						</ul>
						<ul>
							<li style="font-size: 12px;">总粉丝:{{ $celebrity->total_fans_num }}</li>
						</ul>
						<ul style="margin-top: 5px;padding-left: 15px;">
							@foreach(array("weibo"=>"微博","weipai"=>"微拍","meipai"=>"美拍","miaopai"=>"秒拍","kuaishou"=>"快手") as $plt => $name)
							@if(floor($celebrity->{$plt.'_fans_num'}/10000) != 0)
							<li style="border: 1px solid gray;border-radius: 8px;padding-left:5px;padding-bottom:5px;padding-right:3px;margin-left:5px;">
								<a style="color:gray;font-size: 10px;" href="{{ $celebrity->{$plt.'_link'} }}">{{$name}}{{ floor($celebrity->{$plt.'_fans_num'}/10000) }}w</a>
							</li>
							@endif
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		@if( $celebrity->fans_profile && $celebrity->fans_profile->total_fans > 1000 )
		<div class="single-page" style="margin-top:1em;">
			<div class="single-page-artical">
				<div class="artical-content">
					<div class="chart" style="margin-top:1em;">
						<div style="position: absolute;background: rgba(0,0,0,0);width: 100%;height: 400px;"></div>
						<div style="width: 48%;display: inline-block;float: left;">
							<div class="titlelabel">粉丝男女比例</div>
							<div class="boysandgirls">
								<span class="girls">女:&nbsp;{{ floor(($celebrity->fans_profile->female_fans / $celebrity->fans_profile->total_fans) * 100) }}%</span>
								<span class="boys">男:&nbsp;{{ 100 - floor(($celebrity->fans_profile->female_fans / $celebrity->fans_profile->total_fans) * 100) }}%</span>
							</div>
							<div style="width: 56%;display: inline-block;margin-left: 23%;">
								<canvas id="chart-area" width="180" height="180"/>
							</div>
						</div>
						<div style="width: 48%;display: inline-block;float: right;padding-left:10px;border-left: 1px dashed lightgray;">
							<div class="titlelabel" style="margin-left: -10px;">粉丝年龄比例</div>
							<div class="boysandgirls">
								<span class="n19">≤19岁:&nbsp;{{ floor($celebrity->fans_profile->fans_age_group1 / $celebrity->fans_profile->fans_with_age * 100) }}%</span>
								<span class="n49">≥40岁:&nbsp;{{ floor($celebrity->fans_profile->fans_age_group4 / $celebrity->fans_profile->fans_with_age * 100) }}%</span>
							</div>
							<div style="width: 56%;display: inline-block;margin-left: 20%;">
								<canvas id="chart-area2" width="180" height="180"/>
							</div>
							<div class="n29n39">
								<span class="n29">20~29:{{ floor($celebrity->fans_profile->fans_age_group2 / $celebrity->fans_profile->fans_with_age * 100) }}%</span>
								<span class="n39">30~39:{{ floor($celebrity->fans_profile->fans_age_group3 / $celebrity->fans_profile->fans_with_age * 100) }}%</span>
							</div>
						</div>
					</div>
					<div style="width: 100%; border-top: 1px dashed lightgray; float:left;">
						<div class="titlelabel" style="width: 30%;">粉丝地区排名</div>
						<canvas id="canvas" width="200" height="100"></canvas>
					</div>
				</div>
			</div>
		</div>
		@endif
		<div class="single-page" style="margin-top:1em;">
			<div class="single-page-artical">
				<div class="artical-content">
					<div class="info">
						<table>
							<tr>
								<td>三围：&nbsp;{{ $celebrity->bust }}/{{ $celebrity->waist }}/{{ $celebrity->hop }}</td>
								<td>身高：&nbsp;{{ $celebrity->height }}</td>
							</tr>
							<tr>
								<td>体重：&nbsp;{{ $celebrity->weight }}</td>
								<td>年龄：&nbsp;{{ 2016 - floor($celebrity->birthday / 10000) }}</td>
							</tr>
							<tr>
								<td>城市：&nbsp;{{ $celebrity->city }}</td>
								<td>职业：&nbsp;{{ $celebrity->occupation }}</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="single-page" style="margin-top:1em;">
			<div class="single-page-artical">
				<div class="artical-content">
					<div>
						<table class="jianjie">
							<tr>
								<td style="width:17%;">经历</td>
								<td style="width:83%;padding-right: 6%;padding-top: 15px;padding-bottom: 15px;">{{ $celebrity->experience }}</td>
							</tr>
						</table>
						<div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-page" style="margin-top:1em;">
			<div class="single-page-artical">
				<div class="artical-content">
					<div>
						<table class="jianjie">
							<tr>
								<td style="width:17%;">简介</td>
								<td style="width:83%;padding-right: 6%;padding-top: 15px;padding-bottom: 15px;">{{ $celebrity->personality }}</td>
							</tr>
						</table>
						<div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<!-- Swiper JS -->
<script src="{{URL::asset('js/swiper.min.js')}}"></script>
<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		loop: true,
	});
</script>
<script src="{{URL::asset('js/Chart.Core.js')}}"></script>
<script src="{{URL::asset('js/Chart.Doughnut.js')}}"></script>
<script src="{{URL::asset('js/Chart.js')}}"></script>
@if( $celebrity->fans_profile && $celebrity->fans_profile->total_fans != 0 )
<script>
	var doughnutData = [
		{
			value: {{ $celebrity->fans_profile->total_fans - $celebrity->fans_profile->female_fans }},
			label: "男",
			color: "#ccdc83"
		},
		{
			value: {{ $celebrity->fans_profile->female_fans }},
			label: "女",
			color: "#f3bac9"
		}
		];
	var doughnutData2 = [
		{
			value: {{ $celebrity->fans_profile->fans_age_group4 }},
			color: "#45aaf2",
			label: "≥49"
		},
		{
			value: {{ $celebrity->fans_profile->fans_age_group3 }},
			color: "#74c1f9",
			label: "30~39"
		},
		{
			value: {{ $celebrity->fans_profile->fans_age_group2 }},
			color: "#4390c8",
			label: "20~29"
		},
		{
			value: {{ $celebrity->fans_profile->fans_age_group1 }},
			color: "#9acff7",
			label: "≤19"
		}
		];

	var barChartData = {
		labels : ["{{$celebrity->fans_profile->fans_city1}}","{{$celebrity->fans_profile->fans_city2}}","{{$celebrity->fans_profile->fans_city3}}","{{$celebrity->fans_profile->fans_city4}}","{{$celebrity->fans_profile->fans_city5}}","{{$celebrity->fans_profile->fans_city6}}"],
		datasets : [
			{
				fillColor : "rgba(245,162,58,0.8)",
				strokeColor : "rgba(245,162,58,0.8)",
				data : [
					{{$celebrity->fans_profile->fans_num_city1}},
					{{$celebrity->fans_profile->fans_num_city2}},
					{{$celebrity->fans_profile->fans_num_city3}},
					{{$celebrity->fans_profile->fans_num_city4}},
					{{$celebrity->fans_profile->fans_num_city5}},
					{{$celebrity->fans_profile->fans_num_city6}}
				]
			}
		]}


	window.onload = function(){
		var ctx = document.getElementById("chart-area").getContext("2d");
		window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});

		var ctx2 = document.getElementById("chart-area2").getContext("2d");
		window.myDoughnut = new Chart(ctx2).Doughnut(doughnutData2, {responsive : true});

		var ctx3 = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx3).Bar(barChartData, {
			responsive : true
		});
	};
</script>
@endif
</html>
@endsection
