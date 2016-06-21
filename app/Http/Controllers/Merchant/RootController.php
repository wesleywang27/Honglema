<?php
/**
 * 
 * author: 田旭耕
 * 
 */
namespace App\Http\Controllers\Merchant;

use App\Http\Requests;
use Illuminate\Contracts\Http\Request;
use Illuminate\Support\Facades\Redirect;
use EasyWeChat\Foundation\Application;
use App\Http\Controllers\Controller;

class RootController extends Controller{

	public function __construct(){
		session_start();
		// $i = $_SESSION['merchant_id'];
		if(!isset($_SESSION['merchant_id'])){
			//echo "<script>alert(1);</script>";
			$_SESSION['merchant_id'] = 1;
		}
	}
}

