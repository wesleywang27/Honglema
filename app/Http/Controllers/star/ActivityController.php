<?php

namespace App\Http\Controllers\star;
use App\Models\Star;
use App\Models\Activity;
use App\Models\User;
use App\Models\ActivityCommodityList;
use App\Models\Order;
use App\Http\Controllers\Controller;
class ActivityController extends Controller{
	public function __construct(){
		session_start();

	}
	public function index(){
		$star_id = $_SESSION['star_id'];
      	$orders = Order::where('star_id',$star_id)->get();
		$activity_ids = array();
      	foreach ($orders as $order) {
			$activity_ids[]=$order->activity_id;
      	}
		$activityList = Activity::where('activity_status',1)->whereNotIn('activity_id',$activity_ids)->orderBy('created_at','desc')->get();
		return view('star.activityList',['list'=>$activityList]);
	}

	public function detail($id){
		$activityDetail = Activity::where('activity_id',$id)->first();
		//获取该活动下的所有commodity_id
      	$commodity_ids = ActivityCommodityList::where('activity_id',$activityDetail['activity_id'])->get();
		return view('star.activityDetail',['detail'=>$activityDetail,'commodity_ids'=>$commodity_ids]);
	}

	public function setOrder(){
		$star = Star::where('star_id', $_SESSION['star_id'])->first();
		if($star->status==0){
			//用户未审核
			return "NotAuth";
		}else if(!self::isProfileFilled()){
			//用户资料不完整
			return "NotFill";
		}else{
			//符合抢单条件
			$task_id = intval($_POST['task_id']);
			$order = new Order();
			$order->activity_id = $activity_id;
			$order->status = 1;
			$order->star_id = $_SESSION['star_id'];
			$order->save();
			}
	}

	public function isProfileFilled(){
		$isProfileFilled = true;
		$star = Star::where('star_id', $_SESSION['star_id'])->first();
		if($star->address==""||$star->address==null){
			$isProfileFilled = false;
		}
		return $isProfileFilled;
	}


	public function visitor(){
		$activityList = Activity::where('activity_status',1)->get();
		return view('star.visitor',['list'=>$activityList]);
	}
}