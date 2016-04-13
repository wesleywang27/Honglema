<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\OAuthUser;
use Config;
use Wechat;

class WechatAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session('wechat.oauth_user')) {
            $wechat = Wechat::oauth();
            if ($request->has('state') && $request->has('code')) {
                // todo 会出现竞争状态
                $original = $wechat->user()->getOriginal();

                $oauthUser = OAuthUser::where("openid", $original['openid'])->where("oauth_type", Config::get("constants.OAUTH_THYP.WECHAT"))->first();
                if ($oauthUser == null) {
                    $oauthUser = new OAuthUser();
                    $oauthUser->oauth_type = Config::get("constants.OAUTH_THYP.WECHAT");

                    $oauthUser->openid   = $original['openid'];
                    $oauthUser->unionid  = $original['unionid'];
                    $oauthUser->nickname = $original['nickname'];
                    $oauthUser->sex      = $original['sex'] === 1? Config::get("constants.SEX.MALE") : Config::get("constants.SEX.FEMALE");
                    $oauthUser->language = $original['language'];
                    $oauthUser->city     = $original['city'];
                    $oauthUser->province = $original['province'];
                    $oauthUser->country  = $original['country'];

                    // todo 需要上传自己服务器,防止用户更换头像后失效
                    $oauthUser->avatar   = $original['headimgurl'];
                        $oauthUser->save();
                }


                session(['wechat.oauth_user' => $oauthUser]);

                return redirect()->to(url($request->url(), array_except($request->query(), ['code', 'state'])));
            }

            return $wechat->redirect($request->fullUrl());
        }

        
        return $next($request);
    }
}
