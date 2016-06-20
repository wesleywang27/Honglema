<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/20
 * Time: 13:03
 */
namespace App\Http\Controllers;

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
        $merchant->status = 1;
        
        $merchant->save();

        return Redirect::intended('/didi/MerchantList');
    }
    
    //商家列表页
    public function merchantList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $merchant = Merchant::paginate(10);

            return view('/didi/merchant_list',['merchants' => $merchant]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
}