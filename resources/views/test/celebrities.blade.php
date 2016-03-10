@extends('layouts.app')

@section('content')
<!-- TODO: Current Tasks -->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
    <style>
        .v_header{
            width: 100%;
            height: 50px;
            background-color: #fff;
            margin: 0px auto;
            border-bottom: 1px solid #f6f6f6;
        }
        .v_header img{
            position: absolute;
            margin: 10px;
            width: 30px;
        }
        .headin{
            width: 100%;
            text-align: center;
            color: deeppink;
            font-size: 20px;
            padding: 15px 0 0 0;
        }
        .name{
            font-size: 16px;
            color: rgba(0,0,0,0.8);
            margin-left: 0;
        }
        .fensi{
            margin-top: 8px;
            color: darkgray;
            font-size: 14px;
        }
        li{
            background-color: pink;
        }
    </style>
</head>
<body>
<div class="htmleaf-container">
    <div class="v_header">
        <img src="{{URL::asset('images/fav-icon.png')}}"/>
        <div class="headin">红了吗</div>
    </div>
    <div style="width:100%;margin: 0 auto;">
        <img style="width: 100%;" src="{{URL::asset('images/banner.png')}}" />
    </div>
    <div role="main">
        <ul id="container" class="tiles-wrap animated" style="opacity: 0;">
            <!-- These are our grid blocks -->
            @if (count($celebrities) > 0)
            @foreach ($celebrities as $celebrity)
            <li>
                <a href="{{ url('/celebrity/'.$celebrity->id) }}">
                    @if( $celebrity->profile_img != null )
                    <img src="{{ $celebrity->profile_img }}" style="width: 100%;">
                    @else
                    @foreach ( $celebrity->pictures as $picture)
                    @if (str_contains($picture, 'jpg') || str_contains($picture, 'jpeg'))
                    <img src="{{ $picture->url }}" style="width: 100%;">
                    @break;
                    @endif
                    @endforeach
                    @endif
                </a>
                <div style="padding: 8px;">
                    <div class="name">{{ $celebrity->nickname }}</div>
                    <div class="fensi">
                        粉丝&nbsp;{{ $celebrity->total_fans_num }}
                    </div>
                </div>
            </li>
            @endforeach
            @endif
            <!-- End of grid blocks -->
        </ul>
    </div>
    <div id='imloading' style='width:150px;height:30px;line-height:30px;font-size:16px;text-align:center;border-radius:3px;opacity:0.7;background:#000;margin:10px auto 30px;color:rgba(255,255,255,0.5);'>
        正在加载...
    </div>
</div>

<!-- include jQuery -->
<script type="text/javascript" src="{{URL::asset('js/jquery-1.8.3.min.js')}}"></script>
<!-- Include the imagesLoaded plug-in -->
<script src="{{URL::asset('js/imagesloaded.pkgd.min.js')}}"></script>

<!-- Include the plug-in -->
<script src="{{URL::asset('js/wookmark.js')}}"></script>

<!-- Once the page is loaded, initalize the plug-in. -->
<script type="text/javascript">
    setTimeout(function () {
        $("#container").css('opacity', 1);
    }, 1000);
    (function ($) {
        var intemwidth;
        var off_set = 10;
        if( $(window).width() == 414 ){
            intemwidth = 192;
        }else if( $(window).width() == 375 ){
            off_set = 11;
            intemwidth = 172;
        }else if( $(window).width() == 320 ){
            intemwidth = 145;
        }
        // Instantiate wookmark after all images have been loaded
        var wookmark,
            container = '#container',
            $container = $(container),
            $window = $(window),
            $document = $(document);

        imagesLoaded(container, function () {
            wookmark = new Wookmark(container, {
                offset: off_set, // Optional, the distance between grid items
                itemWidth: intemwidth // Optional, the width of a grid item
            });
        });

        /**
         * When scrolled all the way to the bottom, add more tiles
         */
        var curruntPage = 1;
        var flag = 1;
        function onScroll() {
            // Check if we're within 100 pixels of the bottom edge of the broser window.
            var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
                closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 600);

            if (closeToBottom && flag) {
                // Get the first then items from the grid, clone them, and add them to the bottom of the grid
                flag = 0;
                $.ajax({
                    url: '/celebrities/list.json',
                    type: 'GET',
                    data: {'page' : curruntPage + 1},
                    success: function (data) {
                        sqlJson = data.data;
                        if (JSON.stringify(sqlJson) == '[]') {
                            $("#imloading").text('刷到底了~');
                        } else {
                            curruntPage = data.current_page;
                            var html = "";
                            for (var i in sqlJson) {
                                var myurl = "#";
                                if (sqlJson[i].profile_img != null) {
                                    myurl = sqlJson[i].profile_img;
                                } else {
                                    myurl = (sqlJson[i].pictures)[0].url;
                                }
                                html += "<li><a href='/celebrity/" + sqlJson[i].id + "'>";
                                html += "<img src='" + myurl + "' style='width: 100%;'>";
                                html += "</a>";
                                html += "<div style='padding: 8px;'>";
                                html += "<div class='name' >" + sqlJson[i].nickname;
                                html += "</div><div class='fensi'>粉丝&nbsp;" + sqlJson[i].total_fans_num;
                                html += "</div></div></li>";
                            }
                            //var $items = $('li', $container);
                            //var $firstTen = $items.slice(0, 10).clone().css('opacity', 0);
                            $(html).find('img').each(function (index) {
                                loadImage($(this).attr('src'));
                            });
                            var $firstTen = $(html).css({opacity: 0});
                            $container.append($firstTen);
                            wookmark.initItems();
                            wookmark.layout(true, function () {
                                // Fade in items after layout

                                setTimeout(function () {
                                    $firstTen.css('opacity', 1);
                                }, 1100);
                                flag = 1;
                            });
                        }
                    }
                });
            }
        };

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

        // Capture scroll event.
        $window.bind('scroll.wookmark', onScroll);
    })(jQuery);
</script>
</body>
</html>
@endsection
<!--老版本瀑布流-->
<!--@extends('layouts.app')-->
<!---->
<!--@section('content')-->
<!--<!-- TODO: Current Tasks -->-->
<!--<!doctype html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />-->
<!--    <meta name="format-detection" content="telephone=no" />-->
<!--    <title>index</title>-->
<!--    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/base.css')}}">-->
<!--    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/index.css')}}">-->
<!--    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">-->
<!--    <!--[if lt IE 9]>-->
<!--    <script src="./js/css3-mediaqueries.js"></script>-->
<!--    <![endif]-->-->
<!--    <script type="text/javascript" src="{{URL::asset('js/jquery-1.8.3.min.js')}}"></script>-->
<!--    <script type="text/javascript" src="{{URL::asset('js/jQueryColor.js')}}"></script>-->
<!--    <!--这个插件是瀑布流主插件函数必须-->-->
<!--    <script type="text/javascript" src="{{URL::asset('js/jquery.masonry.min.js')}}"></script>-->
<!--    <!--这个插件只是为了扩展jquery的animate函数动态效果可有可无-->-->
<!--    <script type="text/javascript" src="{{URL::asset('js/jQeasing.js')}}"></script>-->
<!--    <script type="text/javascript">-->
<!--        /* get query param */-->
<!--        function getQueryVariable(variable)-->
<!--        {-->
<!--            var query = window.location.search.substring(1);-->
<!--            var vars = query.split("&");-->
<!--            for (var i=0;i<vars.length;i++) {-->
<!--                var pair = vars[i].split("=");-->
<!--                if(pair[0] == variable){return pair[1];}-->
<!--            }-->
<!--            return(false);-->
<!--        }-->
<!---->
<!--        /*-->
<!--         抛开瀑布流布局各种乱七八糟的算法，基于masonry的瀑布流，很是简单的，而且通过扩展animate,能实现瀑布流布局的晃动、弹球等效果。-->
<!--         masonry还有很多参数我这里注解了常用的参数-->
<!--         */-->
<!--        var curruntPage = 1;-->
<!--        var is_succeed = 1;-->
<!--        //        function sleep(milliseconds) {-->
<!--        //            var start = new Date().getTime();-->
<!--        //            for (var i = 0; i < 1e7; i++) {-->
<!--        //                if ((new Date().getTime() - start) > milliseconds){-->
<!--        //                    break;-->
<!--        //                }-->
<!--        //            }-->
<!--        //        }-->
<!--        $(function(){-->
<!--            /*瀑布流开始*/-->
<!--            var container = $('.waterfull ul');-->
<!--            var loading=$('#imloading');-->
<!--            // 初始化loading状态-->
<!--            loading.data("on",false);-->
<!--            /*判断瀑布流最大布局宽度，最大为1280*/-->
<!--            function tores(){-->
<!--                var tmpWid=$(window).width();-->
<!--                $('.waterfull').width(tmpWid);-->
<!--            }-->
<!--            tores();-->
<!--            $(window).resize(function(){-->
<!--                tores();-->
<!--            });-->
<!--            container.imagesLoaded(function(){-->
<!--                container.masonry({-->
<!--                    columnWidth: 1,-->
<!--                    itemSelector : '.item',-->
<!--                    isFitWidth: true,//是否根据浏览器窗口大小自动适应默认false-->
<!--                    isAnimated: true,//是否采用jquery动画进行重拍版-->
<!--                    isRTL:false,//设置布局的排列方式，即：定位砖块时，是从左向右排列还是从右向左排列。默认值为false，即从左向右-->
<!--                    isResizable: true,//是否自动布局默认true-->
<!--                    animationOptions: {-->
<!--                        duration: 800,-->
<!--                        easing: 'easeInOutBack',//如果你引用了jQeasing这里就可以添加对应的动态动画效果，如果没引用删除这行，默认是匀速变化-->
<!--                        queue: false//是否队列，从一点填充瀑布流-->
<!--                    }-->
<!--                });-->
<!--            });-->
<!--            /*模拟从后台获取到的数据*/-->
<!--            var sqlJson = null;-->
<!--            /*本应该通过ajax从后台请求过来类似sqljson的数据然后，便利，进行填充，这里我们用sqlJson来模拟一下数据*/-->
<!--            $(window).scroll(function(){-->
<!--                if(loading.data("on")) return;-->
<!---->
<!--                // 计算所有瀑布流块中距离顶部最大，进而在滚动条滚动时，来进行ajax请求，方法很多这里只列举最简单一种，最易理解一种-->
<!--                var itemNum=$('#waterfull').find('.item').length - 7;-->
<!--                var itemArr=[];-->
<!--                itemArr[0]=$('#waterfull').find('.item').eq(itemNum-1).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;-->
<!--                itemArr[1]=$('#waterfull').find('.item').eq(itemNum-2).offset().top+$('#waterfull').find('.item').eq(itemNum-2)[0].offsetHeight;-->
<!--                itemArr[2]=$('#waterfull').find('.item').eq(itemNum-3).offset().top+$('#waterfull').find('.item').eq(itemNum-3)[0].offsetHeight;-->
<!--                var maxTop=Math.max.apply(null,itemArr);-->
<!---->
<!--                if(maxTop < $(window).height()+$(document).scrollTop()){-->
<!--                    if(is_succeed) {-->
<!--                        is_succeed = 0;-->
<!---->
<!--                        loading.data("on", true).fadeIn(200);-->
<!--                        loading.data("on", false).fadeOut(2000);-->
<!--                        var data = {'page': curruntPage + 1};-->
<!--                        var sort = getQueryVariable('sort');-->
<!--                        if (sort != false)-->
<!--                            data['sort'] = sort;-->
<!--                        $.ajax({-->
<!--                            url: '/celebrities/list.json',-->
<!--                            type: 'GET',-->
<!--                            data: data,-->
<!--                            success: function (data) {-->
<!--                                sqlJson = data.data;-->
<!--                                curruntPage = data.current_page;-->
<!---->
<!--                                //加载更多数据-->
<!--                                (function (sqlJson) {-->
<!--                                    var html = "";-->
<!--                                    /*这里会根据后台返回的数据来判断是否你进行分页或者数据加载完毕这里假设大于30就不在加载数据*/-->
<!--                                    if (JSON.stringify(sqlJson) == '[]') {-->
<!--                                        loading.text('就有这么多了！');-->
<!--                                    } else {-->
<!--                                        for (var i in sqlJson) {-->
<!--                                            var myurl = "#";-->
<!--                                            if (sqlJson[i].profile_img != null) {-->
<!--                                                myurl = sqlJson[i].profile_img;-->
<!--                                            } else {-->
<!--                                                myurl = (sqlJson[i].pictures)[0].url;-->
<!--                                            }-->
<!--                                            html += "<li class='item'><a href='/celebrity/" + sqlJson[i].id + "' class='a-img'><img src='" + myurl + "'></a>";-->
<!--                                            html += "<div style='padding: 8px;'>";-->
<!--                                            html += "<h2 class='li-title'>" + sqlJson[i].nickname + "</h2>";-->
<!--                                            //                                html+="<p class='description'>"+sqlJson[i].intro+"</p><div class='qianm clearfloat'>";-->
<!--                                            html += "<div class='qianm clearfloat'><span class='sp1'>粉丝<b>" + sqlJson[i].total_fans_num + "</b></span></div>";-->
<!--                                            html += "</div>";-->
<!--                                            //                                html+="<span class='sp2'>"+sqlJson[i].writer+"</span><span class='sp3'>"+sqlJson[i].date+"&nbsp;By</span></div></li>";-->
<!--                                        }-->
<!--                                        /*模拟ajax请求数据时延时800毫秒*/-->
<!--                                        $(html).find('img').each(function (index) {-->
<!--                                            loadImage($(this).attr('src'));-->
<!--                                        });-->
<!--                                        var $newElems = $(html).css({opacity: 0}).appendTo(container);-->
<!--                                        $newElems.imagesLoaded(function () {-->
<!--                                            $newElems.animate({opacity: 1}, 800);-->
<!--                                            container.masonry('appended', $newElems, true);-->
<!--                                        });-->
<!--                                    }-->
<!--                                })(sqlJson);-->
<!--                                is_succeed = 1;-->
<!--                            }-->
<!--                        });-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--            function loadImage(url) {-->
<!--                var img = new Image();-->
<!--                //创建一个Image对象，实现图片的预下载-->
<!--                img.src = url;-->
<!--                if (img.complete) {-->
<!--                    return img.src;-->
<!--                }-->
<!--                img.onload = function () {-->
<!--                    return img.src;-->
<!--                };-->
<!--            };-->
<!--            // loadImage('./images/one.jpeg',test());-->
<!--            /*item hover效果*/-->
<!--            // var rbgB=['#71D3F5','#F0C179','#F28386','#8BD38B'];-->
<!--            // $('#waterfull').on('mouseover','.item',function(){-->
<!--            // 	var random=Math.floor(Math.random() * 4);-->
<!--            // 	$(this).stop(true).animate({'backgroundColor':rbgB[random]},1000);-->
<!--            // });-->
<!--            // $('#waterfull').on('mouseout','.item',function(){-->
<!--            // 	$(this).stop(true).animate({'backgroundColor':'#fff'},1000);-->
<!--            // });-->
<!---->
<!--            // 排序button-->
<!--            $('div.hlm-sort-btn').click(function() {-->
<!--                $('div.hlm-list').fadeIn();-->
<!--            });-->
<!---->
<!--            $('div.hlm-collapse-btn').click(function() {-->
<!--                $('div.hlm-list').fadeOut();-->
<!--            });-->
<!--            $('#sort td').click(function() {-->
<!--                window.location = window.location.pathname + '?sort=' + this.dataset.key;-->
<!--            });-->
<!--        })-->
<!--    </script>-->
<!--    <style>-->
<!--        .v_header{-->
<!--            width: 100%;-->
<!--            height: 50px;-->
<!--            background-color: #fff;-->
<!--            margin: 0px auto;-->
<!--            border-bottom: 1px solid #f6f6f6;-->
<!--        }-->
<!--        .v_header img{-->
<!--            position: absolute;-->
<!--            margin: 10px;-->
<!--            width: 30px;-->
<!--        }-->
<!--        .headin{-->
<!--            width: 100%;-->
<!--            text-align: center;-->
<!--            color: deeppink;-->
<!--            font-size: 20px;-->
<!--            padding: 15px 0 0 0;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<div class="v_header">-->
<!--    <img src="{{URL::asset('images/fav-icon.png')}}"/>-->
<!--    <div class="headin">红了吗</div>-->
<!--</div>-->
<!--<div style="width:100%;margin: 0 auto;">-->
<!--    <img style="width: 100%;" src="{{URL::asset('images/banner.png')}}" />-->
<!--</div>-->
<!--<div class="content" style="margin-top: 10px;">-->
<!--    <!-- 瀑布流样式开始 -->-->
<!--    <div class="waterfull clearfloat" id="waterfull">-->
<!--        <ul style="margin: 0 auto;">-->
<!--            @if (count($celebrities) > 0)-->
<!--            @foreach ($celebrities as $celebrity)-->
<!--            <li class="item">-->
<!--                <a href="{{ url('/celebrity/'.$celebrity->id) }}" class="a-img">-->
<!--                    @if( $celebrity->profile_img != null )-->
<!--                    <img src="{{ $celebrity->profile_img }}" alt="">-->
<!--                    @else-->
<!--                    @foreach ( $celebrity->pictures as $picture)-->
<!--                    @if (str_contains($picture, 'jpg') || str_contains($picture, 'jpeg'))-->
<!--                    <img src="{{ $picture->url }}" alt="">-->
<!--                    @break;-->
<!--                    @endif-->
<!--                    @endforeach-->
<!--                    @endif-->
<!--                </a>-->
<!--                <div style="padding: 8px;">-->
<!--                    <h2 class="li-title" title="{{ $celebrity->nickname }}">{{ $celebrity->nickname }}</h2>-->
<!--                    <div class="qianm clearfloat">-->
<!--                        <span class="sp1">粉丝<b>{{ $celebrity->total_fans_num }}</b></span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            @endforeach-->
<!--            @endif-->
<!--        </ul>-->
<!--    </div>-->
<!--    <!-- loading按钮自己通过样式调整 -->-->
<!--    <div id='imloading' style='width:150px;height:30px;line-height:30px;font-size:16px;text-align:center;border-radius:3px;opacity:0.7;background:#000;margin:10px auto 30px;color:rgba(255,255,255,0.5);display: none;'>-->
<!--        正在加载...-->
<!--    </div>-->
<!---->
<!--    <div class="hlm-sort-btn">&#10606;排序</div>-->
<!--    <div class="hlm-list">-->
<!--        <div class="hlm-collapse-btn">收起</div>-->
<!--        <div class="clear"></div>-->
<!--        <div class="single-page">-->
<!--            <div class="single-page-artical">-->
<!--                <div class="artical-content">-->
<!--                    <div class="info">-->
<!--                        <table id="sort">-->
<!--                            <tr>-->
<!--                                <td data-key="comprehensive">综合排序(默认)</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td data-key="total_fans_num">总粉丝量</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td data-key="weibo_fans_num">微博粉丝量</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td data-key="weipai_fans_num">微拍粉丝量</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td data-key="kuaishou_fans_num">快手粉丝量</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td data-key="miaopai_fans_num">秒拍粉丝量</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td data-key="meipai_fans_num">美拍粉丝量</td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
<!--@endsection-->