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

    public function store() {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
        $celebrity = new Celebrity();
        $celebrity->oauth_user_id = $user->id;

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
