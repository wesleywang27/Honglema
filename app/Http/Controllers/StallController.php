<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/15
 * Time: 12:04
 */
namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Input;
use App\Models\Stall;
use Illuminate\Contracts\Http\Request;
use App\Http\Requests;

class StallController extends Controller{
    public function index(){
        return view('stall');
    }
    
    public function createStall(){
        $validator = Validator::make(Input::all(), Stall::$rules);

        if ($validator->passes()) {
            // 验证通过就存储用户数据
            $stall = new Stall();
            $stall->username = Input::get('username');
            $stall->mobile = Input::get('mobile');
            $stall->weixinNo = Input::get('weixinNo');
            $stall->title = Input::get('title');
            $stall->stallName = Input::get('stallName');
            $stall->stallNum = Input::get('stallNum');
            $stall->country = Input::get('country');
            //后期完善此部分
            if($stall->country == '100000'){
                $stall->province = Input::get('province');
                $stall->city = Input::get('city');
                $stall->region = Input::get('region');
            }
            $stall->address = Input::get('address');
            $stall->style = Input::get('style');
            $stall->category = Input::get('category');
            $stall->shipmentOK = Input::get('shipmentOK');

            $stall->save();
            echo "<script> alert('注册成功!'); </script>";

            return view('index');
        } else {
            // 验证没通过就显示错误提示信息
            echo "<script>history.go(-1); alert('请按要求填写真实信息!');</script>";
        }
    }
}