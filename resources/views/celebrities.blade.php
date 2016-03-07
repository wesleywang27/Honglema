@extends('layouts.app')

@section('content')
<!-- TODO: Current Tasks -->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/index.css')}}">
    <!--[if lt IE 9]>
    <script src="./js/css3-mediaqueries.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{URL::asset('js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jQueryColor.js')}}"></script>
    <!--这个插件是瀑布流主插件函数必须-->
    <script type="text/javascript" src="{{URL::asset('js/jquery.masonry.min.js')}}"></script>
    <!--这个插件只是为了扩展jquery的animate函数动态效果可有可无-->
    <script type="text/javascript" src="{{URL::asset('js/jQeasing.js')}}"></script>
    <script type="text/javascript">
        /*
         抛开瀑布流布局各种乱七八糟的算法，基于masonry的瀑布流，很是简单的，而且通过扩展animate,能实现瀑布流布局的晃动、弹球等效果。
         masonry还有很多参数我这里注解了常用的参数
         */
        var curruntPage = 1;
        var flag = 1;
        $(function(){
            /*瀑布流开始*/
            var container = $('.waterfull ul');
            var loading=$('#imloading');
            // 初始化loading状态
            loading.data("on",true);
            /*判断瀑布流最大布局宽度，最大为1280*/
            function tores(){
                var tmpWid=$(window).width();
                if(tmpWid>1280){
                    tmpWid=1280;
                }else{
                    var column=Math.floor(tmpWid/320);
                    tmpWid=column*320;
                }
                $('.waterfull').width(tmpWid);
            }
            tores();
            $(window).resize(function(){
                tores();
            });
            container.imagesLoaded(function(){
                container.masonry({
                    columnWidth: 2,
                    itemSelector : '.item',
                    isFitWidth: true,//是否根据浏览器窗口大小自动适应默认false
                    isAnimated: true,//是否采用jquery动画进行重拍版
                    isRTL:false,//设置布局的排列方式，即：定位砖块时，是从左向右排列还是从右向左排列。默认值为false，即从左向右
                    isResizable: true,//是否自动布局默认true
                    animationOptions: {
                        duration: 800,
                        easing: 'easeInOutBack',//如果你引用了jQeasing这里就可以添加对应的动态动画效果，如果没引用删除这行，默认是匀速变化
                        queue: false//是否队列，从一点填充瀑布流
                    }
                });
            });
            /*模拟从后台获取到的数据*/
            var sqlJson = null;
            /*本应该通过ajax从后台请求过来类似sqljson的数据然后，便利，进行填充，这里我们用sqlJson来模拟一下数据*/
            $(window).scroll(function(){
                if(!loading.data("on")) return;
                if(flag == 1){
                    flag = 0;
                    $.ajax({
                        url: '/celebrities/list.json',
                        type: 'GET',
                        data:{'page': curruntPage + 1 },
                        success: function(data){
                            sqlJson = data.data;
                            curruntPage = data.current_page;
                        }
                    });
                }
                // 计算所有瀑布流块中距离顶部最大，进而在滚动条滚动时，来进行ajax请求，方法很多这里只列举最简单一种，最易理解一种
                var itemNum=$('#waterfull').find('.item').length;
                var itemArr=[];
                itemArr[0]=$('#waterfull').find('.item').eq(itemNum-1).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
                itemArr[1]=$('#waterfull').find('.item').eq(itemNum-2).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
                itemArr[2]=$('#waterfull').find('.item').eq(itemNum-3).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
                var maxTop=Math.max.apply(null,itemArr);
                if(maxTop<$(window).height()+$(document).scrollTop()){
                    //加载更多数据
                    loading.data("on",false).fadeIn(800);
                    (function(sqlJson){
                        /*这里会根据后台返回的数据来判断是否你进行分页或者数据加载完毕这里假设大于30就不在加载数据*/
                        if(JSON.stringify(sqlJson)=='[]'){
                            loading.text('就有这么多了！');
                        }else{
                            var html="";
                            for(var i in sqlJson){
                                html+="<li class='item'><a href='http://m.honglema.com/celebrity/" + sqlJson[i].id +"' class='a-img'><img src='"+(sqlJson[i].pictures)[1].url+"'></a>";
                                html+="<h2 class='li-title'>"+sqlJson[i].nickname+"</h2>";
//                                html+="<p class='description'>"+sqlJson[i].intro+"</p><div class='qianm clearfloat'>";
                                html+="<div class='qianm clearfloat'><span class='sp1'>粉丝<b>"+sqlJson[i].total_fans_num+"</b></span></div>";
//                                html+="<span class='sp2'>"+sqlJson[i].writer+"</span><span class='sp3'>"+sqlJson[i].date+"&nbsp;By</span></div></li>";
                            }
                            /*模拟ajax请求数据时延时800毫秒*/
                            var time=setTimeout(function(){
                                $(html).find('img').each(function(index){
                                    loadImage($(this).attr('src'));
                                });
                            var $newElems = $(html).css({ opacity: 0}).appendTo(container);
                            $newElems.imagesLoaded(function(){
                                $newElems.animate({ opacity: 1},800);
                                container.masonry( 'appended', $newElems,true);
                                loading.data("on",true).fadeOut();
                                clearTimeout(time);
                            });
                            },800);
                            flag = 1;
                        }
                    })(sqlJson);
                }
            });
            function loadImage(url) {
                var img = new Image();
                //创建一个Image对象，实现图片的预下载
                img.src = url;
                if (img.complete) {
                    return img.src;
                }
                img.onload = function () {
                    return img.src;
                };
            };
            // loadImage('./images/one.jpeg',test());
            /*item hover效果*/
            // var rbgB=['#71D3F5','#F0C179','#F28386','#8BD38B'];
            // $('#waterfull').on('mouseover','.item',function(){
            // 	var random=Math.floor(Math.random() * 4);
            // 	$(this).stop(true).animate({'backgroundColor':rbgB[random]},1000);
            // });
            // $('#waterfull').on('mouseout','.item',function(){
            // 	$(this).stop(true).animate({'backgroundColor':'#fff'},1000);
            // });
        })
    </script>
</head>
<body>
<div class="content">
    <!-- 瀑布流样式开始 -->
    <div class="waterfull clearfloat" id="waterfull">
        <ul>
            @if (count($celebrities) > 0)
            @foreach ($celebrities as $celebrity)
            <li class="item">
                <a href="{{ url('/celebrity/'.$celebrity->id) }}" class="a-img">
                    @foreach ( $celebrity->pictures as $picture)
                    @if (str_contains($picture, 'jpg') || str_contains($picture, 'jpeg'))
                    <img src="{{ $picture->url }}" alt="">
                    @break;
                    @endif
                    @endforeach
                </a>
                <h2 class="li-title" title="{{ $celebrity->nickname }}">{{ $celebrity->nickname }}</h2>
<!--                <p class="description">HTML 5以前的标准由于考虑到浏览器安全问题并不允许直接跨域通信并不允许直接跨域通信并不允许直接跨域通信，于...</p>-->
                <div class="qianm clearfloat">
                    <span class="sp1">粉丝<b>{{ $celebrity->total_fans_num }}</b></span>
<!--                    <span class="sp2">志强不息</span>-->
<!--                    <span class="sp3">2小时前&nbsp;By</span>-->
                </div>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
    <!-- loading按钮自己通过样式调整 -->
    <div id='imloading' style='width:150px;height:30px;line-height:30px;font-size:16px;text-align:center;border-radius:3px;opacity:0.7;background:#000;margin:10px auto 30px;color:#fff;display:none;'>
        正在加载...
    </div>
</div>
</body>
</html>
@endsection