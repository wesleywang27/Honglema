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
use OSS\OssClient;
use OSS\Core\OssException;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
class IndexController extends Controller{
    public function __construct(){
        session_start();
    }
    
    public function register(){
        // var_dump(1);die;
        $user = session('wechat.oauth_user');
        if($user){

            $merchant = Merchant::where('open_id',$user->openid)->first();

            if($merchant){
                    
                //首页
                $_SESSION['merchant_id'] = $merchant['merchant_id'];

                $options = config('wechat');
                $app = new Application($options);
                $js = $app->js;

                return view('merchant.user',['merchant' => $merchant]);
            }else{
                return view('merchant.merchant_register',['user'=>$user]);
            }
        }else{
            echo "<script>alert('微信未授权');</script>";
        }
    }


    public function saveRegister(){
        $merchant = new Merchant();
        foreach ($_POST as $key => $value) {
           $merchant->$key = trim($value); 
        }
        $merchant->status = 0;
        $merchant->save();
        $_SESSION['merchant_id'] = $merchant['merchant_id'];
    }

    //上传图片
    public function upLoadFile(){
        // $img = $_FILES['headImg'];
        $img = Input::file('img');
        if(!$img -> isValid()){
            echo "error!";die;
        }
        $options = config('wechat');
        $app = new Application($options);
        $accessToken = $app->access_token; // EasyWeChat\Core\AccessToken 实例
        // var_dump($img);die;
        $token = $accessToken->getToken();
        // $token = 'oLt3BBTbwa7XsVPsr7sGblHUzbaR0cZ3Gfugz0tyPt2fowW7dWU5PaiVazEBmbGcFiY0Vk5A2TcsaRmesG2H3bjmNUQOoNlnrnDIh5RaK5hbgs8IqGeCgFMfGA64J6MMIEZiADAEAV';

        //上传到微信服务器
        $path = $img -> move(getcwd().'/uploadPic','1.jpeg');
        $post_data = array( 
            "media"=>  curl_file_create(getcwd().'/uploadPic/1.jpeg'),
        ); 
        // var_dump($post_data);die;
        $url="http://file.api.weixin.qq.com/cgi-bin/media/upload?access_token=".$token."&type=image"; 
        $result  = self::http_request($url,$post_data);
        $result = json_decode($result,true);
        $media_id = $result['media_id'];

        //获取上传到微信服务器的链接
        $img = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=".$token."&media_id=".$media_id;

        //将图片下载到本地服务器
        $filename = getcwd().'/uploadPic/'.$media_id.'.jpeg';
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

    public function http_request($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

    //保存图片(已弃用)
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