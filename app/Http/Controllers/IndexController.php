<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/5/5
 * Time: 12:55
 */
namespace App\Http\Controllers;

use Illuminate\Contracts\Http\Request;
use App\Http\Requests;
use EasyWeChat\Foundation\Application;

class IndexController extends Controller{
    public function index(){
        $options = config('wechat');
        $app = new Application($options);
        $js = $app->js;

        return view('index',['js'=>$js]);
    }
}