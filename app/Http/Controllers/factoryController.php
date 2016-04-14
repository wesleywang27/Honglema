<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/7
 * Time: 18:35
 */
namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Models\Factory;
use Illuminate\Contracts\Http\Request;
use App\Http\Requests;

class FactoryController extends Controller{
    public function index(){
        return view('factory');
    }

    public function createFactory(){
        $validator = Validator::make(Input::all(), Factory::$rules);

        if ($validator->passes()) {
            // 验证通过就存储用户数据
            $factory = new Factory();
            $factory->username = Input::get('username');
            $factory->mobile = Input::get('mobile');
            $factory->weixinNo = Input::get('weixinNo');
            $factory->title = Input::get('title');
            $factory->company = Input::get('company');
            $factory->category = Input::get('category');
            $factory->advantageSubcategory = Input::get('advantageSubcategory');
            $factory->shipmentOK = Input::get('shipmentOK');
            //$factory->tMall = Input::get('tMall');
            $factory->tie = Input::get('tie');
            $factory->ext1 = Input::get('ext1');
            $factory->ext2 = Input::get('ext2');
            //$factory->ext3 = Input::get('ext3');
            //$factory->ext4 = Input::get('ext4');
            $factory->ext5 = Input::get('ext5');
            //$factory->ext6 = Input::get('ext6');
            //$factory->factorySize = Input::get('factorySize');
            //$factory->factoryOut = Input::get('factoryOut');
            $factory->design = Input::get('design');
            $factory->zhangqi = Input::get('zhangqi');
            $factory->country = Input::get('country');
            $factory->province = Input::get('province');
            $factory->city = Input::get('city');
            $factory->region = Input::get('region');
            $factory->address = Input::get('address');
            $factory->product = Input::get('product');
            $factory->productCount = Input::get('productCount');
            $factory->orderCount = Input::get('orderCount');
            $factory->refund = Input::get('refund');
            $factory->description = Input::get('description');
            $factory->save();
            echo "<script> alert('注册成功!'); </script>";

            return view('index.php');
        } else {
            // 验证没通过就显示错误提示信息
            echo "<script>history.go(-1); alert('请按要求填写真实信息!');</script>";
        }
    }
}