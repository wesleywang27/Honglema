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

class IndexController extends Controller{
    public function index(){
        // var_dump(1);die;
        // $user = session('wechat.oauth_user');
        // $options = config('wechat');
        //$app = new Application($options);
       // $js = $app->js;
        return view('merchant.personalData');
        //return view('merchant.index');
       
    }
    public function login(){
        $options = config('wechat');
        $app = new Application($options);

        $qrcode = $app->qrcode;
        $result = $qrcode->temporary(56, 6 * 24 * 3600);

        $ticket = $result->ticket;// 或者 $result['ticket']
        $expireSeconds = $result->expire_seconds; // 有效秒数
        $url = $result->url; // 二维码图片解析后的地址，开发者可根据该地址自行生成需要的二维码图片

        $img = $qrcode->url($ticket);
        
        return view('login',['img' => $img]);
    }
}