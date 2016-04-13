<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/12
 * Time: 16:29
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Auth;

class CMSController extends Controller{
    //验证用户是否登录
    public function index(){
        session_start();
        if(isset($_SESSION['username'])){
            return view('/cms/index');
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }

    public function login(){
        if (Auth::attempt(array('name'=>Input::get('name'), 'password'=>Input::get('password')))){
            session_start();
            $_SESSION['username'] = Input::get('name');
            return Redirect::intended('/cms/index');
        }
        else{
            echo "<script>history.go(-1); alert('用户名密码错误!');</script>";
        }
    }
}