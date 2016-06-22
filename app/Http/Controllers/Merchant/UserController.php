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
use App\Models\Merchant;

class UserController extends RootController{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $merchant = Merchant::where('merchant_id',2)->first();

        return view('merchant.user',['merchant' => $merchant]);
        //return view('merchant.index');
       
    }

    public function modify(){
        $merchant = Merchant::where('merchant_id',2)->first();
        //$picture = ProductPicture::where('id',$id)->where('type',0)->get();
        //return view('/cms/factory_modify',['factory' => $factory, 'pictures' => $picture]);
        return view('merchant.personalData',['merchant' => $merchant]);
    } 

    public function save(){
        $saveList = $_POST;
        $open_id = $saveList['openId'];//openId
        unset($saveList['openId']);
        $merchant = Merchant::where('merchant_id',$open_id)->first();
        foreach ($saveList as $key => $value) {
           $merchant->$key = $value; 
        }
        $merchant->status = 0;
        $merchant->save();
        return view('merchant.user',['merchant' => $merchant]);
    }
}