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
                // 把用户存储在数据库中
                $original = $wechat->user()->getOriginal();

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

                // todo duplicate判断不应依赖于具体数据库实现
                // todo 每次都调用save, 是不是会因为每次都获取写的锁,反而不如先查询一次,没有命中,再插入
                try {
                    $oauthUser->save();
                }
                catch (\Illuminate\Database\QueryException $e) {
                    if (!($e->errorInfo[0] === "23000" && $e->errorInfo[1] === 1062))
                        throw $e;
                }

                session(['wechat.oauth_user' => $oauthUser]);

                return redirect()->to(url($request->url(), array_except($request->query(), ['code', 'state'])));
            }

            return $wechat->redirect($request->fullUrl());
        }

        
        return $next($request);
    }
}
