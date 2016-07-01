<?php

namespace App\Http\Controllers\star;
use Illuminate\Http\Request;
use App\Models\Star;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\Activity;
use App\Models\Task;
use App\Models\StarPicture;
use App\Models\Order;
use App\Models\Merchant;
use App\Models\Commodity;
use App\Models\TaskPicture;
use DB;

class StarController extends RootController
{
    public function __construct()
    {
        parent::__construct();
    }

    //通过网红id网红任务(订单)列表
    public function order()
    {
        $star_id = $_SESSION['star_id'];
        $orders = Order::where('star_id', $star_id)->orderBy('created_at', 'desc')->get();
        $data = array();
        foreach ($orders as $order) {
            //each task belong to one activity
            $activity = Activity::where('activity_id', $order->activity_id)->first();
            //each activity belong to one  merchant
            $merchant = Merchant::where('merchant_id', $activity->merchant_id)->first();
            //each activity has many commodity
            $relations = DB::table('activity_commodity_lists')->where('activity_id', $activity->activity_id)->get();
            //commodity array initialize
            $commodities = array();
            foreach ($relations as $relation) {
                $commodities[] = Commodity::where('commodity_id', $relation->commodity_id)->get();
            }
            $isAvailable = $activity->task_num >$activity->confirm_num?true:false;
            if ($order->status == 2) {
                $task = Task::where('task_id', $order->task_id)->first();
                $data[] = array(
                    'title' => $activity->title,
                    'merchant_name' => $merchant->name,
                    'picture' => $activity->picture,
                    'avatar' => $merchant->avatar,
                    'total_price' => $activity->total_price,
                    'requirement' => $activity->claim,
                    'order_status' => $order->status,
                    'merchant_id' => $merchant->merchant_id,
                    'order_id' => $order->order_id,
                    'task_status' => $task->status);
            } else {
                $data[] = array(
                    'title' => $activity->title,
                    'merchant_name' => $merchant->name,
                    'picture' => $activity->picture,
                    'avatar' => $merchant->avatar,
                    'total_price' => $activity->total_price,
                    'requirement' => $activity->claim,
                    'order_status' => $order->status,
                    'isAvailable' => $isAvailable,
                    'merchant_id' => $merchant->merchant_id,
                    'order_id' => $order->order_id);
            }


        }
        return view('/star/star_order', ["data" => $data]);
    }

    //通过商家id查询商家信息
    public function merchant_info(Request $request)
    {
        $merchant_id = $request->input('merchant_id');
        $merchant = Merchant::where('merchant_id', $merchant_id)->first();
        return view('star/merchant_info', ["merchant" => $merchant]);
    }

    //通过网红id网红信息
    public function info(Request $request)
    {
        $star_id = $_SESSION['star_id'];
        $star = Star::where('star_id', $star_id)->first();
        $starPictures = StarPicture::where('uid', $star->star_id)->get();
        return view('star/star_info', ["star" => $star, "pictures" => $starPictures]);
    }

    //更新网红信息
    public function update()
    {
        $star_id = $_SESSION['star_id'];
        $star = Star::where('star_id', $star_id)->first();
        $input = Input::all();
        //获取表单的key
        $formKey = array_keys($input);
        foreach ($formKey as $value) {
            if (isset($input[$value])) {
                $star->$value = $input[$value];
            }
        }
        $star->save();
    }

    //网红相册
    public function uploadimg(Request $request)
    {
        $star_id = $_SESSION['star_id'];
        $starPictures = $request->input('imgdata');
        if(count($starPictures)>0){
            foreach($starPictures as $url) {
                $starPicture = new StarPicture();
                $starPicture->url = $url;
                $starPicture->file_id = pathinfo($url)['filename'];
                $starPicture->uid = $star_id;
                $starPicture->save();
            }
        }
    }

    //订单详情
    public function order_detail(Request $request)
    {
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        //each task belong to one activity
        $activity = Activity::where('activity_id', $order->activity_id)->first();
        //each activity belong to one  merchant
        $merchant = Merchant::where('merchant_id', $activity->merchant_id)->first();
        //each activity has many commodity
        $relations = DB::table('activity_commodity_lists')->where('activity_id', $activity->activity_id)->get();

        $isAvailable = $activity->task_num >$activity->confirm_num?true:false;

        $commodities = array();
        foreach ($relations as $relation) {
            $commodities[] = Commodity::where('commodity_id', $relation->commodity_id)->first();
        }

        if ($order->status == 2) {
            $task = Task::where('task_id', $order->task_id)->first();
            $data = array('order' => $order,
                'task' => $task,
                'order_status' => $order->status,
                'activity' => $activity,
                'merchant' => $merchant,
            );
        } else {
            $data = array('order' => $order,
                'order_status' => $order->status,
                'activity' => $activity,
                'merchant' => $merchant,
                'isAvailable' => $isAvailable,
            );
        }
        return view('star/order_detail', ["data" => $data, 'commodities' => $commodities,]);
    }

    //取消订单
    public function cancelOrder(Request $request)
    {
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        if($order->status==1){
        $order->status = '0';
        $order->save();}
    }

    //跳转到任务结果界面
    public function  task_result(Request $request)
    {
        $order_id = $request->input('order_id');
        return view('star/task_result', ['order_id' => $order_id]);
    }

    //提交任务结果
    public function submitTaskResult(Request $request)
    {
        // 网红提交结果，修改任务状态为3（已推广） 
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        $task = Task::where('task_id', $order->task_id)->first();
        if($task->status==2){
        $task_id = $task->task_id;
        $task->status = 3;
        $taskPictures = $request->input('imgdata');
        $playback = $request->input('playback');
        $views = $request->input('views');
        $duration = $request->input('duration');
            $task->playback_url=$playback;
            $task->views=$views;
            $task->duration=$duration;
            $task->save();
        if (count($taskPictures) > 0) {
            foreach ($taskPictures as $url) {
                $taskPicture = new TaskPicture();
                $taskPicture->task_id = $task_id;
                $taskPicture->url = $url;
                $taskPicture->file_id = pathinfo($url)['filename'];
                $taskPicture->save();
            }
        }}
    }

}
