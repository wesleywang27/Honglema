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
        $images = $request->file('imgs');
        $urls = [];
        foreach ($images as $image) {
            $oss = new OssClient(config('oss.accessKeyId'), config('oss.accessKeySecret'), config('oss.endpoint'));
            $path = 'honglema/avatar/filename.jpg';
            $oss->uploadFile(config('oss.bucket'), $path, $image->getPathname());
            $urls[] = "http://image.weipai.cn/"  . $path;
        }

//        $process = new Process('ls -lsa');
//        $process->run();
//
//        if (!$process->isSuccessful()) {
//            throw new ProcessFailedException($process);
//        }
//
//        echo $process->getOutput();


        return response()->json(['urls' => $urls], 201);
    }
}
