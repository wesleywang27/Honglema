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
use App\Models\Order;
use App\Models\PriceLevel;
use App\Models\Star;
use App\Models\Task;
use App\Models\TaskPicture;
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
        $activity->task_num = $request->task_num;
        $activity->total_price = $price_level->price * $request->task_num;

        $activity->activity_status = 0;

        if(Input::has('itemImage')){
            $image = Input::get('itemImage');
            $activity->picture = $image[0];
            $activity->banner_picture = $image[1];
        }
        
        $activity->save();

        return Redirect::intended("/didi/CommodityCreate/$activity->activity_id");
    }
    //删除活动信息
    public function activityDelete($id){
        session_start();
        if(isset($_SESSION['name'])) {
            Activity::where('activity_id',$id)->delete();
            $task = Task::where('activity_id',$id)->first();
            Order::where('task_id',$task->task_id)->delete();
            Task::where('activity_id',$id)->delete();
            ActivityCommodityList::where('activity_id',$id)->delete();

            return Redirect::intended('/didi/ActivityList');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //网红接单列表页
    public function activityModify($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $order_confirming = Order::where('activity_id',$id)->where('status',1)->lists('star_id');

            $star_comfirming = Star::wherein('star_id',$order_confirming)->paginate(10);

            $order_comfirmed = Order::where('activity_id',$id)->where('status',2)->lists('star_id');

            $star_comfirmed = Star::wherein('star_id',$order_comfirmed)->paginate(10);
            
            $activity = Activity::where('activity_id',$id)->first();

            return view('/didi/activity_choose_order',['activity' => $activity ,'stars_confirming' => $star_comfirming ,'stars_confirmed' => $star_comfirmed]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //选择网红
    public function activityChooseStar($activity_id ,$star_id){
        session_start();
        if(isset($_SESSION['name'])) {
            $task = new Task();
            $task->activity_id = $activity_id;
            $task->status = 1;
            $task->save();

            $order = Order::where('activity_id',$activity_id)->where('star_id',$star_id)->first();
            $task = Task::orderBy('task_id','desc')->first();
            $order->task_id = $task->task_id;
            $order->status = 2;
            $order->save();

            $activity = Activity::where('activity_id',$activity_id)->first();
            $activity->confirm_num++;
            $activity->save();

            return Redirect::intended("/didi/ActivityModify/$activity_id");
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //评价网红页
    public function activityEvaluate($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $task = Task::where('activity_id',$id)->first();
            $picture = TaskPicture::where('task_id',$task->task_id)->get();

            return view('/didi/activity_evaluate',['task' => $task ,'pictures' => $picture]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //评价网红
    public function activityEvaluation($id ,Request $request){
        $task = Task::where('task_id',$id)->first();

        $task->evaluation = $request->input('evaluation');
        $task->status = 4;

        $activity = Activity::where('activity_id',$task->activity_id)->first();
        $activity->activity_status = 4;

        $task->save();
        $activity->save();

        return Redirect::intended('/didi/ActivityList');
    }
    //活动审核
    public function activityCheck($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $activity = Activity::where('activity_id',$id)->first();
            $activity->activity_status = 1;
            $activity->save();

            return Redirect::intended('/didi/ActivityCheckList');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //活动列表页
    public function activityList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $activity = Activity::where('activity_status','>',0)->orderBy('created_at','desc')->paginate(10);

            return view('/didi/activity_list',['activities' => $activity]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //活动审核页
    public function activityCheckList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $activity = Activity::where('activity_status',0)->orderBy('created_at','desc')->paginate(10);

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
            $commodity = Commodity::wherein('commodity_id',$commodity_id)->get();
            
            return view('/didi/activity_info',['activity' => $activity ,'merchant' => $merchant ,'commodities' => $commodity]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
}