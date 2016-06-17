@extends('didi.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">滴滴打网红后台系统</h2>
</div>
<p id="welcome" style="margin-top: 80px; text-align: center; color: #D3D3D3">Welcome</p>
<script>
    var width;
    width = (document.body.clientWidth / 10) + 50;
    width = width + "px";
    document.getElementById("welcome").style.fontSize = width;
</script>
@endsection