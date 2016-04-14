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
    public function store(Request $request) {
        $images = $request->file('imgFiles');
        $urls = [];
        $oss = new OssClient(config('oss.accessKeyId'), config('oss.accessKeySecret'), config('oss.endpoint'));
        $baseDir = "honglame/avatar";
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
            $oss->uploadFile(config('oss.bucket'), "test/$baseDir/$newName", "/var/local/honglema/pics/orig/$newName");
            $oss->uploadFile(config('oss.bucket'), "test/$baseDir/comp-$newName", "/var/local/honglema/pics/comp/comp-$newName");

            $urls[] = "http://image.weipai.cn/test/$baseDir/$newName";
        }



        return response()->json(['urls' => $urls], 200);
    }
}
