<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/7
 * Time: 18:34
 */
namespace App\Http\Controllers;

use App\Models\ProductPicture;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Models\Designer;
use Illuminate\Contracts\Http\Request;
use App\Http\Requests;

class DesignerController extends Controller{
    public function index(){
        return view('designer');
    }
    
    public function createDesigner(){

        $validator = Validator::make(Input::all(), Designer::$rules);
        
        if ($validator->passes()) {
            // 验证通过就存储用户数据
            $designer = new Designer();
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
            $designer->description = Input::get('description');

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

            echo "<script> alert('注册成功!'); </script>";

            return view('index');
        } else {
            // 验证没通过就显示错误提示信息
            echo "<script>history.back(); alert('请按要求填写真实信息!');</script>";
        }
    }
}