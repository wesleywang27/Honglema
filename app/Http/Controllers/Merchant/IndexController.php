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
var_dump(1);die;
        $user = session('wechat.oauth_user');
        $options = config('wechat');
        $app = new Application($options);
        $js = $app->js;
        return view('merchant.merchant_register',['js'=>$js,'user'=>$user]);
        if($user){
            $options = config('wechat');
            $app = new Application($options);
            $js = $app->js;
            return view('merchant.merchant_register',['js'=>$js,'user'=>$user]);

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

        $merchant = new Merchant();
        foreach ($_POST as $key => $value) {
           $merchant->$key = trim($value); 
        }
        $merchant->status = 0;
        $merchant->save();
    }

    //保存图片
    public function uploadPic(Request $request){
        $media_id = $request->get('media_id');

        //获取token
        $options = config('wechat');
        $app = new Application($options);
        $accessToken = $app->access_token; // EasyWeChat\Core\AccessToken 实例
        $token = $accessToken->getToken(); // token 字符串

        //获取上传到微信服务器的链接
        $img = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=".$token."&media_id=".$media_id;

        //将图片下载到本地服务器
        $filename = '/var/local/honglema/pics/orig/'.$media_id.'.jpg';
        $this->getImg($img,$filename);

        //上传图片到阿里oss
        $oss = new OssClient(config('oss.accessKeyId'), config('oss.accessKeySecret'), config('oss.endpoint'));
        $baseDir = "honglema/product";
        // todo 每张图片异步处理, 最后同步等待\
        $newName = $media_id.".jpg";
        $oss->uploadFile(config('oss.bucket'), "$baseDir/$newName", $filename);

        //返回链接
        $url = "http://image.weipai.cn/$baseDir/$newName";

        return $url;
    }
}