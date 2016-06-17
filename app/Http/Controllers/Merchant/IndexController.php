<?php
/**
 * 
 * author: 田旭耕
 * 
 */
namespace App\Http\Controllers\Merchant;

use App\Http\Requests;
use Illuminate\Contracts\Http\Request;
use Illuminate\Support\Facades\Redirect;
use EasyWeChat\Foundation\Application;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Models\Merchant;
class IndexController extends Controller{
    public function index(){

        $user = session('wechat.oauth_user');
        
        if($user){
            $options = config('wechat');
            $app = new Application($options);
            $js = $app->js;
            return view('merchant.merchant_register',['js'=>$js]);

            $merchant = Merchant::where('open_id',$user->openid)->first();

            if($merchant){
                
                //首页
                return view('merchant.personalData',['merchant' => $merchant]);
            }else{
                return view('merchant.merchant_register',['js'=>$js]);
            }
        }else{
            echo "<script>alert(1);</script>";
        }
    }

    public function register(){
        echo "<pre>";
        var_dump($_POST);die;

        $merchant = new Merchant();
        foreach ($_POST as $key => $value) {
           $merchant->$key = trim($value); 
        }
        $merchant->status = 0;
        $merchant->save();
    }

    
}