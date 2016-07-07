<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/20
 * Time: 13:03
 */
namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityCommodityList;
use App\Models\Commodity;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MerchantController extends Controller{
    //商家创建页
    public function merchantCreate(){
        session_start();
        if(isset($_SESSION['name'])) {
            return view('/didi/merchant_create');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    
    //添加商家
    public function merchantStore(Request $request){
        $merchant = new Merchant();
        
        $merchant->name = $request->input('name');
        $merchant->country = $request->input('country');
        $merchant->province = $request->input('province');
        $merchant->city = $request->input('city');
        $merchant->region = $request->input('region');
        $merchant->address = $request->input('address');
        $merchant->wechat = $request->input('wechat');
        $merchant->cellphone = $request->input('cellphone');
        $merchant->contact = $request->input('contact');
        $merchant->contact_phone = $request->input('contact_phone');
        $merchant->contact_email = $request->input('contact_email');
        $merchant->category = $request->input('category');
        $merchant->brand_name = $request->input('brand_name');
        $merchant->shop_id = $request->input('shop_id');
        $merchant->sales = $request->input('sales');
        $merchant->introduction = $request->input('introduction');

        $merchant->status = 1;  //后台创建的商家，直接审核通过
        
        $merchant->save();

        return Redirect::intended('/didi/MerchantList');
    }

    //商家信息删除
    public function merchantDelete($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $activity_id = Activity::where('merchant_id',$id)->lists('activity_id');
            ActivityCommodityList::wherein('activity_id',$activity_id)->delete();
            Activity::where('merchant_id',$id)->delete();
            Commodity::where('merchant_id',$id)->delete();
            Merchant::where('merchant_id',$id)->delete();

            return Redirect::intended('/didi/MerchantList');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //商家修改页
    public function merchantModify($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $merchant = Merchant::where('merchant_id',$id)->first();
            
            return view('/didi/merchant_modify',['merchant' => $merchant]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //修改商家信息
    public function merchantUpdate($id ,Request $request){
        $merchant = Merchant::where('merchant_id',$id)->first();

        $merchant->name = $request->input('name');
        $merchant->country = $request->input('country');
        $merchant->province = $request->input('province');
        $merchant->city = $request->input('city');
        $merchant->region = $request->input('region');
        $merchant->address = $request->input('address');
        $merchant->wechat = $request->input('wechat');
        $merchant->cellphone = $request->input('cellphone');
        $merchant->contact = $request->input('contact');
        $merchant->contact_phone = $request->input('contact_phone');
        $merchant->contact_email = $request->input('contact_email');
        $merchant->category = $request->input('category');
        $merchant->brand_name = $request->input('brand_name');
        $merchant->shop_id = $request->input('shop_id');
        $merchant->sales = $request->input('sales');
        $merchant->introduction = $request->input('introduction');
        
        $merchant->save();

        return Redirect::intended("/didi/MerchantInfo/$id")->with(['merchant' => $merchant]);
    }

    //审核商家
    public function merchantCheck($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $merchant = Merchant::where('merchant_id',$id)->first();
            $merchant->status = 1;
            $merchant->save();

            return Redirect::intended('/didi/MerchantCheckList');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //商家列表页
    public function merchantList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $merchant = Merchant::orderBy('created_at','desc')->paginate(20);

            return view('/didi/merchant_list',['merchants' => $merchant]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //商家审核页
    public function merchantCheckList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $merchant = Merchant::where('status',0)->orderBy('created_at','desc')->paginate(20);

            return view('/didi/merchant_list',['merchants' => $merchant]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //商家详情页
    public function merchantInfo($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $merchant = Merchant::where('merchant_id',$id)->first();

            return view('/didi/merchant_info',['merchant' => $merchant]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
}