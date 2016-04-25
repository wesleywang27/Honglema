<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/12
 * Time: 16:29
 */
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Designer;
use App\Models\Factory;
use App\Models\Stall;
use App\User;
use App\Models\ProductPicture;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Auth;

class CMSController extends Controller{
    //访问首页时验证是否登录
    public function index(){
        session_start();
        if(isset($_SESSION['username'])){
            $user = User::where('name',$_SESSION['username'])->first();
            if ($user->is_admin == 1)
                $_SESSION['is_admin'] = 1;
            else
                $_SESSION['is_admin'] = 0;
            if ($user->factory_right == 1)
                $_SESSION['factory_right'] = 1;
            else
                $_SESSION['factory_right'] = 0;
            if ($user->brand_right == 1)
                $_SESSION['brand_right'] = 1;
            else
                $_SESSION['brand_right'] = 0;
            if ($user->designer_right == 1)
                $_SESSION['designer_right'] = 1;
            else
                $_SESSION['designer_right'] = 0;
            if ($user->stall_right == 1)
                $_SESSION['stall_right'] = 1;
            else
                $_SESSION['stall_right'] = 0;
            return view("/cms/index");
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //用户登录
    public function login(){
        if (Auth::attempt(array('name'=>Input::get('name'), 'password'=>Input::get('password')))){
            session_start();
            $_SESSION['username'] = Input::get('name');
            return Redirect::intended('/cms/index');
        }
        else{
            echo "<script>history.go(-1); alert('用户名密码错误!');</script>";
        }
    }
    //用户登出
    public function logout(){
        session_start();
        unset($_SESSION['username']);
        return Redirect::intended('/cms/login.php');
    }
    //工厂列表页面
    public function factory(){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['factory_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $factory = Factory::paginate(10);
                return view('/cms/factory',['factories' => $factory]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //工厂详情页面
    public function factory_info($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['factory_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $factory = Factory::where('factory_id',$id)->first();
                $picture = ProductPicture::where('id',$id)->where('type',0)->get();
                return view('cms/factory_info',['factory' => $factory, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //工厂信息修改页
    public function modifyFactoryInfo($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['factory_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $factory = Factory::where('factory_id',$id)->first();
                $picture = ProductPicture::where('id',$id)->where('type',0)->get();
                return view('/cms/factory_modify',['factory' => $factory, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //修改工厂信息
    public function updateFactoryInfo($id){
        session_start();
        if(isset($_SESSION['username'])) {
            if ($_SESSION['factory_right'] == 0) {
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $factory = Factory::where('factory_id',$id)->first();
                $factory->username = Input::get('username');
                $factory->mobile = Input::get('mobile');
                $factory->weixinNo = Input::get('weixinNo');
                $factory->title = Input::get('title');
                $factory->company = Input::get('company');
                $factory->province = Input::get('province');
                $factory->city = Input::get('city');
                $factory->region = Input::get('region');
                $factory->address = Input::get('address');
                $factory->category = Input::get('category');
                $factory->advantageSubcategory = Input::get('advantageSubcategory');
                $factory->ext1 = Input::get('ext1');
                $factory->ext2 = Input::get('ext2');
                $factory->ext5 = Input::get('ext5');
                $factory->orderCount = Input::get('orderCount');
                $factory->productCount = Input::get('productCount');
                if (Input::get('design') == '是')
                    $factory->design = 1;
                else
                    $factory->design = 0;
                if (Input::get('refund') == '是')
                    $factory->refund = 1;
                else
                    $factory->refund = 0;
                if (Input::get('shipmentOK') == '是')
                    $factory->shipmentOK = 1;
                else
                    $factory->shipmentOK = 0;
                $factory->zhangqi = Input::get('zhangqi');
                $factory->description = Input::get('description');

                $factory->save();

                $picture = ProductPicture::where('id',$id)->where('type',0)->get();
                return Redirect::intended("/cms/factory_info/$id")->with(['factory' => $factory, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //删除工厂信息
    public function deleteFactory($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['factory_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                Factory::where('factory_id',$id)->delete();
                $factory = Factory::paginate(10);
                return view('/cms/factory',['factories' => $factory]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //查找工厂信息
    public function searchFactory(){
        session_start();
        if(isset($_SESSION['username'])){
            $factory = Factory::where('username','like','%'.Input::get('name').'%')->paginate(10);
            return view('/cms/factory',['factories' => $factory]);
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //品牌商列表页面
    public function brand(){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['brand_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $brand = Brand::paginate(10);
                return view('/cms/brand',['brands' => $brand]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //品牌商详情页面
    public function brand_info($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['brand_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $brand = Brand::where('brand_id',$id)->first();
                $picture = ProductPicture::where('id',$id)->where('type',1)->get();
                return view('cms/brand_info',['brand' => $brand, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //品牌商信息修改页
    public function modifyBrandInfo($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['brand_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $brand = Brand::where('brand_id',$id)->first();
                $picture = ProductPicture::where('id',$id)->where('type',1)->get();
                return view('/cms/brand_modify',['brand' => $brand, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //修改品牌商信息
    public function updateBrandInfo($id){
        session_start();
        if(isset($_SESSION['username'])) {
            if ($_SESSION['brand_right'] == 0) {
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $brand = Brand::where('brand_id',$id)->first();
                $brand->username = Input::get('username');
                $brand->mobile = Input::get('mobile');
                $brand->weixinNo = Input::get('weixinNo');
                $brand->title = Input::get('title');
                $brand->company = Input::get('company');
                $brand->brand = Input::get('brand');
                $brand->province = Input::get('province');
                $brand->city = Input::get('city');
                $brand->region = Input::get('region');
                $brand->address = Input::get('address');
                $brand->sales = Input::get('sales');
                $brand->category = Input::get('category');
                if (Input::get('factory') == '是')
                    $brand->factory = 1;
                else
                    $brand->factory = 0;
                $brand->factorySize = Input::get('factorySize');
                if (Input::get('design') == '是')
                    $brand->design = 1;
                else
                    $brand->design = 0;
                $brand->product = Input::get('product');
                $brand->price = Input::get('price');
                $brand->style = Input::get('style');
                $brand->customPosition = Input::get('customPosition');
                $brand->customAge = Input::get('customAge');
                if (Input::get('refund') == '是')
                    $brand->refund = 1;
                else
                    $brand->refund = 0;
                $brand->description = Input::get('description');

                $brand->save();

                $picture = ProductPicture::where('id',$id)->where('type',1)->get();
                return Redirect::intended("/cms/brand_info/$id")->with(['brand' => $brand, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //删除品牌商信息
    public function deleteBrand($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['brand_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                Brand::where('brand_id',$id)->delete();
                $brand = Brand::paginate(10);
                return view('/cms/brand',['brands' => $brand]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //查找品牌商信息
    public function searchBrand(){
        session_start();
        if(isset($_SESSION['username'])){
            $brand = Brand::where('username','like','%'.Input::get('name').'%')->paginate(10);
            return view('/cms/brand',['brands' => $brand]);
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //设计师列表页面
    public function designer(){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['designer_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $designer = Designer::paginate(10);
                return view('/cms/designer',['designers' => $designer]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //设计师详情页面
    public function designer_info($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['designer_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $designer = Designer::where('designer_id',$id)->first();
                $picture = ProductPicture::where('id',$id)->where('type',2)->get();
                return view('cms/designer_info',['designer' => $designer, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //设计师信息修改页
    public function modifyDesignerInfo($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['designer_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $designer = Designer::where('designer_id',$id)->first();
                $picture = ProductPicture::where('id',$id)->where('type',2)->get();
                return view('/cms/designer_modify',['designer' => $designer, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //修改设计师信息
    public function updateDesignerInfo($id){
        session_start();
        if(isset($_SESSION['username'])) {
            if ($_SESSION['designer_right'] == 0) {
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $designer = Designer::where('designer_id',$id)->first();
                $designer->username = Input::get('username');
                $designer->mobile = Input::get('mobile');
                $designer->weixinNo = Input::get('weixinNo');
                $designer->title = Input::get('title');
                $designer->designType = Input::get('designType');
                $designer->company = Input::get('company');
                $designer->country = Input::get('country');
                $designer->province = Input::get('province');
                $designer->city = Input::get('city');
                $designer->region = Input::get('region');
                $designer->address = Input::get('address');
                if (Input::get('designTeam') == '是')
                    $designer->designTeam = 1;
                else
                    $designer->designTeam = 0;
                if (Input::get('brand') == '是')
                    $designer->brand = 1;
                else
                    $designer->brand = 0;
                $designer->designBrand = Input::get('designBrand');
                $designer->designExperience = Input::get('designExperience');
                $designer->description = Input::get('description');

                $designer->save();

                $picture = ProductPicture::where('id',$id)->where('type',2)->get();
                return Redirect::intended("/cms/designer_info/$id")->with(['designer' => $designer, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //删除设计师信息
    public function deleteDesigner($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['designer_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                Designer::where('designer_id',$id)->delete();
                $designer = Designer::paginate(10);
                return view('/cms/designer',['designers' => $designer]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //查找设计师信息
    public function searchDesigner(){
        session_start();
        if(isset($_SESSION['username'])){
            $designer = Designer::where('username','like','%'.Input::get('name').'%')->paginate(10);
            return view('/cms/designer',['designers' => $designer]);
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //档口列表页面
    public function stall(){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['stall_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $stall = Stall::paginate(10);
                return view('/cms/stall',['stalls' => $stall]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //档口详情页面
    public function stall_info($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['stall_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $stall = Stall::where('stall_id',$id)->first();
                $picture = ProductPicture::where('id',$id)->where('type',3)->get();
                return view('cms/stall_info',['stall' => $stall, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //档口信息修改页
    public function modifyStallInfo($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['stall_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $stall = Stall::where('stall_id',$id)->first();
                $picture = ProductPicture::where('id',$id)->where('type',3)->get();
                return view('/cms/stall_modify',['stall' => $stall, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //档口修改信息
    public function updateStallInfo($id){
        session_start();
        if(isset($_SESSION['username'])) {
            if ($_SESSION['stall_right'] == 0) {
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $stall = Stall::where('stall_id',$id)->first();
                $stall->username = Input::get('username');
                $stall->mobile = Input::get('mobile');
                $stall->weixinNo = Input::get('weixinNo');
                $stall->title = Input::get('title');
                $stall->stallName = Input::get('stallName');
                $stall->stallNum = Input::get('stallNum');
                $stall->city = Input::get('city');
                $stall->stall = Input::get('stall');
                $stall->province = Input::get('province');
                $stall->stallCity = Input::get('stallCity');
                $stall->region = Input::get('region');
                $stall->address = Input::get('address');
                $stall->style = Input::get('style');
                $stall->category = Input::get('category');
                if (Input::get('shipmentOK') == '是')
                    $stall->shipmentOK = 1;
                else
                    $stall->shipmentOK = 0;

                $stall->save();

                $picture = ProductPicture::where('id',$id)->where('type',3)->get();
                return Redirect::intended("/cms/stall_info/$id")->with(['stall' => $stall, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //删除档口信息
    public function deleteStall($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['stall_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                Stall::where('stall_id',$id)->delete();
                $stall = Stall::paginate(10);
                return view('/cms/stall',['stalls' => $stall]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //查找档口信息
    public function searchStall(){
        session_start();
        if(isset($_SESSION['username'])){
            $stall = Stall::where('username','like','%'.Input::get('name').'%')->paginate(10);
            return view('/cms/stall',['stalls' => $stall]);
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //修改档口图片信息
    public function updateStallImg($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['stall_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $stall = Stall::where('stall_id',$id)->first();
                $image = Input::get('img');
                foreach ($image as $img){
                    ProductPicture::where('id',$id)->where('type',3)->where('url',$img)->delete();
                }
                $picture = ProductPicture::where('id',$id)->where('type',3)->get();
                echo "<script>alert('删除成功!');</script>";
                return Redirect::intended("/cms/stall_info/$id")->with(['stall' => $stall, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
}