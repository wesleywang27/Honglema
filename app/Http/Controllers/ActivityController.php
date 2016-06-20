<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/20
 * Time: 16:14
 */
namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityCommodityList;
use App\Models\Commodity;
use App\Models\CommodityPicture;
use App\Models\Merchant;
use App\Models\PriceLevel;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActivityController extends Controller{
    //活动添加页
    public function activityCreate($merchant_id){
        session_start();
        if(isset($_SESSION['name'])) {
            $price_level = PriceLevel::all();
            
            return view('/didi/activity_create',['merchant_id' => $merchant_id ,'price_levels' => $price_level]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //添加活动信息
    public function activityUpdate($merchant_id ,Request $request){
        $activity = new Activity();

        $activity->merchant_id = $merchant_id;
        $activity->title = $request->input('title');
        $activity->claim = $request->input('claim');
        $activity->time_within = $request->input('time_within');
        $activity->price_level = $request->input('level');

        $price_level = PriceLevel::where('pl_id',$request->input('level'))->first();
        $activity->total_price = $price_level->price;
        $activity->activity_status = 1;

        $activity->save();

        return Redirect::intended('/didi/');
    }
}