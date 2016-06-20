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
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActivityController extends Controller{
    //活动添加页
    public function activityCreate($merchant_id){
        session_start();
        if(isset($_SESSION['name'])) {
            return view('/didi/activity_create',['merchant_id' => $merchant_id]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //添加活动信息
    public function activityUpdate($merchant_id ,Request $request){
        
    }
}