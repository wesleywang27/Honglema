<?php

namespace App\Http\Controllers\star;

use App\Models\OAuthUser;
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
use App\Http\Controllers\Controller;
use DB;

class StarController extends RootController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function order()
    {
        $star_id = $_SESSION['star_id'];
        $star = Star::where('star_id', $star_id)->first();
        $orders = Order::where('star_id', $star_id)->get();
        $data = array();
        foreach ($orders as $order) {
            //each order  has one task
            $task = Task::where('task_id', $order->task_id)->first();
            //each task belong to one activity
            $activity = Activity::where('activity_id', $task->activity_id)->first();
            //each activity belong to one  merchant
            $merchant = Merchant::where('merchant_id', $activity->merchant_id)->first();
            //each activity has many commodity
            $relations = DB::table('activity_commodity_lists')->where('activity_id', $activity->activity_id)->get();
            //commodity array initialize
            $commodities = array();
            foreach ($relations as $relation) {
                $commodities[] = Commodity::where('commodity_id', $relation->commodity_id)->get();
            }

            $data[] = array('title' => $activity->title,
                'merchant_name' => $merchant->name,
                'picture'=>$activity->picture,
                'avatar' => $merchant->avatar,
                'total_price' => $activity->total_price,
                'requirement' => $activity->claim,
                'task_status' => $task->status,
                'order_status' => $order->status,
                'task_id' => $task->task_id,
                'merchant_id' => $merchant->merchant_id,
                'order_id' => $order->order_id);
        }
        return view('/star/star_order', ["data" => $data]);
    }

    public function merchant_info(Request $request)
    {
        $merchant_id = $request->input('merchant_id');
        $merchant = Merchant::where('merchant_id', $merchant_id)->first();
        return view('star/merchant_info', ["merchant" => $merchant]);
    }

    public function info(Request $request)
    {
        $star_id = $_SESSION['star_id'];
        $star = Star::where('star_id', $star_id)->first();
        $starPictures= StarPicture::where('uid',$star->star_id)->get();
        return view('star/star_info', ["star" => $star, "pictures"=>$starPictures]);

    }

    public function update()
    {
        $star_id = $_SESSION['star_id'];
        $star = Star::where('star_id', $star_id)->first();
        $input = Input::all();
        $formKey = array_keys($input);
        foreach ($formKey as $value) {
            if (isset($input[$value])) {
                $star->$value = $input[$value];
            }
        }
        $star->save();
    }

    public function uploadimg(Request $request)
    {
        $star_id = $_SESSION['star_id'];
        $url = $request->input('url');
        $starPicture = new StarPicture();
        $starPicture->url = $url;
        $starPicture->file_id = pathinfo($url)['filename'];
        $starPicture->uid = $star_id;
        $starPicture->save();
    }

    public function order_detail(Request $request)
    {
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        //each order  has one task
        $task = Task::where('task_id', $order->task_id)->first();
        //each task belong to one activity
        $activity = Activity::where('activity_id', $task->activity_id)->first();
        //each activity belong to one  merchant
        $merchant = Merchant::where('merchant_id', $activity->merchant_id)->first();
        //each activity has many commodity
        $relations = DB::table('activity_commodity_lists')->where('activity_id', $activity->activity_id)->get();

        $commodities = array();
       foreach ($relations as $relation) {
          $commodities[] = Commodity::where('commodity_id', $relation->commodity_id)->first();
       }
        $data = array('order' => $order,
            'task' => $task,
            'order_status'=>$order->status,
            'task_status'=>$task->status,
            'activity' => $activity,
            'merchant' => $merchant,
        );
        return view('star/order_detail', ["data" => $data,'commodities' => $commodities,]);
    }

    public function cancelOrder(Request $request)
    {
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        $order->status='0';
        $order->save();
    }

    public function  task_result(Request $request)
    {
        $order_id = $request->input('order_id');
        return view('star/task_result', ['order_id' => $order_id]);
    }

    public function submitTaskResult(Request $request)
    {
        // 网红提交结果，修改任务状态为3（已推广） 
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        $task = Task::where('task_id', $order->task_id)->first();
        $task_id = $task->task_id;
        $task->status = 3;
        $task->save();
        // 活动状态修改为3（红人已提交）
        $activity = Activity::where('activity_id',$task->activity_id)->first();
        $activity->activity_status = 3;
        $activity->save();
        $taskPictures = $request->input('imgdata');

          if(count($taskPictures)>0){
           foreach($taskPictures as $url) {
                $taskPicture = new TaskPicture();
                $taskPicture->task_id = $task_id;
                $taskPicture->url = $url;
                $taskPicture->file_id = pathinfo($url)['filename'];
                $taskPicture->save();
            }
        }
    }

}
