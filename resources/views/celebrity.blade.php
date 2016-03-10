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
			margin: 10px auto;
			margin-bottom: 0;
		}
		.titlelabel{
			display: inline-block;
			margin-top: 3px;
			margin-left: 0;
			float:left;
			padding-left: 8px;
			width: 50%;
			line-height: 20px;
			font-size: 10px;
			background-color: darkgray;
		}
		.tail{
			display: inline-block;
			margin-top: 3px;
			float:left;
			border-color: darkgray #FFFFFF darkgray darkgray;
			border-style: solid;
			border-width: 10px 5px 10px 5px;
			width:0;
			height:0;
		}
		@media screen and (max-width: 720px){
			.swiper-container {
				width: 100%;
				height: 600px;
			}
			.girls {
				position:absolute;
				margin-left: 8px;
				margin-top: 30px;
				color: #f3bac9;
			}
			.boys {
				position:absolute;
				margin-left: 35%;
				margin-top: 170px;
				color: #ccdc83;
			}
		}
		@media screen and (max-width: 400px){
			.swiper-container {
				width: 100%;
				height: 500px;
			}
			.girls {
				position:absolute;
				margin-left: 5%;
				margin-top: 30px;
				color: #f3bac9;
			}
			.boys {
				position:absolute;
				margin-left: 35%;
				margin-top: 155px;
				color: #ccdc83;
			}
		}
		@media screen and (max-width: 330px){
			.swiper-container {
				width: 100%;
				height: 430px;
			}
			.girls {
				position:absolute;
				margin-left: 5px;
				margin-top: 30px;
				color: #f3bac9;
			}
			.boys {
				position:absolute;
				margin-left: 34%;
				margin-top: 133px;
				color: #ccdc83;
			}
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
					<h3><a style="margin-left:1em;color:black;" href="#">红了吗红人&nbsp;|&nbsp;{{$celebrity->nickname}}&nbsp;&nbsp;
							@if( $celebrity->sex == 1)
							<img src="{{URL::asset('images/girl.png')}}" style="width:0.8em;">
							@else
							<img src="{{URL::asset('images/boy.png')}}" style="width:0.8em;">
							@endif
							<img src="{{URL::asset('images/vdaren.png')}}" style="width:3em;"></a>
					</h3>
					<p>
					<ul>
						<li style="font-size: 12px;">标签：&nbsp;{{ $celebrity->tags }}</li>
					</ul>
					<ul>
						<li style="font-size: 12px;">总粉丝{{ $celebrity->total_fans_num }}</li>
					</ul>
					<ul style="margin-top: 5px;">
						<li style="font-size: 11px;border: 1px solid gray;border-radius: 8px;padding: 4px;">
							<a style="color:gray;" href="{{$celebrity->weibo_link}}">微博{{ floor($celebrity->weibo_fans_num/10000) }}w</a>
						</li>
<!--						<li style="font-size: 11px;border: 1px solid gray;border-radius: 8px;padding: 4px;"><a href="#">微拍{{ floor($celebrity->weipai_fans_num/10000) }}w</a></li>-->
						<li style="font-size: 11px;border: 1px solid gray;border-radius: 8px;padding: 4px;">
							<a style="color:gray;" href="{{$celebrity->meipai_link}}">美拍{{ floor($celebrity->miaopai_fans_num/10000) }}w</a>
						</li>
					</ul>
					</p>
				</div>
				<div class="clear"></div>
				<div class="chart">
					<div style="position: absolute;background: rgba(0,0,0,0);width: 100%;height: 400px;"></div>
					<div style="width: 49%;display: inline-block;border-right: 1px dashed lightgray;">
						<div class="titlelabel">粉丝男女比例</div><div class="tail"></div>
						<div class="girls">女:15%</div>
						<div class="boys">男:15%</div>
						<div style="width: 70%;display: inline-block;margin-left: 19%;padding-bottom: 10px;margin-top: 10px;">
							<canvas id="chart-area" width="200" height="200"/>
						</div>
					</div>
					<div style="width: 49%;display: inline-block;">
						<div class="titlelabel" style="margin-left: -5px;">粉丝年龄比例</div><div class="tail"></div>
						<div style="width: 70%;display: inline-block;margin-left: 10%;padding-bottom: 10px;margin-top: 10px;">
							<canvas id="chart-area2" width="200" height="200"/>
						</div>
					</div>
				</div>
				<div style="width: 100%; border-top: 1px dashed lightgray;">
					<div class="titlelabel" style="width: 25%;">粉丝地区排名</div><div class="tail"></div>
					<canvas id="canvas" width="200" height="100"></canvas>
				</div>
			</div>
		</div>
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
</body>
<!-- Swiper JS -->
<script src="{{URL::asset('js/swiper.min.js')}}"></script>
<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true
	});
</script>
<script src="{{URL::asset('js/Chart.Core.js')}}"></script>
<script src="{{URL::asset('js/Chart.Doughnut.js')}}"></script>
<script src="{{URL::asset('js/Chart.js')}}"></script>
<script>

	var doughnutData = [
		{
			value: 75,
			label: "男",
			color: "#ccdc83"
		},
		{
			value: 25,
			label: "女",
			color: "#f3bac9"
		}
	];
	var doughnutData2 = [
		{
			value: 1,
			color: "#4390c8",
			label: "16~25"
		},
		{
			value: 2,
			color: "#9acff7",
			label: "26~35"
		},
		{
			value: 3,
			color: "#74c1f9",
			label: "36~45"
		},
		{
			value: 4,
			color: "#45aaf2",
			label: "46~55"
		}
	];

	var barChartData = {
		labels : ["北京","上海","广州","深圳","天津","杭州"],
		datasets : [
			{
				fillColor : "rgba(245,162,58,0.8)",
				strokeColor : "rgba(245,162,58,0.8)",
				data : [6,5,4,3,2,1]
			}
		]

	}


	window.onload = function(){
//	$(function(  ){
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

</html>
@endsection
