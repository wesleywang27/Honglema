<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/7
 * Time: 18:34
 */
namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Redirect;
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
            $designer->designExperience = Input::get('designExperience');
            $designer->designTeam = Input::get('designTeam');
            $designer->brand = Input::get('brand');
            $designer->designBrand = Input::get('designBrand');
            $designer->description = Input::get('description');

            $designer->save();
            echo "<script> alert('注册成功!'); </script>";

            return Redirect::to('index.php');
        } else {
            // 验证没通过就显示错误提示信息
            echo "<script>history.go(-1); alert('请按要求填写真实信息!');</script>";
        }
    }
}