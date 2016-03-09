<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Celebrity;

class CelebrityController extends Controller
{
    public function index(Request $request, $format = null) {
        $this->validate($request, [
            'sort' => 'in:comprehensive,total_fans_num,weibo_fans_num,weipai_fans_num,kuaishou_fans_num, ' .
                'miaopai_fans_num, meipai_fans_num']);
        $orderBy = $request->input('sort', 'sort_manually');
        if ($orderBy == 'comprehensive') {
            $orderBy = 'sort_manually';
        }
        $celebrities = Celebrity::with('pictures')->orderBy($orderBy, 'DESC')->paginate(10);
        foreach ($celebrities as &$celebrity) {
            if ($celebrity->profile_img) {
                $celebrity->profile_img = dirname($celebrity->profile_img) . "/comp-" . basename($celebrity->profile_img);
            }
            foreach ($celebrity->pictures as &$picture) {
                $picture->url = dirname($picture->url) . "/comp-" . basename($picture->url);
            }
        }
        if ($format === '.json')
            return $celebrities;
        return view('celebrities', ['celebrities' => $celebrities]);
    }

    public function show(Celebrity $celebrity) {
        return view('celebrity', ['celebrity' => $celebrity]);
    }
}
