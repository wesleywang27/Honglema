<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/7
 * Time: 18:34
 */
namespace App\Http\Controllers;

use Validator;
use App\Models\Designer;
use App\Models\ProductPicture;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Http\Request;
use Illuminate\Support\Facades\Redirect;
use EasyWeChat\Foundation\Application;

class DesignerController extends Controller{
    public function index(){
        $options = config('wechat');
        $app = new Application($options);
        $js = $app->js;

        $user = session('wechat.oauth_user');
        $designer = Designer::where('open_id',$user->openid)->first();

        if($designer){
            $picture = ProductPicture::where('id',$designer->designer_id)->where('type',2)->get();
            echo "<script> alert('您已成功提交信息!'); </script>";
            return view('designer_info',['designer' => $designer ,'pictures' => $picture]);
        }else{
            return view('designer',['js'=>$js]);
        }
    }

    public function createDesigner(){
        $validator = Validator::make(Input::all(), Designer::$rules);

        if ($validator->passes()) {
            // 验证通过就存储用户数据
            $designer = new Designer();
            $user = session('wechat.oauth_user');

            $designer->designType = Input::get('designType');
            $designer->username = Input::get('username');
            $designer->mobile = Input::get('mobile');
            $designer->weixinNo = Input::get('weixinNo');
            $designer->title = Input::get('title');
            $designer->company = Input::get('company');
            $designer->country = Input::get('country');
            if($designer->country == '中国'){
                $designer->province = Input::get('province');
                $designer->city = Input::get('city');
                $designer->region = Input::get('region');
            }
            $designer->address = Input::get('address');
            $designer->designExperience = Input::get('designExperience');
            $designer->designTeam = Input::get('designTeam');
            $designer->brand = Input::get('brand');
            $designer->designBrand = Input::get('designBrand');
            if (Input::get('contact') == ''){
                echo "<script>history.back(); alert('请选择红了吗对接人!');</script>";
                return;
            }
            $designer->contact = Input::get('contact');
            $designer->description = Input::get('description');
            $designer->open_id = $user->openid;

            $pictures = [];
            if(Input::has('itemImage')){
                foreach (Input::get('itemImage') as $img) {
                    $picture = new ProductPicture();
                    $picture->type = 2;//设计类型为2
                    $picture->url = $img;
                    $picture->file_id = pathinfo($img)['filename'];
                    $picture->upload_time = time();
                    $pictures[] = $picture;
                }
            }

            $designer->save();
            $designer->pictures()->saveMany($pictures);

            return Redirect::to('designer_index');
        } else {
            // 验证没通过就显示错误提示信息
            echo "<script>history.back(); alert('请按要求填写真实信息!');</script>";
        }
    }
}