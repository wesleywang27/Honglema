@extends('layouts.app')

@section('content')
<!-- TODO: Current Tasks -->
<!DOCTYPE HTML>
<html  lang="zh-CN">
<head>
    <title>Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/fav-icon.png')}}" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}"/>
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
        <div id="main" role="main">
            <ul id="tiles">
                @if (count($celebrities) > 0)
                @foreach ($celebrities as $celebrity)
                <!-- These are our grid blocks -->
                <a href="{{ url('/celebrity/'.$celebrity->id) }}">
                    <li id="#picture">
                        @foreach ( $celebrity->pictures as $picture)
                        @if (str_contains($picture, 'jpg') || str_contains($picture, 'jpeg'))
                        <img src='{{ $picture->url }}'>
                        @break;
                        @endif
                        @endforeach
                        <div class="post-info">
                            <div class="post-basic-info">
                                <h3 style="color:black;">{{ $celebrity->nickname }}</h3>
                                <p>粉丝&nbsp;{{ $celebrity->total_fans_num }}
                            </div>
                        </div>
                    </li>
                </a>
                @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
<!---//End-content---->
<!----wookmark-scripts---->
<script src="{{URL::asset('js/jquery.imagesloaded.js')}}"></script>
<script src="{{URL::asset('js/jquery.wookmark.js')}}"></script>
<script type="text/javascript">
    var curruntPage = 1;
    var flag = 0;
    var v_offset = 5;
    var v_itemWidth = 144;
    if(window.innerWidth == 320){
        v_offset = 5;
        v_itemWidth = 144;
    }else if(window.innerWidth == 375){
        v_offset = 10;
        v_itemWidth = 160;
    }else if(window.innerWidth > 375 ){
        v_offset = 15;
        v_itemWidth = 190;
    }
    (function ($){
        var $tiles = $('#tiles'),
            $handler = $('li', $tiles),
            $main = $('#main'),
            $window = $(window),
            $document = $(document),
            options = {
                autoResize: true, // This will auto-update the layout when the browser window is resized.
                container: $main, // Optional, used for some extra CSS styling
                offset: v_offset, // Optional, the distance between grid items
                itemWidth: v_itemWidth // Optional, the width of a grid item
            };
        /**
         * Reinitializes the wookmark handler after all images have loaded
         */
        function applyLayout() {
            $tiles.imagesLoaded(function() {
                // Destroy the old handler
                if ($handler.wookmarkInstance) {
                    $handler.wookmarkInstance.clear();
                }

                // Create a new layout handler.
                $handler = $('li', $tiles);
                $handler.wookmark(options);
            });
        }
        /**
         * When scrolled all the way to the bottom, add more tiles
         */
        function onScroll() {
            // Check if we're within 100 pixels of the bottom edge of the broser window.
            var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
                closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);

            var htmls = '';
            if (closeToBottom && flag != curruntPage) {
                flag = curruntPage;
                // Get the first items from the grid, clone them, and add them to the bottom of the grid
                // send ajax request
                $.ajax({
                    url: '/celebrities/list.json',
                    type: 'GET',
                    data:{'page': curruntPage + 1 },
                    success: function(data) {
//                        alert(JSON.stringify(data));
                        var items = data.data;
                        for (var i=0;i<items.length;i++){
                            htmls = htmls + "<a href='http://m.honglema.com/celebrity/" + items[i].id + "'><li id='#picture'><img src='" + (items[i].pictures)[1].url
                                + "'><div class='post-info'><div class='post-basic-info'><h3 style='color:black;'>"
                            + items[i].nickname + "</h3><p>粉丝&nbsp;" + items[i].total_fans_num + "</p></div></div></li></a>";
                        }
                        $tiles.append(htmls);
                        applyLayout();
                        curruntPage = data.current_page;
                        if(JSON.stringify(data.data)=='[]')
                            curruntPage = 0;
                    }
                });
            }
        };

        applyLayout();

        $window.bind('scroll.wookmark', onScroll);
    })(jQuery);
</script>
</body>
</html>
@endsection