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
                <th>网红头像</th>
                <th>网红昵称</th>
                <th>性别</th>
                <th>地区</th>
                <th>年龄</th>
                <th>职业</th>
                <th>微信账号</th>
                <th>操作</th>
            </tr>
            @foreach ($stars_confirming as $star)
            <tr>
                <td style="width:80px;text-align:center"><img src="{{ $star->avatar}}" style="width: 80px; height: 80px;"/></td>
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
                <td style="width:180px;text-align:center">
                    <a href="{{URL::action('StarController@starInfo', ['id' => $star->star_id]) }}" ><input type="button" value="查看" class="link_btn"/></a>
                    @if ($activity->confirm_num < $activity->task_num)
                    <a href="{{URL::action('ActivityController@activityConfirmStar', ['activity_id' => $activity->activity_id ,'star_id' => $star->star_id]) }}" ><input type="button" value="选择" class="link_btn"/></a>
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
                <th>任务ID</th>
                <th>网红昵称</th>
                <th>任务状态</th>
                <th>物流单号</th>
                <th>分配场数</th>
                <th>评价星级</th>
                <th>评价</th>
                <th>操作</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td style="width:80px;text-align:center">{{ $task['task_id']}}</td>
                <td style="width:180px;text-align:center">{{ $task['name']}}</td>
                <td style="width:100px;text-align:center">
                    @if($task['status'] == 1)
                    待发货
                    @elseif($task['status'] == 2)
                    @if($task['is_shipping'] == 1)
                    待收货
                    @else
                    推广中
                    @endif
                    @elseif($task['status'] == 3)
                    待评价
                    @elseif($task['status'] == 4)
                    待打款
                    @else
                    已完成
                    @endif
                </td>
                <td style="width:180px;text-align:center">
                    @if($task['express_num'] == null)
                    未填写
                    @else
                    {{$task['express_num']}}
                    @endif
                </td>
                <td style="width:100px;text-align:center">{{ $task['show_num'] }}</td>
                <td style="width:180px;text-align:center">
                    @if($task['evaluation_level'] == null)
                    未填写
                    @else
                    {{$task['evaluation_level']}}
                    @endif
                </td>
                <td style="width:180px;text-align:center">
                    @if($task['evaluation'] == null)
                    未填写
                    @else
                    {{$task['evaluation']}}
                    @endif
                </td>
                <td style="width:180px;text-align:center">
                    <a href="{{URL::action('StarController@starInfo', ['id' => $task['star_id']]) }}" ><input type="button" value="查看" class="link_btn"/></a>
                    @if($task['status'] != 4)
                    <a href="{{URL::action('ActivityController@activityOperate', ['task_id' => $task['task_id']]) }}"><input type="button" value="操作" class="link_btn"/></a>
                    @else
                    <a href="{{URL::action('ActivityController@activityOperate', ['task_id' => $task['task_id']]) }}" onclick="return confirm('确定要打款吗？')"><input type="button" value="打款" class="link_btn"/></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
        <aside class="paging">
            <a href="javascript:history.back();" style="float: left;" >返回</a>

            <a class="{{ ($tasks_confirmed->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $tasks_confirmed->url(1) }}">首页</a>

            @if ($tasks_confirmed->currentPage() == 1)
            <a class="" href="#">前一页</a>
            @else
            <a class="" href="{{ $tasks_confirmed->url($tasks_confirmed->currentPage() - 1) }}">前一页</a>
            @endif

            @if ($tasks_confirmed->lastPage() <= 9)
            @for ($i = 1; $i <= $tasks_confirmed->lastPage(); $i++)
            <a class="{{ ($tasks_confirmed->currentPage() == $i) ? ' active' : '' }}" href="{{ $tasks_confirmed->url($i) }}">{{ $i }}</a>
            @endfor
            @elseif ($tasks_confirmed->currentPage() > 4)
            @for ($i = $tasks_confirmed->currentPage() - 4; $i <= $tasks_confirmed->currentPage() + 4; $i++)
            <a class="{{ ($tasks_confirmed->currentPage() == $i) ? ' active' : '' }}" href="{{ $tasks_confirmed->url($i) }}">{{ $i }}</a>
            @endfor
            @else
            @for ($i = 1; $i <= 9; $i++)
            <a class="{{ ($tasks_confirmed->currentPage() == $i) ? ' active' : '' }}" href="{{ $tasks_confirmed->url($i) }}">{{ $i }}</a>
            @endfor
            @endif

            @if ($tasks_confirmed->currentPage() == $tasks_confirmed->lastPage())
            <a class="{{ ($tasks_confirmed->currentPage() == $tasks_confirmed->lastPage()) ? ' disabled' : '' }}" href="#" >后一页</a>
            @else
            <a class="{{ ($tasks_confirmed->currentPage() == $tasks_confirmed->lastPage()) ? ' disabled' : '' }}" href="{{ $tasks_confirmed->url($tasks_confirmed->currentPage()+1) }}" >后一页</a>
            @endif

            <a class="{{ ($tasks_confirmed->currentPage() == $tasks_confirmed->lastPage()) ? ' disabled' : '' }}" href="{{ $tasks_confirmed->url($tasks_confirmed->lastPage()) }}" >尾页</a>
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