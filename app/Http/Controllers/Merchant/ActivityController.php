<?php
/**
 * 
 * author: 田旭耕
 * 
 */
namespace App\Http\Controllers\Merchant;

use App\Http\Requests;
use Illuminate\Contracts\Http\Request;
use Illuminate\Support\Facades\Redirect;
use EasyWeChat\Foundation\Application;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivityCommodityList;
use App\Models\Task;
use App\Models\TaskPicture;
use App\Models\Star;
use App\Models\Order;
use App\Models\PriceLevel;
use App\Models\Commodity;

class ActivityController extends RootController{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $merchant_id = $_SESSION['merchant_id'];
        $activity = Activity::where('merchant_id',$merchant_id)->get();
        return view('merchant.activityOrder',['list'=>$activity]);
        //return view('merchant.index');
       
    }

    //发布活动
    public function addActivity(){
        $priceLevel = PriceLevel::all();
        return view('merchant.add_activity',['priceLevel'=>$priceLevel]);
    }

    //保存发布的活动
    public function saveActivity(){
       
        $commodity_names = $_POST['commodity_name'];
        $commodity_urls = $_POST['commodity_url'];
        unset($_POST['commodity_name'],$_POST['commodity_url'],$_POST['img']);

        //保存Activity
        $activity = new Activity();
        foreach ($_POST as $key => $value) {
           $activity[$key] = $value; 
        }
        $activity['merchant_id'] = $_SESSION['merchant_id'];
        $activity['activity_status'] = 0;
        $activity->save();
        $activity_id = $activity['activity_id'];
        //保存Task
        $task = new Task();
        $task['activity_id'] = $activity_id;
        $task['status'] = 0;
        $task->save();

        //保存商品
        for($i = 0;$i < count($commodity_names); $i ++){
            //保存commodity
            $commodity = new Commodity();
            $commodity['merchant_id'] = $_SESSION['merchant_id'];
            $commodity['name'] = $commodity_names[$i];
            $commodity['url'] = $commodity_urls[$i];
            $commodity->save();

            //保存commodity和activity的关联表ActivityCommodityList
            $activityCommodityList = new ActivityCommodityList();
            $activityCommodityList['activity_id'] = $activity_id;
            $activityCommodityList['commodity_id'] = $commodity['commodity_id'];
            $activityCommodityList->save();
        }
        Redirect::to('/Merchant/activityOrder')->send();

    }


    public function modify(){
        return view('merchant.personalData');
    }

    public function activityDetail($id){
        /*
            根据数据库中该活动的状态字段确定前台页面的展示
            获取$detail['status']
            1表示未开始
            2表示正在进行
            3表示已结束
        */
        $activityDetail = Activity::where('activity_id',$id)->first();

        //获取该活动下的所有commodity_id
        $commodity_ids = ActivityCommodityList::where('activity_id',$activityDetail['activity_id'])->get();
        
        return view('merchant.activity_detail',['detail'=>$activityDetail,'commodity_ids'=>$commodity_ids]);
    }

    public function setOrder(){
        $star_id = intval($_POST['star_id']);
        $task_id = intval($_POST['task_id']);
        $status = intval($_POST['order_status']);
        $order = Order::where('task_id',$task_id)->where('star_id',$star_id)->first();
        $order['status'] = $status;
        $order->save();
        if($status == 2){
            $task = Task::where('task_id',$task_id)->first();
            $task['status'] = 1;
            $task->save();
            $activity = Activity::where('activity_id',$task['activity_id'])->first();
            $activity['activity_status'] = 2;
            $activity->save();
        }
    }

    //物流详情页
    public function logistic($activity_id){
        $task = Task::where('activity_id',$activity_id)->first();
        return view('merchant.logistic',['task'=>$task]);
    }

    //保存物流信息
    public function saveLogistic(){
        $task_id = $_POST['task_id'];
        $express_company = $_POST['company'];
        $express_num = $_POST['num'];

        $task = Task::where('task_id',$task_id)->first();

        $task['express_company'] = $express_company;
        $task['express_num'] = $express_num;
        $task['status'] = 2;

        $task->save();
    }

    //跳转到评论页
    public function comment($task_id){
        $task_Pic = TaskPicture::where('task_id',$task_id)->get();
        $task = Task::where('task_id',$task_id)->first();
        return view('merchant.comment',['taskPics'=>$task_Pic,'task'=>$task]);
    }

    //保存评论
    public function saveComment(){
        //var_dump($_POST['task_id']);die;
        $task_id = intval($_POST['task_id']);
        $comment = $_POST['comment'];
        $task = Task::where('task_id',$task_id)->first();
        $task['evaluation'] = $comment;
        $task['status'] = 4;
        $task->save();
    }

    //查看网红详情
    public function starDetail($star_id){
        $star = Star::where('star_id',$star_id)->first();

        return view('merchant.star_detail');

    }

}