<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/20
 * Time: 17:24
 */
namespace App\Http\Controllers;

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
}