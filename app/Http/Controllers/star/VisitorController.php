<?php

namespace App\Http\Controllers\star;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Star;
use App\Models\StarPicture;
use App\Models\Activity;
use App\Models\OAuthUser;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class VisitorController extends Controller
{
     public function __construct(){
        session_start();
/*        $oauthUser = new OAuthUser();
        $oauthUser->openid   = "test0001";
        $oauthUser->nickname = "小喳喳";
        $oauthUser->sex      = "2";
        $oauthUser->language = "chinese";
        $oauthUser->city     = "北京";
        $oauthUser->province = "北京";
        $oauthUser->country  = "中国";
        $oauthUser->avatar   = "http://ww2.sinaimg.cn/crop.0.0.1080.1080.1024/0060HVQdjw8esl7mp9hpmj30u00u0acv.jpg";
        session(['wechat.oauth_user' => $oauthUser]);*/
    }

    //网红端进入首页
    public function index()
    {
        $user = session('wechat.oauth_user');
        $openid = $user->openid;
        $star = Star::where('openid', $openid)->first();
        if ($star) {
            $_SESSION['star_id'] = $star->star_id;
            $star = Star::where('star_id', $star->star_id)->first();
            $starPictures= StarPicture::where('uid',$star->star_id)->get();
            //注册用户跳转到活动界面
            return Redirect::intended('/star/activityList');
        } else {
            $activityList = Activity::where('activity_status', 1)->orderBy('created_at','desc')->get();
            //游客跳转到游客首页
            return view('star.visitor', ['list' => $activityList]);
        }
    }
//判断用户状态并跳转
    public function create()
    {
        $user = session('wechat.oauth_user');
        $star = Star::where('openid', $user->openid)->first();
         if ($star) {
            $_SESSION['star_id'] = $star->star_id;
            $star = Star::where('star_id', $star->star_id)->first();
            $starPictures= StarPicture::where('uid',$star->star_id)->get();
             return Redirect::intended('/star/activityList');
        }else{
            return view('star.create', ["user" => $user]);
         }
    }
//网红注册
    public function register(Request $request)
    {
        $user = session('wechat.oauth_user');
        $openid = $user->openid;
        $input = Input::all();
        $star = Star::where('openid', $openid)->first();
        if($star){
            //网红已注册,返回exist
            return 'exist';
        }else{
            //网红未注册,则保存
        $star = new Star();
        $star->openid = $openid;
        $star->province=$user->province;
        $star->city=$user->city;

        $star->avatar=$user->avatar;
        $star->name = $request->input('name');
        $star->sex = $request->input('sex');
        $star->location = $request->input('location');
        $star->cup = $request->input('cup');
        $star->weight = $request->input('weight');
        $star->height = $request->input('height');
        $star->age = $request->input('age');

        $star->occupation = $request->input('occupation');
        $star->education = $request->input('education');
        $star->experience = $request->input('experience');
        $star->real_name = $request->input('real_name');
        $star->ID_number = $request->input('ID_number');
        $star->shirt_size = $request->input('shirt_size');
        $star->pants_size = $request->input('pants_size');
        $star->shoes_size = $request->input('shoes_size');

        $star->cellphone = $request->input('cellphone');
        $star->address = $request->input('address');
        $star->weibo_id = $request->input('weibo_id');
        $star->weipai_id = $request->input('weipai_id');
        $star->miaopai_id = $request->input('miaopai_id');
        $star->weipai_id = $request->input('weipai_id');
        $star->meipai_id = $request->input('meipai_id');
        $star->kuaishou_id = $request->input('kuaishou_id');
        $star->wechat = $request->input('wechat');
        $star->alipay_name = $request->input('alipay_name');
        $star->alipay_account = $request->input('alipay_account');
        $star->region = $request->input('region');
        $star->region = 0;
        $star->status = 0;
        $star->save();
            //保存网红照片
        $star = Star::where('openid', $openid)->first();
        $_SESSION['star_id'] = $star->star_id;
            $starpicture = $request->input('imgdata');
            if(count($starpicture)>0){
            foreach ($starpicture as $url) {
                $starPicture = new StarPicture();
                $starPicture->url = $url;
                $starPicture->file_id = pathinfo($url)['filename'];
                $starPicture->uid = $star->star_id;
                $starPicture->save();
            }
        }
        }
   }
}
