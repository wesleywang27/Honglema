<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/12
 * Time: 16:29
 */
namespace App\Http\Controllers;

use Auth;
use Validator;
use App\User;
use App\Models\Brand;
use App\Models\Designer;
use App\Models\Factory;
use App\Models\Stall;
use App\Models\Celebrity;
use App\Models\Log;
use App\Models\FansProfile;
use App\Models\Picture;
use App\Models\ProductPicture;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

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
            if ($user->is_super_admin == 1)
                $_SESSION['is_super_admin'] = 1;
            else
                $_SESSION['is_super_admin'] = 0;
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
            if ($user->celebrity_right == 1)
                $_SESSION['celebrity_right'] = 1;
            else
                $_SESSION['celebrity_right'] = 0;
            return view("/cms/index");
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //用户登录
    public function login(){
        if (Auth::attempt(array('name'=>Input::get('name'), 'password'=>Input::get('password')))){
            if (Input::get('check') == 'success'){
                session_start();
                $_SESSION['username'] = Input::get('name');
                return Redirect::intended('/cms/index');
            }
            else{
                echo "<script>history.go(-1); alert('请点击验证码核验!');</script>";
            }
        }
        else{
            echo "<script>history.go(-1); alert('用户名密码错误!');</script>";
        }
    }
    //用户登出
    public function logout(){
        session_start();
        unset($_SESSION['username']);
        return Redirect::intended('/cms/login');
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
                if(Input::has('category') || Input::has('name')){
                    $name = Input::has('name') ? Input::get('name') : 'all';
                    $category = Input::has('category') ? Input::get('category') : 'all';
                    return Redirect::to("/cms/factory/$name/$category");
                }
                else{
                    $user = User::where('name',$_SESSION['username'])->first();
                    if($user->contact_only == 0)
                        $factory = Factory::paginate(10);
                    else
                        $factory = Factory::where('contact',$user->nickname)->paginate(10);
                    return view('/cms/factory')->with(['factories' => $factory ,'name' => 'all' ,'category' => 'all']);
                }
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
            return Redirect::intended('/cms/login');
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
            return Redirect::intended('/cms/login');
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
                $factory->design = Input::get('design');
                $factory->refund = Input::get('refund');
                $factory->shipmentOK = Input::get('shipmentOK');
                $factory->zhangqi = Input::get('zhangqi');
                $factory->contact = Input::get('contact');
                $factory->description = Input::get('description');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '工厂信息';
                $log->operated_username = $factory->username;
                $log->save();

                $factory->save();

                $picture = ProductPicture::where('id',$id)->where('type',0)->get();
                return Redirect::intended("/cms/factory_info/$id")->with(['factory' => $factory, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
                $factory = Factory::where('factory_id',$id)->first();

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'delete';
                $log->operated_data = '工厂信息';
                $log->operated_username = $factory->username;
                $log->save();

                ProductPicture::where('id',$id)->where('type',3)->delete();
                Factory::where('factory_id',$id)->delete();
                return Redirect::to('/cms/factoryList');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //查找工厂信息
    public function searchFactory($name,$category){
        session_start();
        if(isset($_SESSION['username'])){
            $n = ($name != 'all') ? $name : '%';
            $c = ($category != 'all') ? $category : '%';
            $user = User::where('name',$_SESSION['username'])->first();
            if($user->contact_only == 0)
                $factory = Factory::where('username','like','%'.$n.'%')->where('category','like','%'.$c.'%')->paginate(10);
            else
                $factory = Factory::where('username','like','%'.$n.'%')->where('category','like','%'.$c.'%')->where('contact',$user->nickname)->paginate(10);
            return view('/cms/factory',['factories' => $factory ,'name' => $name ,'category' => $category]);
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //修改工厂图片信息
    public function updateFactoryImg($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['factory_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $factory = Factory::where('factory_id',$id)->first();
                if(Input::has('img')){
                    $image = Input::get('img');
                    foreach ($image as $img){
                        ProductPicture::where('id',$id)->where('type',0)->where('url',$img)->delete();
                    }
                }

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

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '工厂图片';
                $log->operated_username = $factory->username;
                $log->save();

                $factory->pictures()->saveMany($pictures);

                $picture = ProductPicture::where('id',$id)->where('type',0)->get();
                
                return Redirect::intended("/cms/factory_info/$id")->with(['factory' => $factory, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //工厂添加页
    public function createFactoryIndex(){
        session_start();
        if(isset($_SESSION['username'])){
            return view('/cms/factory_create');
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //添加工厂信息
    public function createFactory(){
        session_start();
        if(isset($_SESSION['username'])){
            $validator = Validator::make(Input::all(), Factory::$rules);

            if ($validator->passes()) {
                // 验证通过就存储用户数据
                $factory = new Factory();

                $factory->username = Input::get('username');
                $factory->mobile = Input::get('mobile');
                $factory->weixinNo = Input::get('weixinNo');
                $factory->title = Input::get('title');
                $factory->company = Input::get('company');
                $factory->country = '中国';
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
                $factory->design = Input::get('design');
                $factory->refund = Input::get('refund');
                $factory->shipmentOK = Input::get('shipmentOK');
                $factory->zhangqi = Input::get('zhangqi');
                $factory->contact = Input::get('contact');
                $factory->description = Input::get('description');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'insert';
                $log->operated_data = '工厂图片';
                $log->operated_username = $factory->username;
                $log->save();

                $factory->save();

                echo "<script> alert('注册成功!'); </script>";

                return Redirect::to('/cms/factoryList');
            } else {
                // 验证没通过就显示错误提示信息
                echo "<script>history.back(); alert('请按要求填写真实信息!');</script>";
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
                if(Input::has('category') || Input::has('name')){
                    $name = Input::has('name') ? Input::get('name') : 'all';
                    $category = Input::has('category') ? Input::get('category') : 'all';
                    return Redirect::to("/cms/brand/$name/$category");
                }
                else{
                    $user = User::where('name',$_SESSION['username'])->first();
                    if($user->contact_only == 0)
                        $brand = Brand::paginate(10);
                    else
                        $brand = Brand::where('contact',$user->nickname)->paginate(10);
                    return view('/cms/brand')->with(['brands' => $brand ,'name' => 'all' ,'category' => 'all']);
                }
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
            return Redirect::intended('/cms/login');
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
            return Redirect::intended('/cms/login');
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
                $brand->factory = Input::get('factory');
                $brand->factorySize = Input::get('factorySize');
                $brand->design = Input::get('design');
                $brand->product = Input::get('product');
                $brand->price = Input::get('price');
                $brand->style = Input::get('style');
                $brand->customPosition = Input::get('customPosition');
                $brand->customAge = Input::get('customAge');
                $brand->refund = Input::get('refund');
                $brand->contact = Input::get('contact');
                $brand->description = Input::get('description');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '品牌商信息';
                $log->operated_username = $brand->username;
                $log->save();

                $brand->save();

                $picture = ProductPicture::where('id',$id)->where('type',1)->get();
                return Redirect::intended("/cms/brand_info/$id")->with(['brand' => $brand, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
                $brand = Brand::where('brand_id',$id)->first();

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'delete';
                $log->operated_data = '品牌商信息';
                $log->operated_username = $brand->username;
                $log->save();

                ProductPicture::where('id',$id)->where('type',1)->delete();
                Brand::where('brand_id',$id)->delete();
                return Redirect::to('/cms/brandList');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //查找品牌商信息
    public function searchBrand($name,$category){
        session_start();
        if(isset($_SESSION['username'])){
            $n = ($name != 'all') ? $name : '%';
            $c = ($category != 'all') ? $category : '%';
            $user = User::where('name',$_SESSION['username'])->first();
            if($user->contact_only == 0)
                $brand = Brand::where('username','like','%'.$n.'%')->where('category','like','%'.$c.'%')->paginate(10);
            else
                $brand = Brand::where('username','like','%'.$n.'%')->where('category','like','%'.$c.'%')->where('contact',$user->nickname)->paginate(10);
            return view('/cms/brand',['brands' => $brand ,'name' => $name ,'category' => $category]);
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //修改品牌商图片信息
    public function updateBrandImg($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['brand_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $brand = Brand::where('brand_id',$id)->first();
                if(Input::has('img')){
                    $image = Input::get('img');
                    foreach ($image as $img){
                        ProductPicture::where('id',$id)->where('type',1)->where('url',$img)->delete();
                    }
                }

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

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '品牌商图片';
                $log->operated_username = $brand->username;
                $log->save();

                $brand->pictures()->saveMany($pictures);

                $picture = ProductPicture::where('id',$id)->where('type',1)->get();

                return Redirect::intended("/cms/brand_info/$id")->with(['brand' => $brand, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //品牌商添加页
    public function createBrandIndex(){
        session_start();
        if(isset($_SESSION['username'])){
            return view('/cms/brand_create');
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //添加品牌商信息
    public function createBrand(){
        session_start();
        if(isset($_SESSION['username'])){
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
                $brand->factory = Input::get('factory');
                $brand->factorySize = Input::get('factorySize');
                $brand->design = Input::get('design');
                $brand->country = Input::get('country');
                $brand->province = Input::get('province');
                $brand->city = Input::get('city');
                $brand->region = Input::get('region');
                $brand->address = Input::get('address');
                $brand->product = Input::get('product');
                $brand->price = Input::get('price');
                $brand->style = Input::get('style');
                $brand->customPosition = Input::get('customPosition');
                $brand->customAge = Input::get('customAge');
                $brand->refund = Input::get('refund');
                $brand->contact = Input::get('contact');
                $brand->description = Input::get('description');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'insert';
                $log->operated_data = '品牌商信息';
                $log->operated_username = $brand->username;
                $log->save();

                $brand->save();

                echo "<script> alert('注册成功!'); </script>";

                return Redirect::to('/cms/brandList');
            } else {
                // 验证没通过就显示错误提示信息
                echo "<script>history.back(); alert('请按要求填写真实信息!');</script>";
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
                if(Input::has('name')){
                    $name = Input::has('name') ? Input::get('name') : 'all';
                    return Redirect::to("/cms/designer/$name/all");
                }
                else{
                    $user = User::where('name',$_SESSION['username'])->first();
                    if($user->contact_only == 0)
                        $designer = Designer::paginate(10);
                    else
                        $designer = Designer::where('contact',$user->nickname)->paginate(10);
                    return view('/cms/designer')->with(['designers' => $designer ,'name' => 'all']);
                }
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
            return Redirect::intended('/cms/login');
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
            return Redirect::intended('/cms/login');
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
                $designer->designTeam = Input::get('designTeam');
                $designer->brand = Input::get('brand');
                $designer->designBrand = Input::get('designBrand');
                $designer->designExperience = Input::get('designExperience');
                $designer->contact = Input::get('contact');
                $designer->description = Input::get('description');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '设计师信息';
                $log->operated_username = $designer->username;
                $log->save();

                $designer->save();

                $picture = ProductPicture::where('id',$id)->where('type',2)->get();
                return Redirect::intended("/cms/designer_info/$id")->with(['designer' => $designer, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
                $designer = Designer::where('designer_id',$id)->first();

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'delete';
                $log->operated_data = '设计师信息';
                $log->operated_username = $designer->username;
                $log->save();

                ProductPicture::where('id',$id)->where('type',2)->delete();
                Designer::where('designer_id',$id)->delete();
                return Redirect::to('/cms/designerList');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //查找设计师信息
    public function searchDesigner($name){
        session_start();
        if(isset($_SESSION['username'])){
            $n = ($name != 'all') ? $name : '%';
            $user = User::where('name',$_SESSION['username'])->first();
            if($user->contact_only == 0)
                $designer = Designer::where('username','like','%'.$n.'%')->paginate(10);
            else
                $designer = Designer::where('username','like','%'.$n.'%')->where('contact',$user->nickname)->paginate(10);
            return view('/cms/designer',['designers' => $designer ,'name' => $name]);
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //修改设计师图片信息
    public function updateDesignerImg($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['designer_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $designer = Designer::where('designer_id',$id)->first();
                if(Input::has('img')){
                    $image = Input::get('img');
                    foreach ($image as $img){
                        ProductPicture::where('id',$id)->where('type',2)->where('url',$img)->delete();
                    }
                }

                $pictures = [];
                if(Input::has('itemImage')){
                    foreach (Input::get('itemImage') as $img) {
                        $picture = new ProductPicture();
                        $picture->type = 2;//设计师类型为2
                        $picture->url = $img;
                        $picture->file_id = pathinfo($img)['filename'];
                        $picture->upload_time = time();
                        $pictures[] = $picture;
                    }
                }

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '设计师图片';
                $log->operated_username = $designer->username;
                $log->save();

                $designer->pictures()->saveMany($pictures);

                $picture = ProductPicture::where('id',$id)->where('type',2)->get();

                return Redirect::intended("/cms/designer_info/$id")->with(['designer' => $designer, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //设计师添加页
    public function createDesignerIndex(){
        session_start();
        if(isset($_SESSION['username'])){
            return view('/cms/designer_create');
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //添加设计师信息
    public function createDesigner(){
        session_start();
        if(isset($_SESSION['username'])){
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
                $designer->province = Input::get('province');
                $designer->city = Input::get('city');
                $designer->region = Input::get('region');
                $designer->address = Input::get('address');
                $designer->designExperience = Input::get('designExperience');
                $designer->designTeam = Input::get('designTeam');
                $designer->brand = Input::get('brand');
                $designer->designBrand = Input::get('designBrand');
                $designer->contact = Input::get('contact');
                $designer->description = Input::get('description');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'insert';
                $log->operated_data = '设计师信息';
                $log->operated_username = $designer->username;
                $log->save();

                $designer->save();

                return Redirect::to('/cms/designerList');
            } else {
                // 验证没通过就显示错误提示信息
                echo "<script>history.back(); alert('请按要求填写真实信息!');</script>";
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
                if(Input::has('name')){
                    $name = Input::has('name') ? Input::get('name') : 'all';
                    return Redirect::to("/cms/stall/$name/all");
                }
                else{
                    $user = User::where('name',$_SESSION['username'])->first();
                    if($user->contact_only == 0)
                        $stall = Stall::paginate(10);
                    else
                        $stall = Stall::where('contact',$user->nickname)->paginate(10);
                    return view('/cms/stall')->with(['stalls' => $stall ,'name' => 'all']);
                }
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
            return Redirect::intended('/cms/login');
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
            return Redirect::intended('/cms/login');
        }
    }
    //修改档口信息
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
                $stall->shipmentOK = Input::get('shipmentOK');
                $stall->contact = Input::get('contact');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '档口信息';
                $log->operated_username = $stall->username;
                $log->save();

                $stall->save();

                $picture = ProductPicture::where('id',$id)->where('type',3)->get();
                return Redirect::intended("/cms/stall_info/$id")->with(['stall' => $stall, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
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
                $stall = Stall::where('stall_id',$id)->first();

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'delete';
                $log->operated_data = '档口信息';
                $log->operated_username = $stall->username;
                $log->save();

                ProductPicture::where('id',$id)->where('type',3)->delete();
                Stall::where('stall_id',$id)->delete();
                return Redirect::to('/cms/stallList');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //查找档口信息
    public function searchStall($name){
        session_start();
        if(isset($_SESSION['username'])){
            $n = ($name != 'all') ? $name : '%';
            $user = User::where('name',$_SESSION['username'])->first();
            if($user->contact_only == 0)
                $stall = Stall::where('username','like','%'.$n.'%')->paginate(10);
            else
                $stall = Stall::where('username','like','%'.$n.'%')->where('contact',$user->nickname)->paginate(10);
            return view('/cms/stall',['stalls' => $stall ,'name' => $name]);
        }
        else{
            return Redirect::intended('/cms/login');
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
                if(Input::has('img')){
                    $image = Input::get('img');
                    foreach ($image as $img){
                        ProductPicture::where('id',$id)->where('type',3)->where('url',$img)->delete();
                    }
                }

                $pictures = [];
                if(Input::has('itemImage')){
                    foreach (Input::get('itemImage') as $img) {
                        $picture = new ProductPicture();
                        $picture->type = 3;//档口类型为3
                        $picture->url = $img;
                        $picture->file_id = pathinfo($img)['filename'];
                        $picture->upload_time = time();
                        $pictures[] = $picture;
                    }
                }

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '档口图片';
                $log->operated_username = $stall->username;
                $log->save();

                $stall->pictures()->saveMany($pictures);

                $picture = ProductPicture::where('id',$id)->where('type',3)->get();

                return Redirect::intended("/cms/stall_info/$id")->with(['stall' => $stall, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //档口添加页
    public function createStallIndex(){
        session_start();
        if(isset($_SESSION['username'])){
            return view('/cms/stall_create');
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //添加档口信息
    public function createStall(){
        session_start();
        if(isset($_SESSION['username'])){
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
                $stall->city = Input::get('city');
                $stall->stall = Input::get('stall');
                $stall->country = Input::get('country');
                $stall->province = Input::get('province');
                $stall->stallCity = Input::get('stallCity');
                $stall->region = Input::get('region');
                $stall->address = Input::get('address');
                $stall->style = Input::get('style');
                $stall->category = Input::get('category');
                $stall->shipmentOK = Input::get('shipmentOK');
                $stall->contact = Input::get('contact');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'insert';
                $log->operated_data = '档口信息';
                $log->operated_username = $stall->username;
                $log->save();

                $stall->save();

                return Redirect::to('/cms/stallList');
            } else {
                // 验证没通过就显示错误提示信息
                echo "<script>history.back(); alert('请按要求填写真实信息!');</script>";
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //红人列表页面
    public function celebrity(){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['celebrity_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                if(Input::has('name')){
                    $name = Input::has('name') ? Input::get('name') : 'all';
                    return Redirect::to("/cms/celebrity/$name/all");
                }
                else{
                    $celebrity = Celebrity::paginate(10);
                    return view('/cms/celebrity')->with(['celebrities' => $celebrity ,'name' => 'all']);
                }
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //红人详情页面
    public function celebrity_info($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['celebrity_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $celebrity = Celebrity::where('id',$id)->first();
                $picture = Picture::where('uid',$id)->get();
                return view('cms/celebrity_info',['celebrity' => $celebrity, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //红人信息修改页
    public function modifyCelebrityInfo($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['celebrity_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $celebrity = Celebrity::where('id',$id)->first();
                $picture = Picture::where('uid',$id)->get();
                return view('/cms/celebrity_modify',['celebrity' => $celebrity, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //修改红人信息
    public function updateCelebrityInfo($id){
        session_start();
        if(isset($_SESSION['username'])) {
            if ($_SESSION['celebrity_right'] == 0) {
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $celebrity = Celebrity::where('id',$id)->first();
                $celebrity->nickname = Input::get('nickname');
                $celebrity->realname = Input::get('realname');
                if(Input::get('sex') == '女')
                    $celebrity->sex = 1;
                else
                    $celebrity->sex = 0;
                $celebrity->birthday = Input::get('birthday');
                $celebrity->city = Input::get('city');
                $celebrity->education = Input::get('education');
                $celebrity->height = Input::get('height');
                $celebrity->weight = Input::get('weight');
                $celebrity->bust = Input::get('bust');
                $celebrity->waist = Input::get('waist');
                $celebrity->hop = Input::get('hop');
                $celebrity->annual_income = Input::get('annual_income');
                $celebrity->occupation = Input::get('occupation');
                $celebrity->cellphone = Input::get('cellphone');
                $celebrity->wechat_id = Input::get('wechat_id');
                $celebrity->weibo_nickname = Input::get('weibo_nickname');
                $celebrity->total_fans_num = Input::get('total_fans_num');
                $celebrity->weibo_fans_num = Input::get('weibo_fans_num');
                $celebrity->weipai_fans_num = Input::get('weipai_fans_num');
                $celebrity->meipai_fans_num = Input::get('meipai_fans_num');
                $celebrity->kuaishou_fans_num = Input::get('kuaishou_fans_num');
                $celebrity->miaopai_fans_num = Input::get('miaopai_fans_num');
                $celebrity->tags = Input::get('tags');
                $celebrity->skills = Input::get('skills');
                $celebrity->address = Input::get('address');
                $celebrity->personality = Input::get('personality');
                $celebrity->experience = Input::get('experience');

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '红人信息';
                $log->operated_username = $celebrity->realname;
                $log->save();

                $celebrity->save();

                $picture = Picture::where('uid',$id)->get();
                return Redirect::intended("/cms/celebrity_info/$id")->with(['celebrity' => $celebrity, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //删除红人信息
    public function deleteCelebrity($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['celebrity_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $celebrity = Celebrity::where('id',$id)->first();

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'delete';
                $log->operated_data = '档口信息';
                $log->operated_username = $celebrity->realname;
                $log->save();

                FansProfile::where('id',$id)->delete();
                Picture::where('uid',$id)->delete();
                Celebrity::where('id',$id)->delete();

                return Redirect::to('/cms/celebrityList');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //查找红人信息
    public function searchCelebrity($name){
        session_start();
        if(isset($_SESSION['username'])){
            $n = ($name != 'all') ? $name : '%';
            $celebrity = Celebrity::where('realname','like','%'.$n.'%')->paginate(10);
            return view('/cms/celebrity',['celebrities' => $celebrity ,'name' => $name]);
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //修改红人图片信息
    public function updateCelebrityImg($id){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['celebrity_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $celebrity = Celebrity::where('id',$id)->first();
                if(Input::has('img')){
                    $image = Input::get('img');
                    foreach ($image as $img){
                        Picture::where('uid',$id)->where('url',$img)->delete();
                    }
                }

                $pictures = [];
                if(Input::has('itemImage')){
                    foreach (Input::get('itemImage') as $img) {
                        $picture = new Picture();
                        $picture->uid = $id;
                        $picture->url = $img;
                        $picture->file_id = pathinfo($img)['filename'].'.jpg';
                        $picture->upload_time = time();
                        $pictures[] = $picture;
                    }
                }

                $log = new Log();
                $log->username = $_SESSION['username'];
                $log->operation = 'update';
                $log->operated_data = '红人图片';
                $log->operated_username = $celebrity->realname;
                $log->save();

                $celebrity->pictures()->saveMany($pictures);

                $picture = Picture::where('uid',$id)->get();

                return Redirect::intended("/cms/celebrity_info/$id")->with(['celebrity' => $celebrity, 'pictures' => $picture]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
}