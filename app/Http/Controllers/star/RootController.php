<?php

namespace App\Http\Controllers\star;
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

		// }
	}

	public function setSession(){
		$_SESSION['star_id'] = 1;
	}
}