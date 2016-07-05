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
use Illuminate\Support\Facades\Input;
use App\Models\Merchant;
use OSS\OssClient;
use OSS\Core\OssException;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class RootController extends Controller{

	public function __construct(){
		session_start();
		// unset($_SESSION['merchant_id']);
		// $i = $_SESSION['merchant_id'];
		if(!isset($_SESSION['merchant_id'])){
			return Redirect::intended('/Merchant/register')->send();
			// $_SESSION['merchant_id'] = 4;
		}
	}

	
}

