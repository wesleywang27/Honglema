<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/17
 * Time: 13:40
 */
namespace App\Http\Controllers;

use Auth;
use Hash;
use Validator;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DidiController extends Controller{

    public function index(){
        session_start();
        if(isset($_SESSION['name'])){
            return view('/didi/index');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    public function loginIndex(){
        return view('/didi/login');
    }

    public function login(Request $request){
        session_start();
        if ($request->input('check') == 'success'){
            if(Auth::attempt(array('name'=>$request->input('name'), 'password'=>$request->input('password')))){
                $_SESSION['name'] = $request->input('name');
                return Redirect::intended('/didi/index');
            }
            else{
                //$_SESSION['error'] = "用户名密码错误！";
                return Redirect::intended('/didi/login');
            }
        }
        else{
            //$_SESSION['error'] = "验证码错误！";
            return Redirect::intended('/didi/login');
        }
    }

    public function logout(){
        session_start();
        unset($_SESSION['name']);
        return Redirect::intended('/didi/login');
    }
}