<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <title>详情页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
    <link rel="stylesheet" href="{{URL::asset('css/sm.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/weui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sm-extend.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/fav-icon.png')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/swiper.min.css')}}">
    <script type="text/javascript" src="{{URL::asset('js/jquery-1.8.3.min.js')}}" charset="utf-8"></script>
    <script type='text/javascript' src="{{URL::asset('js/zepto.min.js')}}" charset='utf-8'></script>
    <script type='text/javascript' src="{{URL::asset('js/sm.min.js')}}" charset='utf-8'></script>
    <script type='text/javascript' src="{{URL::asset('js/sm-extend.min.js')}}" charset='utf-8'></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <script src="{{URL::asset('js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript">
        var $ = jQuery.noConflict();
        $(function() {
            $('#activator').click(function(){
                $('#box').animate({'top':'0px'},500);
            });
            $('#boxclose').click(function(){zzzzz
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
<header class="bar bar-nav">
      <a class="button button-link button-nav pull-left back" href="javascript:history.go(-1)">
            <span class="icon icon-left"></span>
      </a>
      <h1 class='title'>{{$star['name']}}</h1>
</header>
<div class="content">
    <div class="wrap" style="padding-bottom:3rem">
        <div class="single-page">
            <div class="single-page-artical">
                <div class="artical-content">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($starPic as $picture)
                            <div class="swiper-slide" style="background-image: url('{{ $picture->url }}')"></div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3><a style="margin-left:1em;color:black;padding-bottom: 10px;" href="#">红了吗红人&nbsp;|&nbsp;{{$star->name}}&nbsp;&nbsp;
                            @if( $star->sex == 1)
                            <img src="{{URL::asset('images/girl.png')}}" style="width:0.8em;">
                            @else
                            <img src="{{URL::asset('images/boy.png')}}" style="width:0.8em;">
                            @endif
                            <img src="{{URL::asset('images/vdaren.png')}}" style="width:3em;"></a>
                    </h3>
                    <div style="padding-top:10px;padding-bottom: 15px;">
                        <ul>
                            <li style="font-size: 12px;">总粉丝:test</li>
                        </ul>
                        <ul style="margin-top: 5px;padding-left: 15px;">
                            
                            <li style="border: 1px solid gray;border-radius: 8px;padding-left:5px;padding-bottom:5px;padding-right:3px;margin-left:5px;">
                                <a style="color:gray;font-size: 10px;">test</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="single-page" style="margin-top:1em;">
            <div class="single-page-artical">
                <div class="artical-content">
                    <div class="info">
                        <table>
                            <tr>
                                <td>三围：&nbsp;12/12/12</td>
                                <td>身高：&nbsp;{{$star['height']}}</td>
                            </tr>
                            <tr>
                                <td>体重：&nbsp;{{$star['weight']}}</td>
                                <td>年龄：&nbsp;{{$star['age']}}</td>
                            </tr>
                            <tr>
                                <td>城市：&nbsp;{{$star['city']}}</td>
                                <td>职业：&nbsp;{{$star['occupation']}}</td>
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
                                <td style="width:83%;padding-right: 6%;padding-top: 15px;padding-bottom: 15px;"><?php echo $star['experience'] ? $star['experience'] : '无'; ?></td>
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
<div class="single-page" style="z-index:999;
      position:fixed; bottom:0; left:0; width:100%; 
      text-align:center; _position:absolute;
 _top: expression_r(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight); overflow:visible;margin-top:999px;">
            <div class="single-page-artical">
                <div class="artical-content">
                    <div class="info">
                        <table>
                            <tr>
                                <td style="width:40%;padding-left:0">
                                    <button type="button" class="button button-fill" style="width:100%;height:2.5rem;border-radius:0" onclick="submitForm()">确认合作</button>
                                </td>
                                <td style="width:60%;padding-left:0">
                                    <button type="button" class="button button-fill" style="background-color: #f60;width:100%;height:2.5rem;border-radius:0" onclick="submitForm()">取消合作</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="clear"></div>
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
        // autoplay:1000,
        loop: true,
    });
</script>
<script src="{{URL::asset('js/Chart.Core.js')}}"></script>
<script src="{{URL::asset('js/Chart.Doughnut.js')}}"></script>
<script src="{{URL::asset('js/Chart.js')}}"></script>
</html>
