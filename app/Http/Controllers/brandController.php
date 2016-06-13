<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/7
 * Time: 18:34
 */
namespace App\Http\Controllers;

use Validator;
use App\Models\Brand;
use App\Models\ProductPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use EasyWeChat\Foundation\Application;

class BrandController extends Controller{
    public function index(){
        $options = config('wechat');
        $app = new Application($options);
        $js = $app->js;

        $user = session('wechat.oauth_user');
        $brand = Brand::where('open_id',$user->openid)->first();

        if($brand){
            $picture = ProductPicture::where('id',$brand->brand_id)->where('type',1)->get();
            echo "<script> alert('您已成功提交信息!'); </script>";
            return view('brand_info',['brand' => $brand ,'pictures' => $picture]);
        }else{
            return view('brand',['js'=>$js]);
        }
    }

    public function createBrand(){
        $validator = Validator::make(Input::all(), Brand::$rules);

        if ($validator->passes()) {
            // 验证通过就存储用户数据
            $brand = new Brand();
            $user = session('wechat.oauth_user');
            
            $brand->username = Input::get('username');
            $brand->mobile = Input::get('mobile');
            $brand->weixinNo = Input::get('weixinNo');
            $brand->title = Input::get('title');
            $brand->company = Input::get('company');
            $brand->brand = Input::get('brand');
            $brand->sales = Input::get('sales');
            $brand->category = Input::get('category');
            $brand->factory = Input::get('factory');
            $brand->factorySize = Input::get('factorySize');
            $brand->design = Input::get('design');
            $brand->country = Input::get('country');
            //后期完善此部分
            if($brand->country == '中国'){
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
            $brand->refund = Input::get('refund');
            if (Input::get('contact') == ''){
                echo "<script>history.back(); alert('请选择红了吗对接人!');</script>";
                return;
            }
            $brand->contact = Input::get('contact');
            $brand->description = Input::get('description');
            $brand->open_id = $user->openid;

            $pictures = [];
            if(Input::has('itemImage')){
                foreach (Input::get('itemImage') as $img) {
                    $picture = new ProductPicture();
                    $picture->type = 1;//商家类型为1
                    $picture->url = $img;
                    $picture->file_id = pathinfo($img)['filename'];
                    $picture->upload_time = time();
                    $pictures[] = $picture;
                }
            }

            $brand->save();
            $brand->pictures()->saveMany($pictures);

            echo "<script> alert('注册成功!'); </script>";

            return Redirect::to('brand_index');
        } else {
            // 验证没通过就显示错误提示信息
            echo "<script>history.back(); alert('请按要求填写真实信息!');</script>";
        }
    }
    
    public function modifyBrand(){
        $options = config('wechat');
        $app = new Application($options);
        $js = $app->js;

        $user = session('wechat.oauth_user');
        $brand = Brand::where('open_id',$user->openid)->first();
        $picture = ProductPicture::where('id',$brand->brand_id)->where('type',1)->get();

        return view('brand_modify',['brand' => $brand ,'pictures' => $picture ,'js' => $js]);
    }
    
    public function updateBrand(Request $request){
        $user = session('wechat.oauth_user');
        $brand = Brand::where('open_id',$user->openid)->first();
        
        $brand->update($request->all());

        $brand->contact = Input::get('contact');
        $brand->save();

        $pictures = [];
        if(Input::has('itemImage')){
            foreach (Input::get('itemImage') as $img) {
                $picture = new ProductPicture();
                $picture->type = 1;//商家类型为1
                $picture->url = $img;
                $picture->file_id = pathinfo($img)['filename'];
                $picture->upload_time = time();
                $pictures[] = $picture;
            }
        }

        $brand->pictures()->saveMany($pictures);

        return Redirect::to('brand_index');
    }
}