@extends('layouts.app')

@section('content')
    <!-- <div>{{ $celebrity->nickname }}</div> -->
    <!DOCTYPE HTML>
<html lang="zh-CN">
	<head>
		<title>single-page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/fav-icon.png')}}" />
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
							<img src="{{URL::asset('images/single-post-pic.jpg')}}" title="banner1">
							<h3><a style="margin-left:1em;color:black;" href="#">红了吗红人&nbsp;|&nbsp;小玩子&nbsp;&nbsp;<img src="{{URL::asset('iimages/girl.png')}}" style="width:0.8em;"></a></h3>
							<p>
								<ul>
									<li>粉丝312</li>
									<li>浏览量1446</li>
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
										<td>三围&nbsp;59.5/64/91</td>
										<td>身高&nbsp;175cm</td>
									</tr>
									<tr>
										<td>体重&nbsp;42kg</td>
										<td>年龄&nbsp;20岁</td>
									</tr>
									<tr>
										<td>籍贯&nbsp;北京</td>
										<td>民族&nbsp;汉族</td>
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
										<td style="width:15%;">简介</td>
										<td style="width:85%;padding-right: 2%;">性格活泼开朗，工作积极主动。曾在《天亮，请睁眼》电视剧中出演女秘书，网络剧，一个明星的女朋友。2009年中国海南汽车模特大赛十佳选手。2010年环球小姐，中国赛区十佳佳丽。</td>
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
</html>
@endsection
