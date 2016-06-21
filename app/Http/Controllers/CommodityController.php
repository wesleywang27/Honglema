<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/20
 * Time: 17:24
 */
namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityCommodityList;
use App\Models\Commodity;
use App\Models\CommodityPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommodityController extends Controller{
    //商品添加页
    public function commodityCreate($activity_id){
        session_start();
        if(isset($_SESSION['name'])) {
            return view('/didi/commodity_create',['activity_id' => $activity_id]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //添加商品信息
    public function commodityStore($activity_id ,Request $request){
        $commodity = new Commodity();

        $activity = Activity::where('activity_id',$activity_id)->first();
        $commodity->merchant_id = $activity->merchant_id;
        $commodity->name = $request->input('name');
        $commodity->introduction = $request->input('introduction');
        $commodity->url = $request->input('url');

        $commodity->save();

        $commodity = Commodity::where('merchant_id',$activity->merchant_id)->orderBy('created_at','desc')->first();
        $activity_commodity_list = new ActivityCommodityList();
        $activity_commodity_list->activity_id = $activity_id;
        $activity_commodity_list->commodity_id = $commodity->commodity_id;

        $activity_commodity_list->save();

        return Redirect::intended('/didi/ActivityList');
    }
}