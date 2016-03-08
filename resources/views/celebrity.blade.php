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
	</style>
</head>
<body>
<!---start-wrap---->
<!---start-header---->
<!-- <div class="header">
    <div class="wrap">
    <div class="logo">
        <a href="index.html"><img src="images/logo.png" title="pinbal" /></a>
    </div>
    <div class="clear"> </div>
    </div>
</div> -->
<!---//End-header---->
<!---start-content---->
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
							<img src="{{URL::asset('images/girl.png')}}" style="width:0.8em;"></a></h3>
					@else
					<img src="{{URL::asset('images/boy.png')}}" style="width:0.8em;"></a></h3>
					@endif
					<p>
					<ul>
						<li style="font-size: 12px;">标签：&nbsp;{{ $celebrity->tags }}</li>
					</ul>
					<ul>
						<li style="font-size: 12px;">总粉丝{{ $celebrity->total_fans_num }}</li>
					</ul>
					<ul style="margin-top: 5px;">
						<li style="font-size: 11px;border: 1px solid gray;border-radius: 8px;padding: 4px;">微博{{ floor($celebrity->weibo_fans_num/10000) }}w</li>
						<li style="font-size: 11px;border: 1px solid gray;border-radius: 8px;padding: 4px;">微拍{{ floor($celebrity->weipai_fans_num/10000) }}w</li>
						<li style="font-size: 11px;border: 1px solid gray;border-radius: 8px;padding: 4px;">秒拍{{ floor($celebrity->miaopai_fans_num/10000) }}w</li>
					</ul>
					</p>
				</div>
				<div class="clear"></div>
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
							<tr style="padding-bottom: 0;">
								<td style="width:17%;">经历</td>
								<td style="width:83%;padding-right: 6%;padding-top: 15px;">{{ $celebrity->experience }}</td>
							</tr>
							<tr style="padding-top: 0;">
								<td style="width:17%;">简介</td>
								<td style="width:83%;padding-right: 6%;padding-bottom: 15px;">{{ $celebrity->personality }}</td>
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
</html>
@endsection
