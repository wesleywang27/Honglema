<?php

namespace App\Http\Controllers\star;
use App\Models\Star;
use App\Models\Activity;
use App\Models\User;
use App\Models\ActivityCommodityList;
use App\Models\Order;
use App\Http\Controllers\Controller;
use DB;
class ActivityController extends Controller{
	public function __construct(){
		session_start();
	}
	public function index(){
			// 获取该用户已经抢单的活动
			$star_id = $_SESSION['star_id'];
			$star = Star::where('star_id', $star_id)->first();
			$orders = \App\Models\Order::where('star_id',$star_id)->get();
			$activity_ids = array();
			foreach ($orders as $order) {
				array_push($activity_ids, $order['activity_id']);
			}
		// 获取用户，判断是否为超级用户
			if($star->superuser=='1') {
				// 超级用户可以看到未审核通过（状态为0）的活动
				$activityList = Activity::where('activity_status', 0)->orWhere('activity_status', 1)->whereNotIn('activity_id', $activity_ids)->orderBy('created_at', 'desc')->get();
			}else{
				$activityTemp = Activity::where('activity_status',1)->whereNotIn('activity_id', $activity_ids)->orderBy('created_at', 'desc')->get();
				$activityList = array();
				foreach($activityTemp as $activity){
					if($activity->task_num >$activity->confirm_num){
						$activityList[]=$activity;
					}
				}
			}
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
		$isProfileFilled = self::isProfileFilled();
		if($star->status==0){
			//用户未审核
			return "NotAuth";
		}else if(!$isProfileFilled['result']){
			//用户资料不完整
			return $isProfileFilled['data'];
		}else{
			//符合抢单条件
			$activity_id = intval($_POST['activity_id']);
			$order = new Order();
			$order->activity_id = $activity_id;
			$order->status = 1;
			$order->star_id = $_SESSION['star_id'];
			$order->save();
			return "Success";
			}
	}

	public function isProfileFilled(){
		$isProfileFilled = "";
		$result =true;
		$star = Star::where('star_id', $_SESSION['star_id'])->first();
		if($star->address==""||$star->address==null){
			$isProfileFilled .= "邮寄地址，";
			$result = false;
		}
		if($star->sex==2){
			if($star->cup==""||$star->cup==null){
				$isProfileFilled .= "罩杯，";
				$result = false;
			}
		}
		if($star->shoes_size==""||$star->shoes_size==null){
			$isProfileFilled .= "鞋码，";
			$result = false;
		}
		if($star->shirt_size==""||$star->shirt_size==null){
			$isProfileFilled .= "上衣尺寸，";
			$result = false;
		}
		if($star->pants_size==""||$star->pants_size==null){
			$isProfileFilled .= "下衣尺寸，";
			$result = false;
		}
		if($star->name==""||$star->name==null){
			$isProfileFilled .= "直播昵称，";
			$result = false;
		}
		if($star->alipay_account==""||$star->alipay_account==null){
			$isProfileFilled .= "支付宝账号，";
			$result = false;
		}
		$isProfileFilled .= "信息不完善";
		$data = ['result'=>$result,'data'=>$isProfileFilled];
		return $data;
	}


	public function visitor(){
		$activityList = Activity::where('activity_status',1)->get();
		return view('star.visitor',['list'=>$activityList]);
	}
}