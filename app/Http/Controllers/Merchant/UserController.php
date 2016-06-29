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
        $merchant_id = $_SESSION['merchant_id'];
        $merchant = Merchant::where('merchant_id',$merchant_id)->first();
        return view('merchant.user',['merchant' => $merchant]);
        //return view('merchant.index');
       
    }

    public function modify(){
        $merchant_id = $_SESSION['merchant_id'];
        $merchant = Merchant::where('merchant_id',$merchant_id)->first();
        return view('merchant.personalData',['merchant' => $merchant]);
    } 

    public function save(){
        $merchant_id = $_SESSION['merchant_id'];
        $saveList = $_POST;
        $merchant = Merchant::where('merchant_id',$merchant_id)->first();
        foreach ($saveList as $key => $value) {
           $merchant->$key = $value; 
        }
        $merchant->status = 0;
        $merchant->save();
        return view('merchant.user',['merchant' => $merchant]);
    }
}