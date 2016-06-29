@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">处理活动信息</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">待确定</a></li>
        <li><a>已确定</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <div style="float: right;">
            <strong>已确认/总场次</strong>
            <br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $activity->confirm_num}} / {{ $activity->task_num}}</p>
        </div>
        <table class="table" style="margin-top: 40px;">
            <tr>
                <th>网红ID</th>
                <th>网红昵称</th>
                <th>性别</th>
                <th>地区</th>
                <th>年龄</th>
                <th>职业</th>
                <th>微信账号</th>
                <th>手机号码</th>
                <th>操作</th>
            </tr>
            @foreach ($stars_confirming as $star)
            <tr>
                <td style="width:80px;text-align:center">{{ $star->star_id }}</td>
                <td style="width:180px;text-align:center">{{ $star->name }}</td>
                <td style="width:100px;text-align:center">
                    @if($star->sex == 0)
                    女
                    @else
                    男
                    @endif
                </td>
                <td style="width:180px;text-align:center">{{ $star->location }}</td>
                <td style="width:100px;text-align:center">{{ $star->age }}</td>
                <td style="width:180px;text-align:center">{{ $star->occupation }}</td>
                <td style="width:180px;text-align:center">{{ $star->wechat }}</td>
                <td style="width:180px;text-align:center">{{ $star->cellphone }}</td>
                <td style="width:180px;text-align:center">
                    <a href="{{URL::action('StarController@starInfo', ['id' => $star->star_id]) }}" ><input type="button" value="查看" class="link_btn"/></a>
                    @if ($activity->confirm_num < $activity->task_num)
                    <a href="{{URL::action('ActivityController@activityChooseStar', ['activity_id' => $activity->activity_id ,'star_id' => $star->star_id]) }}" onclick="return confirm('确定选择该网红？')"><input type="button" value="选择" class="link_btn"/></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
        <aside class="paging">
            <a href="javascript:history.back();" style="float: left;" >返回</a>

            <a class="{{ ($stars_confirming->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $stars_confirming->url(1) }}">首页</a>

            @if ($stars_confirming->currentPage() == 1)
            <a class="" href="#">前一页</a>
            @else
            <a class="" href="{{ $stars_confirming->url($stars_confirming->currentPage() - 1) }}">前一页</a>
            @endif

            @if ($stars_confirming->lastPage() <= 9)
            @for ($i = 1; $i <= $stars_confirming->lastPage(); $i++)
            <a class="{{ ($stars_confirming->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars_confirming->url($i) }}">{{ $i }}</a>
            @endfor
            @elseif ($stars_confirming->currentPage() > 4)
            @for ($i = $stars_confirming->currentPage() - 4; $i <= $stars_confirming->currentPage() + 4; $i++)
            <a class="{{ ($stars_confirming->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars_confirming->url($i) }}">{{ $i }}</a>
            @endfor
            @else
            @for ($i = 1; $i <= 9; $i++)
            <a class="{{ ($stars_confirming->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars_confirming->url($i) }}">{{ $i }}</a>
            @endfor
            @endif

            @if ($stars_confirming->currentPage() == $stars_confirming->lastPage())
            <a class="{{ ($stars_confirming->currentPage() == $stars_confirming->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
            @else
            <a class="{{ ($stars_confirming->currentPage() == $stars_confirming->lastPage()) ? ' disabled' : '' }}" href="{{ $stars_confirming->url($stars_confirming->currentPage()+1) }}" >后一页</a>
            @endif

            <a class="{{ ($stars_confirming->currentPage() == $stars_confirming->lastPage()) ? ' disabled' : '' }}" href="{{ $stars_confirming->url($stars_confirming->lastPage()) }}" >尾页</a>
        </aside>
    </div>

    <div class="admin_tab_cont">
        <table class="table">
            <tr>
                <th>网红ID</th>
                <th>网红昵称</th>
                <th>性别</th>
                <th>地区</th>
                <th>年龄</th>
                <th>职业</th>
                <th>微信账号</th>
                <th>手机号码</th>
                <th>操作</th>
            </tr>
            @foreach ($stars_confirmed as $star)
            <tr>
                <td style="width:80px;text-align:center">{{ $star->star_id }}</td>
                <td style="width:180px;text-align:center">{{ $star->name }}</td>
                <td style="width:100px;text-align:center">
                    @if($star->sex == 0)
                    女
                    @else
                    男
                    @endif
                </td>
                <td style="width:180px;text-align:center">{{ $star->location }}</td>
                <td style="width:100px;text-align:center">{{ $star->age }}</td>
                <td style="width:180px;text-align:center">{{ $star->occupation }}</td>
                <td style="width:180px;text-align:center">{{ $star->wechat }}</td>
                <td style="width:180px;text-align:center">{{ $star->cellphone }}</td>
                <td style="width:180px;text-align:center">
                    <a href="{{URL::action('StarController@starInfo', ['id' => $star->star_id]) }}" ><input type="button" value="查看" class="link_btn"/></a>
                    <a href="{{URL::action('ActivityController@activityOperate', ['activity_id' => $activity->activity_id ,'star_id' => $star->star_id]) }}"><input type="button" value="操作" class="link_btn"/></a>
                </td>
            </tr>
            @endforeach
        </table>
        <aside class="paging">
            <a href="javascript:history.back();" style="float: left;" >返回</a>

            <a class="{{ ($stars_confirmed->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $stars_confirmed->url(1) }}">首页</a>

            @if ($stars_confirmed->currentPage() == 1)
            <a class="" href="#">前一页</a>
            @else
            <a class="" href="{{ $stars_confirmed->url($stars_confirmed->currentPage() - 1) }}">前一页</a>
            @endif

            @if ($stars_confirmed->lastPage() <= 9)
            @for ($i = 1; $i <= $stars_confirmed->lastPage(); $i++)
            <a class="{{ ($stars_confirmed->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars_confirmed->url($i) }}">{{ $i }}</a>
            @endfor
            @elseif ($stars_confirmed->currentPage() > 4)
            @for ($i = $stars_confirmed->currentPage() - 4; $i <= $stars_confirmed->currentPage() + 4; $i++)
            <a class="{{ ($stars_confirmed->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars_confirmed->url($i) }}">{{ $i }}</a>
            @endfor
            @else
            @for ($i = 1; $i <= 9; $i++)
            <a class="{{ ($stars_confirmed->currentPage() == $i) ? ' active' : '' }}" href="{{ $stars_confirmed->url($i) }}">{{ $i }}</a>
            @endfor
            @endif

            @if ($stars_confirmed->currentPage() == $stars_confirmed->lastPage())
            <a class="{{ ($stars_confirmed->currentPage() == $stars_confirmed->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
            @else
            <a class="{{ ($stars_confirmed->currentPage() == $stars_confirmed->lastPage()) ? ' disabled' : '' }}" href="{{ $stars_confirmed->url($stars_confirmed->currentPage()+1) }}" >后一页</a>
            @endif

            <a class="{{ ($stars_confirmed->currentPage() == $stars_confirmed->lastPage()) ? ' disabled' : '' }}" href="{{ $stars_confirmed->url($stars_confirmed->lastPage()) }}" >尾页</a>
        </aside>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        //tab
        $(".admin_tab li a").click(function(){
            var liindex = $(".admin_tab li a").index(this);
            $(this).addClass("active").parent().siblings().find("a").removeClass("active");
            $(".admin_tab_cont").eq(liindex).fadeIn(150).siblings(".admin_tab_cont").hide();
        });
    });

</script>

@endsection