<?php
/**
 * 
 * author: 田旭耕
 * 
 */
namespace App\Http\Controllers\Merchant;

use App\Http\Requests;
use Illuminate\Contracts\Http\Request;
use Illuminate\Support\Facades\Redirect;
use EasyWeChat\Foundation\Application;
use App\Http\Controllers\Controller;

class ActivityController extends RootController{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        // var_dump(1);die;
        // $user = session('wechat.oauth_user');
        // $options = config('wechat');
        //$app = new Application($options);
       // $js = $app->js;
        return view('merchant.activityOrder');
        //return view('merchant.index');
       
    }

    //发布活动
    public function addOrder(){
        return view('merchant.addOrder');
    }

    public function modify(){
        return view('merchant.personalData');
    }

    public function activityDetail($id){
        /*
            根据数据库中该活动的状态字段确定前台页面的展示
            获取$detail['status']
            1表示未开始
            2表示正在进行
            3表示已结束
        */
        $detail['status'] = 2;
        return view('merchant.activity_detail',['status' => $detail['status']]);
    }
}