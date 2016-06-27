<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use OSS\OssClient;
use OSS\Core\OssException;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class PictureController extends Controller
{
/*
    public function index(Request $request){
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
    }*/


    public function store(Request $request) {
        $images = $request->file('imgs');
        $urls = [];
        $oss = new OssClient(config('oss.accessKeyId'), config('oss.accessKeySecret'), config('oss.endpoint'));
        $baseDir = "honglema/avatar";
        // todo 每张图片异步处理, 最后同步等待
        foreach ($images as $image) {
            $originName = $image->getBasename() . '.' . $image->getClientOriginalExtension();
            $image->move('/var/local/honglema/pics/orig/', $originName);
            $process = new Process("/var/local/honglema/scripts/pic_process.sh $originName");
            $process->run();

            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }

            $newName = trim($process->getOutput());
            $oss->uploadFile(config('oss.bucket'), "$baseDir/$newName", "/var/local/honglema/pics/orig/$newName");
            $oss->uploadFile(config('oss.bucket'), "$baseDir/comp-$newName", "/var/local/honglema/pics/comp/comp-$newName");

            $urls[] = "http://image.weipai.cn/$baseDir/$newName";
        }



        return response()->json(['urls' => $urls], 200);
    }
}
