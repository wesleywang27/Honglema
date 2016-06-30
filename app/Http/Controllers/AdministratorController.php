<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/30
 * Time: 17:04
 */
namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdministratorController extends Controller{
    //密码修改页
    public function passwordModify(){
        session_start();
        if(isset($_SESSION['name'])) {
            return view('/didi/administrator_password_modify');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //修改密码
    public function passwordUpdate(Request $request){
        session_start();
        $name = $_SESSION['name'];

        $administrator = Administrator::where('name',$name)->first();
        $current_password = $request->input('currentPassword');

        if($administrator->password == md5($current_password)){
            $password = $request->input('password');
            $password_confirm = $request->input('passwordConfirm');

            if($password == $password_confirm){
                if(strlen($password) < 8){
                    echo "<script>history.back(); alert('密码至少8位!');</script>";
                    return 0;
                }
                else{
                    $administrator->password = md5($password);
                    $administrator->save();

                    return Redirect::intended('/didi/index');
                }
            }
            else{
                echo "<script>history.back(); alert('请输入相同密码!');</script>";
                return 0;
            }
        }
        else{
            echo "<script>history.back(); alert('当前密码错误!');</script>";
            return 0;
        }
    }
}