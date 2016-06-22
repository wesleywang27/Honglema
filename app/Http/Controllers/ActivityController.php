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
use App\Models\Merchant;
use App\Models\PriceLevel;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

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
    public function activityStore($merchant_id ,Request $request){
        $activity = new Activity();
        $activity->merchant_id = $merchant_id;
        $activity->title = $request->input('title');
        $activity->claim = $request->input('claim');
        $activity->time_within = $request->input('time_within');
        $activity->price_level = $request->input('level');

        $price_level = PriceLevel::where('pl_id',$request->input('level'))->first();
        $activity->total_price = $price_level->price;
        $activity->activity_status = 1;

        if(Input::has('itemImage')){
            foreach (Input::get('itemImage') as $img) {
                $activity->picture = $img;
            }
        }
        
        $activity->save();

        $activity = Activity::where('merchant_id',$merchant_id)->orderBy('created_at', 'desc')->first();
        $task = new Task();
        $task->activity_id = $activity->activity_id;
        $task->status = 1;
        $task->save();

        return Redirect::intended("/didi/CommodityCreate/$activity->activity_id");
    }
    //删除活动信息
    public function activityDelete($id){
        session_start();
        if(isset($_SESSION['name'])) {
            Activity::where('activity_id',$id)->delete();
            Task::where('activity_id',$id)->delete();
            ActivityCommodityList::where('activity_id',$id)->delete();

            return Redirect::intended('/didi/ActivityList');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //活动列表页
    public function activityList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $activity = Activity::orderBy('created_at','desc')->paginate(10);

            return view('/didi/activity_list',['activities' => $activity]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //活动详情页
    public function activityInfo($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $activity = Activity::where('activity_id',$id)->first();
            $merchant = Merchant::where('merchant_id',$activity->merchant_id)->first();

            $commodity_id = ActivityCommodityList::where('activity_id',$id)->lists('commodity_id');

            $commodity = [];
            $count = 0;
            foreach ($commodity_id as $cid){
                $commodity[$count] = Commodity::where('commodity_id',$cid)->first();
                $count++;
            }
            
            return view('/didi/activity_info',['activity' => $activity ,'merchant' => $merchant ,'commodities' => $commodity]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
}