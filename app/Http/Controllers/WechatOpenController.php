<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Wechat;

class WechatOpenController extends Controller
{
    public function login(Request $request) {
        $agent = $request->header('User-Agent');
        if (str_contains($agent, 'MicroMessenger')) {
            if (empty($_SESSION['wechat_user'])) {

                $_SESSION['target_url'] = 'user/profile';

                return Wechat::oauth()->scopes(['snsapi_userinfo'])->redirect('http://m.honglema.com/wechat/open/oauth_callback');
            }
        }
        else {
            return redirect('/celebrity');
        }


    }

    public function oauthCallback() {
        $user = Wechat::oauth()->user();

        $_SESSION['wechat_user'] = $user->toArray();

        $targetUrl = empty($_SESSION['target_url']) ? '/' : $_SESSION['target_url'];

        header('location:'. $targetUrl); // 跳转到 user/profile
    }
}
