<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/7
 * Time: 18:34
 */
namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\Brand;
use Illuminate\Contracts\Http\Request;
use App\Http\Requests;

class BrandController extends Controller{
    public function index(){
        return view('brand');
    }

    public function createBrand(){
        $validator = Validator::make(Input::all(), Brand::$rules);

        if ($validator->passes()) {
            // 验证通过就存储用户数据
            $brand = new Brand();
            $brand->username = Input::get('username');
            $brand->mobile = Input::get('mobile');
            $brand->weixinNo = Input::get('weixinNo');
            $brand->title = Input::get('title');
            $brand->company = Input::get('company');
            $brand->brand = Input::get('brand');
            $brand->sales = Input::get('sales');
            $brand->category = Input::get('category');
            //$brand->tMall = Input::get('tMall');
            //$brand->tie = Input::get('tie');
            $brand->factory = Input::get('factory');
            $brand->factorySize = Input::get('factorySize');
            //$brand->factoryOut = Input::get('factoryOut');
            $brand->design = Input::get('design');
            $brand->zhangqi = Input::get('zhangqi');
            $brand->country = Input::get('country');
            //后期完善此部分
            if($brand->country == '100000'){
                $brand->province = Input::get('province');
                $brand->city = Input::get('city');
                $brand->region = Input::get('region');
            }
            $brand->address = Input::get('address');
            $brand->product = Input::get('product');
            $brand->price = Input::get('price');
            $brand->style = Input::get('style');
            $brand->customPosition = Input::get('customPosition');
            $brand->customAge = Input::get('customAge');
            //$brand->refund = Input::get('refund');
            $brand->description = Input::get('description');

            $brand->save();
            echo "<script> alert('注册成功!'); </script>";

            return veiw('index.php');
        } else {
            // 验证没通过就显示错误提示信息
            echo "<script>history.go(-1); alert('请按要求填写真实信息!');</script>";
        }
    }
}