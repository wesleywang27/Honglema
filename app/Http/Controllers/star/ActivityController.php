<?php

namespace App\Http\Controllers\star;
use Illuminate\Http\Request;
use App\Models\Star;
use App\Models\Activity;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\StarPicture;
use App\Models\ActivityCommodityList;
use App\Models\Order;
use App\Http\Controllers\Controller;
class ActivityController extends Controller{
	public function __construct(){
		session_start();

	}

	public function index(){
		$activityList = Activity::where('activity_status',1)->get();
		// echo "<pre>";
		// var_dump($activityList);die;
		return view('star.activityList',['list'=>$activityList]);
	}

	public function detail($id){
		$activityDetail = Activity::where('activity_id',$id)->first();

		//获取该活动下的所有commodity_id
      	$commodity_ids = ActivityCommodityList::where('activity_id',$activityDetail['activity_id'])->get();
		
		// echo "<pre>";
		// var_dump($activityDetail);die;
		return view('star.activityDetail',['detail'=>$activityDetail,'commodity_ids'=>$commodity_ids]);
	}

	public function setOrder(){
		$task_id = intval($_POST['task_id']);
		$order = new Order();
        $order->task_id = $task_id;
        $order->status = 1;
        //$order->star_id = 1;
       	$order->star_id = $_SESSION['star_id'];
        $order->save();
		//var_dump($activityDetail);die;
	}
	public function visitor(){
		$activityList = Activity::where('activity_status',1)->get();
		return view('star.visitor',['list'=>$activityList]);
	}
}