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
}