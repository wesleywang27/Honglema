@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="zh-CN">
	<head>
		<title>single-page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="format-detection" content="telephone=no" />
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
							@foreach ( $celebrity->pictures as $picture)
								@if (str_contains($picture, 'jpg') || str_contains($picture, 'jpeg'))
									<img src="{{ $picture->url }}" title="banner1">
									@break;
								@endif
							@endforeach
							<h3><a style="margin-left:1em;color:black;" href="#">红了吗&nbsp;|&nbsp;{{$celebrity->nickname}}&nbsp;&nbsp;
									@if( $celebrity->sex == 1)
									<img src="{{URL::asset('images/girl.png')}}" style="width:0.8em;"></a></h3>
									@else
									<img src="{{URL::asset('images/boy.png')}}" style="width:0.8em;"></a></h3>
									@endif
							<p>
								<ul>
									<li>粉丝：&nbsp;{{ $celebrity->total_fans_num }}</li>
								</ul>
								<ul>
									<li>标签：&nbsp;{{ $celebrity->tags }}</li>
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
										<td style="width:15%;">经历</td>
										<td style="width:85%;padding-right: 6%;padding-top: 15px;">{{ $celebrity->experience }}</td>
									</tr>
									<tr style="padding-top: 0;">
										<td style="width:15%;">简介</td>
										<td style="width:85%;padding-right: 6%;padding-bottom: 15px;">{{ $celebrity->personality }}</td>
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
