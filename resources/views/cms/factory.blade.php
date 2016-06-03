@extends('cms.banner')

@section('content')
<div class="page_title">
    <h2 class="fl">工厂信息列表</h2>
    <form action="/cms/factoryList" id="baseInfoForm" method="post">
        <?php echo csrf_field(); ?>
        <input class="fr top_rt_btn" style="float:right; margin-top: 8px;" id="saveSubmit" name="commit" type="submit" value="查找"/>
        <input type="text" name="name" class="textboxsearch"
               @if ($name != 'all')
               value="{{ $name }}"
               @endif
               placeholder="按姓名查找"/>
        <select class="select" name="category" style="float:right; margin-top: 8px; margin-right: 8px;">
            @if ($category != 'all')
            <option value="{{ $category }}">{{ $category }}</option>
            @endif
            <option value="">选择类目</option>
            <option value="女装">女装</option>
            <option value="男装">男装</option>
            <option value="内衣">内衣</option>
            <option value="鞋靴">鞋靴</option>
            <option value="帽子">帽子</option>
            <option value="食品">食品</option>
            <option value="数码家电">数码家电</option>
            <option value="家居家纺">家居家纺</option>
            <option value="家具建材">家具建材</option>
            <option value="珠宝饰品">珠宝饰品</option>
            <option value="户外运动">户外运动</option>
            <option value="母婴">母婴</option>
            <option value="美妆">美妆</option>
            <option value="箱包">箱包</option>
            <option value="汽车">汽车</option>
            <option value="百货">百货</option>
            <option value="情趣用品">情趣用品</option>
            <option value="其他">其他</option>
        </select>
    </form>
</div>

<div style="margin-left: 100px; margin-top:20px;width: 1000px;">
    <div>
        <p>总{{ $total }}条，合作商户 条</p>
    </div>
    @foreach ($factories as $factory)
        <div style="position: relative;float: left;margin-right: 20px; margin-bottom: 20px;">
            <div style="display: table; margin-bottom: 20px;">
                <a href="{{URL::action('CMSController@factory_info', ['id' => $factory->factory_id]) }}">
                @if (count($factory->pictures) > 0)
                    <img src="{{$factory->pictures[0]->url}}" width="200px" height="200px">
                @else
                    <img src="http://image.weipai.cn/honglema/default.gif"  width="200px" height="200px">
                @endif
                </a>
            </div>
            <div style="text-align: center;">
                <span>{{$factory->company }}</span>
            </div>
        </div>
    @endforeach

</div>


<aside class="paging" style="clear: both">
    <a href="{{ url('/cms/factory_export') }}" style="float: left;">导出EXcel</a>
    <a href="/cms/factory_create" style="float: left;margin-left: 10px;" >添加工厂</a>

    <a class="{{ ($factories->currentPage() == 1) ? ' disabled' : '' }}" href="{{ $factories->url(1) }}">首页</a>

    @if ($factories->currentPage() == 1)
    <a class="" href="#">前一页</a>
    @else
    <a class="" href="{{ $factories->url($factories->currentPage() - 1) }}">前一页</a>
    @endif

    @if ($factories->lastPage() <= 9)
    @for ($i = 1; $i <= $factories->lastPage(); $i++)
    <a class="{{ ($factories->currentPage() == $i) ? ' active' : '' }}" href="{{ $factories->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($factories->currentPage() > 4 && $factories->currentPage() < $factories->lastPage() - 4)
    @for ($i = $factories->currentPage() - 4; $i <= $factories->currentPage() + 4; $i++)
    <a class="{{ ($factories->currentPage() == $i) ? ' active' : '' }}" href="{{ $factories->url($i) }}">{{ $i }}</a>
    @endfor
    @elseif ($factories->currentPage() > 4)
    @for ($i = $factories->lastPage() - 8; $i <= $factories->lastPage(); $i++)
    <a class="{{ ($factories->currentPage() == $i) ? ' active' : '' }}" href="{{ $factories->url($i) }}">{{ $i }}</a>
    @endfor
    @else
    @for ($i = 1; $i <= 9; $i++)
    <a class="{{ ($factories->currentPage() == $i) ? ' active' : '' }}" href="{{ $factories->url($i) }}">{{ $i }}</a>
    @endfor
    @endif

    @if ($factories->currentPage() == $factories->lastPage())
    <a class="" href="#" >后一页</a>
    @else
    <a class="" href="{{ $factories->url($factories->currentPage()+1) }}" >后一页</a>
    @endif

    <a class="{{ ($factories->currentPage() == $factories->lastPage()) ? ' disabled' : '' }}" href="{{ $factories->url($factories->lastPage()) }}" >尾页</a>
</aside>
@endsection