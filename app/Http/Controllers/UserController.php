<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/19
 * Time: 11:23
 */
namespace App\Http\Controllers;

use Validator;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\User;

class UserController extends Controller{
    //后台用户列表页
    public function index(){
        session_start();
        if(isset($_SESSION['username'])){
            $user = User::paginate(6);
            return view('/cms/user',['users' => $user]);
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //后台用户创建页
    public function createUserIndex(){
        session_start();
        if(isset($_SESSION['username'])){
            return view('/cms/user_create');
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //创建后台用户
    public function createUser(){
        session_start();
        if(isset($_SESSION['username'])){
            $validator = Validator::make(Input::all(), User::$rules);

            if ($validator->passes()) {
                $user = new User();

                $user->name = Input::get('name');
                $user->email = Input::get('email');
                $user->password = Hash::make(Input::get('password'));
                $user->is_admin = Input::get('is_admin');

                $user->save();

                echo "<script> alert('添加成功!'); </script>";

                return view('/cms/index');
            }else {
                // 验证没通过就显示错误提示信息
                echo "<script>history.go(-1); alert('信息有误!');</script>";
            }
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
    //用户信息修改页
    public function user_info(){
        session_start();
        if(isset($_SESSION['username'])){
            return view('/cms/user_info');
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
}