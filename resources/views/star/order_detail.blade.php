@extends('star.star_layouts')

@section('title', "Task")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">订单详情</h1>
    </header>
    <div class="content" style="top: 2.5rem;">
        <div class="buttons-tab">
           {{$order}}
        </div>
        <div class="content-block"  style="padding: 0px">
            
 
                
    </div>
    @include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "main"])


 

