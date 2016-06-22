@extends('star.star_layouts')

@section('title', "商家信息")

@section('body')
@section('page-main')
    <header class="bar bar-nav">
        <h1 class="title">商家信息</h1>
    </header>
    <div class="content" style="top: 1.2rem;">
        <  <div class="list-block">
                           
                                <div id="" class="item">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media"><img src="{{$merchant->avatar}}" style='width: 4rem;'></div>
                                            <div class="item-inner">
                                                <div class="item-title">{{$merchant->name}}</div>
                                            </div>
                                        </li>

                           <li>
                                 <a href="#alipay" class="item-link item-content">
                                         <div class="item-inner">
                                         <div class="item-title">工商执照</div>
                                         <div id="f_alipay_account" class="item-after">aa</div>
                                        </div>
                                </a>
                         </li>
                                    </ul>
                                </div>
                       
                        </div>
 
 


    </div>
    @include("star.star_footer")
@overwrite
@include('partial/jquery_mobile_page', ["page_id" => "main"])


 

