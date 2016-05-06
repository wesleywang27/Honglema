<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/7
 * Time: 18:35
 */
namespace App\Http\Controllers;

use Validator;
use App\Models\Factory;
use App\Models\ProductPicture;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Http\Request;
use Illuminate\Support\Facades\Redirect;
use EasyWeChat\Foundation\Application;

class FactoryController extends Controller{
    public function index(){
        $options = config('wechat');
        $app = new Application($options);
        $js = $app->js;

        $user = session('wechat.oauth_user');
        $factory = Factory::where('open_id',$user->openid)->first();

        if($factory){
            $picture = ProductPicture::where('id',$factory->factory_id)->where('type',0)->get();
            return view('factory_info',['factory' => $factory ,'pictures' => $picture]);
        }else{
            return view('factory',['js'=>$js]);
        }
    }

    public function createFactory(){
        $validator = Validator::make(Input::all(), Factory::$rules);

        if ($validator->passes()) {
            // 验证通过就存储用户数据
            $factory = new Factory();
            $user = session('wechat.oauth_user');

            $factory->username = Input::get('username');
            $factory->mobile = Input::get('mobile');
            $factory->weixinNo = Input::get('weixinNo');
            $factory->title = Input::get('title');
            $factory->company = Input::get('company');
            $factory->country = Input::get('country');
            //选择非中国区域加以判断 后续改进
            if($factory->country == '中国'){
                $factory->province = Input::get('province');
                $factory->city = Input::get('city');
                $factory->region = Input::get('region');
            }
            $factory->address = Input::get('address');
            $factory->category = Input::get('category');
            $factory->advantageSubcategory = Input::get('advantageSubcategory');
            $factory->ext1 = Input::get('ext1');
            $factory->ext2 = Input::get('ext2');
            $factory->ext5 = Input::get('ext5');
            $factory->orderCount = Input::get('orderCount');
            $factory->productCount = Input::get('productCount');
            $factory->design = Input::get('design');
            $factory->refund = Input::get('refund');
            $factory->shipmentOK = Input::get('shipmentOK');
            $factory->zhangqi = Input::get('zhangqi');
            if (Input::get('contact') == ''){
                echo "<script>history.back(); alert('请选择红了吗对接人!');</script>";
                return;
            }
            $factory->contact = Input::get('contact');
            $factory->description = Input::get('description');
            $factory->open_id = $user->openid;

            $pictures = [];
            if(Input::has('itemImage')){
                foreach ( Input::get('itemImage') as $img) {
                    $picture = new ProductPicture();
                    $picture->type = 0;//工厂类型为0
                    $picture->url = $img;
                    $picture->file_id = pathinfo($img)['filename'];
                    $picture->upload_time = time();
                    $pictures[] = $picture;
                }
            }

            $factory->save();
            $factory->pictures()->saveMany($pictures);

            echo "<script> alert('注册成功!'); </script>";

            return Redirect::to('factory_index');
        } else {
            // 验证没通过就显示错误提示信息
            echo "<script>history.back(); alert('请按要求填写真实信息!');</script>";
        }
    }
}