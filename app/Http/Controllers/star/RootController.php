<?php

namespace App\Http\Controllers\star;
use App\Models\OAuthUser;
use Illuminate\Http\Request;
use App\Models\Star;
use App\Models\Activity;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\StarPicture;
use App\Models\ActivityCommodityList;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Redirect;

class RootController extends Controller{
	public function __construct(){
		session_start();
		// if(!isset($_SESSION['star_id'])){

		// 	// var_dump(1111);die;
		//     return Redirect::intended('/star/visitor')->send();
		// 	//$_SESSION['star_id'] = 1;


/*		$oauthUser = new OAuthUser();
		$oauthUser->openid   = "test0001";
		$oauthUser->nickname = "小喳喳";
		$oauthUser->sex      = "1";
		$oauthUser->language = "chinese";
		$oauthUser->city     = "北京";
		$oauthUser->province = "北京";
		$oauthUser->country  = "中国";
		$oauthUser->avatar   = "http://ww2.sinaimg.cn/crop.0.0.1080.1080.1024/0060HVQdjw8esl7mp9hpmj30u00u0acv.jpg";
		session(['wechat.oauth_user' => $oauthUser]);*/
		if(!isset($_SESSION['star_id'])){
			//echo "<script>alert(1);</script>";
			return Redirect::intended('/star/visitor')->send();
		}
	}


}