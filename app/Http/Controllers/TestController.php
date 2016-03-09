<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Celebrity;

class TestController extends Controller
{
    public function celebrityList(Request $request, $format = null) {
        $this->validate($request, [
            'sort' => 'in:comprehensive,total_fans_num,weibo_fans_num,weipai_fans_num,kuaishou_fans_num, ' .
            'miaopai_fans_num, meipai_fans_num']);
        $orderBy = $request->input('sort', 'sort_manually');
        if ($orderBy == 'comprehensive') {
            $orderBy = 'sort_manually';
        }
        $celebrities = Celebrity::with('pictures')->orderBy($orderBy, 'DESC')->paginate(10);
        foreach ($celebrities as &$celebrity) {
            foreach ($celebrity->pictures as &$picture) {
                $picture->url = dirname($picture->url) . "/comp-" . basename($picture->url);
            }
        }
        if ($format === '.json')
            return $celebrities;
        return view('celebrities2', ['celebrities' => $celebrities]);
    }

    public function index($format = null)
    {
        $celebrities = Celebrity::with('pictures')->orderBy('sort_manually', 'DESC')->paginate(10);
        foreach ($celebrities as &$celebrity) {
            $celebrity->setVisible(['id', 'pictures']);
            foreach ($celebrity->pictures as &$picture) {
                $picture->setVisible(['url']);
                $picture->url = dirname($picture->url) . "/comp-" . basename($picture->url);
            }
        }

        if ($format === '.json')
            return $celebrities;
        return view('celebrities', ['celebrities' => $celebrities]);
    }

    public function show (Celebrity $celebrity) {
        return view('test', ['celebrity' => $celebrity]);
    }

    public function show2($format = null) {
        $celebrities = Celebrity::with('pictures')->orderBy('total_fans_num', 'DESC')->paginate(10);
        foreach ($celebrities as &$celebrity) {
            foreach ($celebrity->pictures as &$picture) {
                $picture->url = dirname($picture->url) . "/comp-" . basename($picture->url);
            }
        }
        if ($format === '.json')
            return $celebrities;
        return view('test', ['celebrities' => $celebrities]);
    }
}
