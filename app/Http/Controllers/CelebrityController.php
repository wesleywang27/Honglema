<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Celebrity;

class CelebrityController extends Controller
{
    public function index(Request $request, $format = null) {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料

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

    public function edit(Celebrity $celebrity) {
        return view('celebrity.edit', ['celebrity' => $celebrity]);
    }

    public function create() {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料

        return view('celebrity.create', ["user" => $user]);
    }

    public function store(Request $request) {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
        $celebrity = new Celebrity();
        $celebrity->oauth_user_id = $user->id;

        $celebrity->nickname = $request->input('nickname');
        $celebrity->sex = $request->input('sex') === config('constants.SEX.MALE')? 0 : 1;
        $celebrity->city = $request->input('city');
        $celebrity->bust = $request->input('bust');
        $celebrity->waist = $request->input('waist');
        $celebrity->hip = $request->input('hip');
        $celebrity->weight = $request->input('weight');
        $celebrity->height = $request->input('height');
        $celebrity->experience = $request->input('experience');
        $celebrity->birthday = $request->input('birthday');
        
        $celebrity->cellphone = $request->input('phonenum');
        $celebrity->weibo_fans_num = $request->input('weibo_fans');
        $celebrity->weipai_fans_num = $request->input('weipai_fans');
        $celebrity->misopai_fans_num = $request->input('miaopai_fans');
        $celebrity->meipai_fans_num = $request->input('meipai_fans');
        $celebrity->kuaishou_fans_num = $request->input('kuaishou_fans');

        $celebrity->avatar      = $request->input('headimg');
        $celebrity->id_name     = $request->input('id_name');
        $celebrity->id_code     = $request->input('id_code');
        $celebrity->id_image    = $request->input('id_image');
        $celebrity->weibo_id    = $request->input('weibo_id');
        $celebrity->weipai_id   = $request->input('weipai_id');
        $celebrity->miaopai_id  = $request->input('miaopai_id');
        $celebrity->meipai_id   = $request->input('meipai_id');
        $celebrity->kuaishou_id = $request->input('kuaishou_id');


        //todo  其它属性填充


        $celebrity->save();

        return response(['id' => $celebrity->id ], 201);
    }

    public function update(Request $request, $id) {
        // todo 需要检查权限
        $where = Celebrity::where('id', $id);
        $ret = $where->update($request->all());
        return $ret;
    }
}
