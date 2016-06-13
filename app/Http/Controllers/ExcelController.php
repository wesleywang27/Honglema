<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Celebrity;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Brand;
use App\Models\Designer;
use App\Models\Factory;
use App\Models\Stall;
use App\User;
use Illuminate\Support\Facades\Redirect;

class ExcelController extends Controller{
    //工厂信息导出Excel
    public function exportFactory(){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['factory_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $user = User::where('name',$_SESSION['username'])->first();
                if($user->contact_only == 1)
                    $info = Factory::where('contact',$user->nickname)->get();
                else
                    $info = Factory::all();
                foreach ($info as $key => $value){
                    if($value['design'] == 1)
                        $design = '是';
                    else
                        $design = '否';
                    if($value['refund'] == 1)
                        $refund = '是';
                    else
                        $refund = '否';
                    if($value['shipmentOK'] == 1)
                        $shipmentOK = '是';
                    else
                        $shipmentOK = '否';
                    $export[] = array(
                        '用户ID' => $value['factory_id'],
                        '用户名' => $value['username'],
                        '手机号码' => $value['mobile'],
                        '微信号' => $value['weixinNo'],
                        '职位' => $value['title'],
                        '公司名称' => $value['company'],
                        '公司地址' => $value['country'].$value['province'].$value['city'].$value['region'].$value['address'],
                        '产品类目' => $value['category'],
                        '优势子类目' => $value['advantageSubcategory'],
                        '工厂面积' => $value['ext1'],
                        '工人数' => $value['ext2'],
                        '打样速度' => $value['ext5'],
                        '最小起订量' => $value['orderCount'],
                        '日生产量' => $value['productCount'],
                        '是否有设计团队' => $design,
                        '是否支持退换' => $refund,
                        '是否支持一件代发' => $shipmentOK,
                        '工厂主要付款方式' => $value['zhangqi'],
                        '红了吗对接人' => $value['contact'],
                        '备注' => $value['description'],
                    );
                }
                Excel::create('工厂信息汇总',function($excel) use ($export){
                    $excel->sheet('工厂信息', function($sheet) use ($export){
                        $sheet->fromArray($export);
                    });
                })->export('xls');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //品牌商信息导出Excel
    public function exportBrand(){
        session_start();
        if(isset($_SESSION['username'])) {
            if($_SESSION['brand_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $user = User::where('name', $_SESSION['username'])->first();
                if($user->contact_only == 1)
                    $info = Brand::where('contact',$user->nickname)->get();
                else
                    $info = Brand::all();
                foreach ($info as $key => $value){
                    if($value['factory'] == 1)
                        $factory = '是';
                    else
                        $factory = '否';
                    if($value['design'] == 1)
                        $design = '是';
                    else
                        $design = '否';
                    if($value['refund'] == 1)
                        $refund = '是';
                    else
                        $refund = '否';
                    $export[] = array(
                        '用户ID' => $value['brand_id'],
                        '用户名' => $value['username'],
                        '手机号码' => $value['mobile'],
                        '微信号' => $value['weixinNo'],
                        '职位' => $value['title'],
                        '公司名称' => $value['company'],
                        '公司地址' => $value['country'].$value['province'].$value['city'].$value['region'].$value['address'],
                        '品牌名称' => $value['brand'],
                        '2015年线上销售额' => $value['sales'],
                        '类目' => $value['category'],
                        '是否自有工厂' => $factory,
                        '厂房面积' => $value['factorySize'],
                        '是否有设计团队' => $design,
                        '主营产品' => $value['product'],
                        '客单价' => $value['price'],
                        '商品风格' => $value['style'],
                        '客户人群定位' => $value['customPosition'],
                        '客户年龄段' => $value['customAge'],
                        '是否支持退换' => $refund,
                        '红了吗对接人' => $value['contact'],
                        '备注' => $value['description']
                    );
                }
                Excel::create('品牌商信息汇总',function($excel) use ($export){
                    $excel->sheet('品牌商信息', function($sheet) use ($export){
                        $sheet->fromArray($export);
                    });
                })->export('xls');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //设计师信息导出Excel
    public function exportDesigner(){
        session_start();
        if(isset($_SESSION['username'])) {
            if($_SESSION['designer_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $user = User::where('name', $_SESSION['username'])->first();
                if($user->contact_only == 1)
                    $info = Designer::where('contact',$user->nickname)->get();
                else
                    $info = Designer::all();
                foreach ($info as $key => $value){
                    if($value['designTeam'] == 1)
                        $designTeam = '是';
                    else
                        $designTeam = '否';
                    if($value['brand'] == 1)
                        $brand = '是';
                    else
                        $brand = '否';
                    $export[] = array(
                        '用户ID' => $value['designer_id'],
                        '设计师类型' => $value['designType'],
                        '用户名' => $value['username'],
                        '手机号码' => $value['mobile'],
                        '微信号' => $value['weixinNo'],
                        '职位' => $value['title'],
                        '公司名称' => $value['company'],
                        '公司地址' => $value['country'].$value['province'].$value['city'].$value['region'].$value['address'],
                        '是否有设计团队' => $designTeam,
                        '是否有自己的设计品牌' => $brand,
                        '设计品牌名称' => $value['designBrand'],
                        '设计经历' => $value['designExperience'],
                        '红了吗对接人' => $value['contact'],
                        '备注' => $value['description'],
                    );
                }
                Excel::create('设计师信息汇总',function($excel) use ($export){
                    $excel->sheet('设计师信息', function($sheet) use ($export){
                        $sheet->fromArray($export);
                    });
                })->export('xls');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //档口信息导出Excel
    public function exportStall(){
        session_start();
        if(isset($_SESSION['username'])) {
            if($_SESSION['stall_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $user = User::where('name', $_SESSION['username'])->first();
                if($user->contact_only == 1)
                    $info = Stall::where('contact',$user->nickname)->get();
                else
                    $info = Stall::all();
                foreach ($info as $key => $value){
                    if($value['shipmentOK'] == 1)
                        $shipmentOK = '是';
                    else
                        $shipmentOK = '否';
                    $export[] = array(
                        '用户ID' => $value['stall_id'],
                        '用户名' => $value['username'],
                        '手机号码' => $value['mobile'],
                        '微信号' => $value['weixinNo'],
                        '职位' => $value['title'],
                        '档口名称' => $value['stallName'],
                        '档口号' => $value['stallNum'],
                        '档口地址(杭州/广州)' => $value['city'].$value['stall'],
                        '档口地址(其它地区)' => $value['country'].$value['province'].$value['stallCity'].$value['region'].$value['address'],
                        '档口服装风格' => $value['style'],
                        '档口类目' => $value['category'],
                        '是否支持一件代发' => $shipmentOK,
                        '红了吗对接人' => $value['contact'],
                    );
                }
                Excel::create('档口信息汇总',function($excel) use ($export){
                    $excel->sheet('档口信息', function($sheet) use ($export){
                        $sheet->fromArray($export);
                    });
                })->export('xls');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
    //红人信息导出Excel
    public function exportCelebrity(){
        session_start();
        if(isset($_SESSION['username'])) {
            if($_SESSION['celebrity_right'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $info = Celebrity::all();
                foreach ($info as $key => $value){
                    if($value['sex'] == 0)
                        $sex = '男';
                    else
                        $sex = '女';

                    if($value['annual_income'] == 0)
                        $annual_income = '10万以下';
                    elseif($value['annual_income'] == 1)
                        $annual_income = '10~30万';
                    elseif($value['annual_income'] == 2)
                        $annual_income = '30~50万';
                    else
                        $annual_income = '50万以上';
                    $export[] = array(
                        '红人ID' => $value['id'],
                        '网络昵称' => $value['nickname'],
                        '真实姓名' => $value['realname'],
                        '性别' => $sex,
                        '生日' => $value['birthday'],
                        '城市' => $value['city'],
                        '学历' => $value['education'],
                        '身高' => $value['height'],
                        '体重' => $value['weight'],
                        '胸围' => $value['bust'],
                        '腰围' => $value['waist'],
                        '臀围' => $value['hop'],
                        '年收入' => $annual_income,
                        '职业' => $value['occupation'],
                        '手机号码' => $value['cellphone'],
                        '微信账号' => $value['wechat_id'],
                        '微博账号' => $value['weibo_nickname'],
                        '全网粉丝数量' => $value['total_fans_num'],
                        '微博粉丝数量' => $value['weibo_fans_num'],
                        '微拍粉丝数量' => $value['weipai_fans_num'],
                        '美拍粉丝数量' => $value['meipai_fans_num'],
                        '快手粉丝数量' => $value['kuaishou_fans_num'],
                        '秒拍粉丝数量' => $value['miaopai_fans_num'],
                        '标签' => $value['tags'],
                        '特长' => $value['skills'],
                        '联系地址' => $value['address'],
                        '性格' => $value['personality'],
                        '经历' => $value['experience'],
                    );
                }
                Excel::create('红人信息汇总',function($excel) use ($export){
                    $excel->sheet('红人信息', function($sheet) use ($export){
                        $sheet->fromArray($export);
                    });
                })->export('xls');
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
}