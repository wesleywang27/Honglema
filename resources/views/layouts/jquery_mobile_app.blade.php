<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{URL::asset('css/jquery.mobile-1.4.5.min.css')}}">
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.mobile-1.4.5.min.js')}}"></script>
    @yield("additional_head")
</head>
<body>
    @yield("body")
</body>
</html>